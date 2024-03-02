<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use App\Http\Requests\StoreMovieRequest;

class MovieController extends Controller
{


    // private $films = [];

    // public function __construct()
    // {
    //     $this->films = [

    //         1 => [
    //             'title' => 'Jurassic Park',
    //             'description' => 'Due paleontologi e un matematico sono tra le persone selezionate per partecipare a un giro organizzato a un parco a tema. Quando i dinosauri si animano e prendono il sopravvento, però, la visitasi trasforma presto in un incubo.',
    //             'category' => 'Fantascienza',
    //             'img' => '../img/jurassic-park.jpg',

    //         ],

    //         2 => [
    //             'title' => 'Spider-Man',
    //             'description' => 'Il morso di un ragno mutante dona degli incredibili, e inaspettati, poteri al giovane Peter Parker, che li usa nella guerra contro un minaccioso nemico.',
    //             'category' => 'Azione',
    //             'img' => '../img/spider-man.jpg',

    //         ],

    //         3 => [
    //             'title' => 'It',
    //             'description' => 'Un gruppo di adolescenti scopre l\'esistenza di un\'entità malvagia che si nutre delle paure degli esseri umani e che ha le sembianze di un pagliaccio di nome Pennywise. L\'essere, che dimora nelle profondità della rete fognaria, è solo uno dei volti della creatura millenaria nota come It, un mostro senza forma che si risveglia ciclicamente per mietere vittime tra i bambini della città. Per sconfiggerlo, i ragazzi devono restare uniti e mantenere vivo il sentimento di amicizia che li lega',
    //             'category' => 'Horror',
    //             'img' => '../img/it.jpg',
    //         ],
    //     ];
    // }



    public function movies()
    {
        $title = 'Movies';


        return view('movies', ['title' => $title, 'filmsStore' => Movie::all()]);
    }


    public function movie(Movie $movie, $id)
    {



        $movie = Movie::findOrFail($id);


        return view('movies.movie', ['films' => $movie]);
    }


    // Sistema CRUD scritto manualmente

    public function index()
    {
        return view('movies.index', ['filmsStore' => Movie::all()]);
    }

    public function create()
    {
        return view('movies.movie-create');
    }

    public function store(StoreMovieRequest $request)
    {
        // Movie::create([
        //     'title' => $request->title,
        //     'category' => $request->category,
        //     'description' => $request->description,
        //     'trama' => $request->trama,
        //     'img' => $request->img,
        // ]);

        $movie = Movie::create($request->all());

        if ($request->hasFile('image') && $request->file('image')->isValid()) {

            $fileName = 'copertina.' . $request->file('image')->extension();

            $movie->img = $request->file('image')->storeAs('public/movies' . $movie->id, $fileName);

            $movie->save();
        }

        return redirect()->route('movie.index');
    }

    public function edit(Movie $movie)
    {
        return view('movies.edit', compact('movie'));
    }

    public function update(StoreMovieRequest $request, Movie $movie)
    {
        $movie->update($request->all());

        return redirect()->back()->with(['success' => 'Film modificato correttamente']);
    }

    public function destroy(Movie $movie)
    {
        $movie->delete();

        return redirect()->route('movie.index')->with(['success' => 'Film eliminato correttamente']);
    }
}
