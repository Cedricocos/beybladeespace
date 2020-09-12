<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;

class NewsController extends Controller
{
    public function show(String $slug){

       $news =  \DB::table('news')->where('slug',$slug)->first();
        if(is_null($news)){
            dd(404);
        }
       return view('news\newsShow', [
           'news' => $news
       ]);

    }

    public function showAll(){

       $newsAll =  \DB::table('news')->orderBy('created_at', 'desc')->get();
  
       return view('news\newsShowAll', [
           'newsAll' => $newsAll
       ]);

    }

    public function create(){
        request()->validate([
            'title' => 'required',
            'image_path' => 'required',
            'body' => 'required' 
        ]);
        $news = new News();
        $news->title = request('title');
        $news->body = nl2br(request('body'));
        $news->author_id = 1; //todo
        $news->created_at = time()+ 7200;
        $news->image_path = request('image_path');
        if(is_null(request('image_path'))){
            $news->image_path = "https://cdn.discordapp.com/attachments/704083034709819513/754402279238664252/cheeers.PNG";
        }
        $preSlug = str_replace(' ', '-', $news->title);
        $slug = strtolower($preSlug);

        $news->slug = $slug;

        $news->save();
        
        return redirect('/actualite/'.$slug);


    }
}

