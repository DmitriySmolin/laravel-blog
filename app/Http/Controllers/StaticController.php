<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticController extends Controller
{
    public function index()
    {
        $title = 'Главная страница сайта!';
//        return view('static/index', compact('title'));
        return view('static.index')->with('header',$title);
    }

    public function about()
    {
        $data = [
            'title'=> 'Страничка про нас!',
            'params' => ['BMW','Audi','Volva']
        ];

        return view('static.about')->with($data);
    }
}
