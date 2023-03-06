<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function news($id = 0){
        if ($id == 'berita-1'){
            return view('news.berita1');
        } else if($id == 'berita2'){
            return view('news.berita-2');
        } else{
            return view('news');
        }
    }
    
    
}
