<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Section;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use  Illuminate\Support\Facades\Storage;
use  Illuminate\Support\Facades\File;
use Illuminate\Http\Response;

class PostController extends Controller
{



    public function create(Request $request)
    {

        $title = $request['title'];
        $description = $request['description'];
        $check_array = $request['check_list'];


        $post = new Post();
        $post->title = $title;
        $post->description = $description;

        $post->save();
        $last_posts_id = DB::getPdo()->lastInsertId();


        $file = $request->file('image');
       // $name = $file->getClientOriginalName();
      //  $post->image = $name;

     //   $filename = $name;

        if($file)
        {
            $name =$title.'.jpg';
            DB::table('posts')
                ->where('id', $last_posts_id)
                ->update(array('image'=>$name));

            Storage::disk('local')->put($name, File::get($file));


        }


       foreach($check_array as $checked)
        {
            Post::find($last_posts_id)->sections()->attach($checked);

        }


        return redirect('news');
    }




    public function getImage($filename)
    {
       $file = Storage::disk('local')->get($filename);
        return new Response($file,200);
    }

    public function getbaner($filename)
    {

        $file = Storage::disk('local')->get('baner/'.$filename);
        return new Response($file,200);
    }

    public function show($id)
    {
        $all_posts = Post::all();


        $data = array();

        $section = Section::where('id', $id)->get();
        foreach ($section as $sec) {
            $posts = $sec->posts()->paginate(2);
            $data['posts'] = $posts;


        }



        return View::make('single_news')
            ->with('posts',$data['posts'])
            ->with('sections', $section)
            ->with('all_posts',$all_posts);
  }


    public function show_all()
    {

        $all_posts = Post::all();
        $posts = Post::paginate(3);

        return View::make('all_posts')
            ->with('posts',$posts)
            ->with('all_posts',$all_posts);
    }


    public function edit($id)
    {
        $post_id = Post::find($id)->sections()->get();
        return View::make('edit_post')
            ->with('post',Post::find($id))
            ->with('post_id',$post_id)
            ->with('sections',Section::all())
            ->with('title','Edit Post '.$id);


    }

    public function update(Request $request,$id)
    {
          $check_aray = $request['check_list'];

          Post::findOrFail($id)->sections()->sync( $check_aray);


          $post = Post::findOrFail($id);

          $post->update($request->all());
          return redirect()->route('news');
    }


    public function destroy($id)
    {
        $post = Post::where('id',$id)->first();
        $post->delete();
        return back();
    }



}
