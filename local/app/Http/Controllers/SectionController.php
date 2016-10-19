<?php
namespace App\Http\Controllers;
use App\Section;
use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\ViewComposer;
class SectionController extends Controller
{

    public function get()
    {
        $all = Section::OrderBy('sortable','asc')->get();
        return view('admin_panel',['news'=>$all]);
    }

    public function create_section(Request $request)
    {
        $section_name = $request['section'];

        $section = new Section();
        $section->section = $section_name;
        $section->save();
        return redirect()->route('post');

    }

    public function show(Request $request)
    {
        $search = false;


        $result = Section:: join('post_section', 'sections.id', '=', 'post_section.section_id')
            ->join('posts', 'post_section.post_id', '=', 'posts.id')
            ->orderBy('posts.id', 'asc');

          if(!empty($request->input('global_search')))
          {
               $search = true;
               $query_global =  $request->input('global_search');
               $result = $result
                  ->where('posts.id','LIKE','%'.$query_global.'%')
                  ->orWhere('section','LIKE','%'.$query_global.'%')
                  ->orWhere('title','LIKE','%'.$query_global.'%')
                  ->orWhere('description','LIKE','%'.$query_global.'%');


          }
else{
          if($request->input('id'))
          { $search = true;
              $result = $result
                  ->where('posts.id','LIKE','%'.$request->input('id').'%');
          }

    if($request->input('category'))
    { $search = true;
        $result = $result
            ->where('section','LIKE','%'.$request->input('category').'%');
    }

    if($request->input('title'))
    { $search = true;
        $result = $result
            ->where('title','LIKE','%'.$request->input('title').'%');
    }

    if($request->input('description'))
    { $search = true;
        $result = $result
            ->where('description','LIKE','%'.$request->input('description').'%');
    }

}
        //For Including
    $all_sections = Section::orderBy('sections.sortable', 'asc')->get();



       $latest2posts =  Post::orderBy('id','desc')->take(2)->get();
////       $cars = DB::table('sections')
//            ->join('post_section', 'sections.id','=','post_section.section_id')
//            ->join('posts', 'post_section.post_id','=','posts.id')
//            ->where('section','Cars')
//            ->get();
//        $last_car = $cars->last();

//            $airplanes = DB::table('sections')
//         ->join('post_section','sections.id','=','post_section.section_id')
//           ->join('posts','post_section.post_id','=','posts.id')
//           ->where('section','Planes')
//           ->get();
//        $last_airplane = $airplanes->last();


//        $technology = DB::table('sections')
//            ->join('post_section','sections.id','=','post_section.section_id')
//            ->join('posts','post_section.post_id','=','posts.id')
//            ->where('section','Technology')
//            ->get();
//        $last_technology = $technology->last();

//       All POST CALLED IMAGES
         $images = Post::all();

//        SOCIAL
//          $social = DB::table('locations')
//              ->where('id',5)
//              ->get();

//        $image = DB::table('locations')
//            ->where('id',5)
//            ->pluck('baner');


        if($search == false)
        {
            ///empty
            $result = $result->paginate();

        }
        else{
            //$search == true
            $result = $result->paginate(1);
        }


        $sections_and_posts_for_cickle =  Section:: join('post_section', 'sections.id', '=', 'post_section.section_id')
            ->join('posts', 'post_section.post_id', '=', 'posts.id')
            ->orderBy('sections.section', 'desc')
            ->get();


        $this->getHTML();


       return view('news')
         ->with('all_posts',$result)
         ->with('latest2posts',$latest2posts)
//         ->with('cars',$cars)
//         ->with('airplanes',$airplanes)
//         ->with('last_car',$last_car)
//         ->with('last_airplane',$last_airplane)
//         ->with('technology',$technology)
//         ->with('last_technology',$last_technology)
         ->with('images',$images)
         ->with('sections_and_posts_for_cickle',$sections_and_posts_for_cickle)
         ->with('all_sections',$all_sections);





    }

    public function getHTML()
    {
               require('simple_html_dom.php');

        $sections = Section::all();

        foreach($sections as $section)
        {
            $link =  $section->rss_link;
            if(!empty($link))
            {


                $html = file_get_html($link);

$il = 0;
               foreach($html->find('div.asset ') as $item)
               {
                      $il = ++$il;
                   if( $il == 5) break;

                  $link_rss = 'https://www.cnet.com'.$item->find('a')[0]->href;
                   $image_rss  = $item->find('img')[0]->src;
                   $title_rss =  $item->find('h2')[0]->innertext;
                    $description_rss =  $item->find('p')[0]->innertext;


                   $check = DB::table('posts')
                        ->where('link', $link_rss)
                        ->get();

                   if(count($check) == 0)
                    {
                        $post = new Post();
                        $post->title = $title_rss ;
                        $post->description = $description_rss;
                        $post->image = $image_rss;
                        $post->link = $link_rss;
                        $post->save();
//                $last_posts_id = DB::getPdo()->lastInsertId();
                        $post->sections()->attach($section->id);
//                echo $last_posts_id;
                    }

//////////////////////////////


//                     foreach($item->find('a,img') as $a)
//                     {
//                         echo $a->href;
//                         echo '<br>';
//                         echo $a->src;
//                         die;
//
//                     }

             //  }




//                $xml_string = file_get_contents($link);

//                $xml = simplexml_load_string($xml_string);
//                $json = json_encode($xml);
//                $array = json_decode($json,TRUE);
//
//                $html = $array['channel']['item'];
//
//
//                foreach($html as $element)
//                {
//
//
//                    $image_rss       = $element['enclosure']['@attributes']['url'];
//                    $title_rss       = $element['title'];
//                    $description_rss = $element['description'];
//                    $link_rss =  $element['link'];
//
//
//
//
//                    $check = DB::table('posts')
//                        ->where('link', $link_rss)
//                        ->get();
//
//
//                    if(count($check) == 0)
//                    {
//                        $post = new Post();
//                        $post->title = $title_rss ;
//                        $post->description = $description_rss;
//                        $post->image = $image_rss;
//                        $post->link = $link_rss;
//                        $post->save();
////                $last_posts_id = DB::getPdo()->lastInsertId();
//                        $post->sections()->attach($section->id);
////                echo $last_posts_id;
//                    }
//
//
              }

            }

        }



          return true;
    }



    public function show_single_from_table($id)
    {
         $all_posts = Post::all();

         $sections_posts = Section:: join('post_section', 'sections.id', '=', 'post_section.section_id')
             ->join('posts', 'post_section.post_id', '=', 'posts.id')
             ->where('posts.id',$id)
             ->get();


//        POPULAR
        DB::table('posts')->where('id', $id)->increment('popular');

        $post = Post::where('id',$id)->get();


        return view('single_view_from_table')
               ->with('post',$post)
               ->with('all_posts',$all_posts)
               ->with('sections_posts',$sections_posts);


    }



}