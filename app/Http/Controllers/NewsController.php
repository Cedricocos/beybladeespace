<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class NewsController extends Controller
{
    public function show(String $slug){

       $news =  \DB::table('news')->where('slug',$slug)->first();
        if(is_null($news)){
            dd(404);
        }
       return view('newsShow', [
           'news' => $news
       ]);

    }
}
