<?php
namespace App\Http\Controllers;
use App\Post;
use App\Section;
use Illuminate\Support\Facades\DB;
class ViewComposer
{

    public function get_sections()
    {
        return $all_sections = Section::orderBy('sections.sortable', 'asc')->get();
    }

    public function get_popular()
    {
         $popular_posts = Post::orderBy('popular','desc')
                          ->limit(4)
                          ->get();
        return $popular_posts;
    }


    public function get_social()
    {
        $social = DB::table('locations')
            ->where('id',5)
            ->get();
        return $social;
    }


    public function get_baner()
    {
       $image = DB::table('locations')
           ->where('id',5)
           ->pluck('baner');

        return $image;

    }
}