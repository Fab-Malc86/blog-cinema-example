<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Movie;

class PageController extends Controller
{




    public function home()
    {
        $title = 'Home';
        $name = 'Fabrizio';
        $surname = 'Malcangi';

        return view('home', ['name' => $name, 'surname' => $surname, 'title' => $title, 'articles' => Article::all(), 'movies' => Movie::all()]);
    }
}
