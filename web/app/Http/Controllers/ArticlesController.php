<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Models\Article;
use App\Models\Tag;
use SpaceCamp\Users;
use App\Http\Requests\ArticleRequest;
use Illuminate\Support\Facades\Auth;
use Session;

class ArticlesController extends Controller {

    public function __construct(){
        $this->middleware('auth');
    }

	public function index()
    {

        $articles = Article::latest('published_at')->published()->get();

        return view('articles.index', compact('articles'));
    }

    public function show(Article $article)
    {

        return view('articles.show', compact('article'));
    }

    public function create()
    {
        $tags = Tag::lists('name', 'id');

        return view('articles.create', compact('tags'));
    }

    /**
     * Save a new article
     * @param ArticleRequest $request
     * @return Response
     */

    public function store(ArticleRequest $request)
    {

        $article = Auth::user()->articles()->create($request->all());

        $article->tags()->attach($request->input('tag_list'));

        flash()->overlay('Your article has been created', 'Good Job');

        return redirect('articles');
    }

    public function edit(Article $article)
    {
        $tags = Tag::lists('name', 'id');

        return view('articles.edit', compact('article', 'tags'));
    }

    public function update(Article $article, ArticleRequest $request)
    {
        $article->update($request->all());

        return redirect('articles');
    }

}
