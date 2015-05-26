<?php namespace App\Http\Controllers;

use App\Email;
use App\Article;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ArticleController extends Controller {

	public function create(Request $request)
	{
        $emailId = $request->segment(2);

	    return view('article.create')
            ->with('emailId', $emailId);
	}

    public function store(Requests\CreateArticleRequest $request)
    {
        $input = $request->all();
        $email = Email::find($input['email_id']);

        // checkbox is not included in $request if it's not checked,
        // so we set a false value if it isn't there
        $input['bottom_rule'] = ($request->has('bottom_rule') ? '1' : '0');
        $article = Article::create($input);

        if ($input['type'] == 'feature' && empty($email->articles->toArray())) {
            $email->articles()->save($article);
            $article->email()->associate($email);
        }

        return redirect()->action('EmailController@show', [$input['email_id']]);



        
    }
}
