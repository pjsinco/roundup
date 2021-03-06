<?php namespace App\Http\Controllers;

use App\Email;
use App\Article;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ArticleController extends Controller {

    public function __construct()
    {
        $this->middleware('auth');
    }

	public function create(Request $request)
	{
        $emailId = $request->segment(2);

	    return view('articles.create')
            ->with('emailId', $emailId);
	}

    public function store(Requests\CreateArticleRequest $request)
    {
        $input = $request->all();
        $email = Email::find($input['email_id']);
        // checkbox is not included in $request if it's not checked,
        // so we set a false value if it isn't there
        $input['bottom_rule'] = ($request->has('bottom_rule') ? '1' : '0');

        $articles = $email->articles;
        $feature = null;
        foreach ($articles as $article) {
            if ($article->type == 'feature') {
                $feature = $article->id;
            }
        }

        $article = Article::create($input);

        // make sure we store only 1 feature
        if ($input['type'] == 'feature' && !empty($feature)) {
            //return redirect()->action('EmailController@create' $request);
            return back();
        }

        $email->articles()->save($article);
        $article->email()->associate($email);

        return redirect()->action('EmailController@show', [$input['email_id']]);
    }

    public function edit($articleId)
    {
        $article = Article::findOrFail($articleId);
        return view('articles.edit')
            ->with('article', $article)
            ->with('emailId', $article->email->id);
    }
    
    public function update($id, Requests\CreateArticleRequest $request)
    {
        $input = $request->all();
        $input['bottom_rule'] = ($request->has('bottom_rule') ? '1' : '0');
        $article = Article::findOrFail($id);
        $article->update($input);
        return redirect()->action('EmailController@show', $article->email->id);
    }
    
    public function destroy($id)
    {
        return;
    }
}
