<?php
namespace App\Http\Controllers;

use App\Section;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Post;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Routing\Redirector;
use \Illuminate\Support\Collection;
class AdminController extends Controller
{


    public function get_admin()
    {
        return view('adminview');
    }

    public function post_admin(Request $request)
    {

        $this->validate($request,[
            'adminname'=>'required|min:3',
            'password'=>'required|min:3'
        ]);

        $adminname = $request['adminname'];
        $password = $request['password'];

        if (Auth::attempt(['adminname' => $adminname, 'password' => $password,])) {
            return redirect('admin');
        }
        else{

            return redirect()->back()->withErrors('Invalid username/password !');
        }

    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('/');

    }


    public function page_404()
    {
        $all_posts = Post::all();

        return View::make('404')
            ->with('all_posts',$all_posts);
    }


    public function contact()
    {
        $all_posts = Post::all();

        return View::make('contact')
            ->with('all_posts',$all_posts);
    }

    public function change_baner(Request $request)
    {
        $file = $request->file('image');
        $name = $file->getClientOriginalName();

        if($file)
        {

            DB::table('locations')
                ->where('id', 5)
                ->update(array('baner'=>$name));

            Storage::disk('local')->put('baner/'.$name, File::get($file));

             return redirect('news');
        }
    }


    public function menuStore(Request $request)
    {

        $sections = Section::orderBy('id','asc')->get();
        $IDS = $request->json;
        $array = json_decode($IDS, true);

        $i = 1;
        $a_i = 0;
        foreach($sections as $sec)
        {

            DB::table('sections')
                ->where('id',$i++)
                ->update(array('sortable'=> $array[$a_i++]));
        }




    }


}