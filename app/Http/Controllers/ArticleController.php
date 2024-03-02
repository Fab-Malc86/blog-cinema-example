<?php

namespace App\Http\Controllers;

use App\Models\Article;

use App\Models\Category;

use Illuminate\Http\Request;

use App\Http\Requests\StoreArticleRequest;

class ArticleController extends Controller
{
    public function store(StoreArticleRequest $request)
    {

        // Article::create([

        //     'title' => $request->title,
        //     'category' => $request->category,
        //     'description' => $request->description,
        //     'body' => $request->body,
        //     'img' => '../img/spider-man.jpg',


        // ]);
        $article = Article::create($request->all());

        $article->user_id = auth()->user()->id;


        if ($request->hasFile('image') && $request->file('image')->isValid()) {

            $fileName = 'copertina.' . $request->file('image')->extension();

            $article->img = $request->file('image')->storeAs('public/articles' . $article->id, $fileName);
        }

        $article->save();


        // return redirect()->route('articles');
        return redirect()->back()->with(['success' => 'Articolo creato correttamente.']);
    }

    public function create()
    {
        return view('articles.create', ['categorys' => Category::all()]);
    }

    public function edit(Article $article)
    {
        if ($article->user_id != auth()->user()->id) {
            abort(404);
        }

        return view('articles.edit', ['categorys' => Category::all(), 'article' => $article]);
    }

    public function update(StoreArticleRequest $request, Article $article)
    {



        if ($article->user_id != auth()->user()->id) {
            abort(404);
        }

        $article->update($request->all());

        return redirect()->back()->with(['success' => 'Articolo modificato correttamente']);
    }

    public function destroy(Article $article)
    {
        if ($article->user_id != auth()->user()->id) {
            abort(404);
        }

        $article->delete();

        return redirect()->route('articles.index')->with(['success' => 'Articolo eliminato correttamente']);
    }


    public function articles()
    {
        $title = 'Articles';

        return view('articles', ['title' => $title, 'articles' => Article::all()]);
    }

    public function article($id)
    {
        $title = 'Article';

        $article = Article::findOrFail($id);


        return view('articles.article', ['title' => $title, 'articles' => $article]);
    }

    public function index()
    {
        $article = Article::where('user_id', auth()->user()->id)->get();

        return view('articles.index', ['articles' => $article]);
    }

    public function indexTest()
    {
        // $article = Article::paginate(2);
        // $article = Article::orderBy('title', 'DESC')->get();
        $article = Article::where('title', 'avatar')->get();

        return view('articles.index-test', ['articles' => $article]);
    }
}
