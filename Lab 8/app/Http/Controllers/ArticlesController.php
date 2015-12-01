<?php namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\ArticleRequest;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Auth;

class ArticlesController extends Controller {

	public function index(){

        $articles = Article::latest('publish_at')->published()->get();
        return view('articles.index', compact('articles'));
    }

    public function show($id){

        $article = Article::find($id);
          if(!$article){
           abort(404);
          }
        dd($article->publish_at);
        return view('articles.show', compact('article'));
    }

    public function create(){
        return view('articles.create');
    }

    public function store(ArticleRequest $request){

        $article = new Article($request->all());

        Auth::user()->articles()->save($article);

        return redirect('articles');
    }

    public function edit($id){
        $article = Article::find($id);
        if(!$article){
            abort(404);
            }
        return view('articles.edit', compact('article'));
        }

    public function update($id, ArticleRequest $request){
        $article = Article::find($id);
        if(!$article){
            abort(404);
        }
        //return $article;
        $article->update($request->all());
        return redirect('articles');
    }

}
