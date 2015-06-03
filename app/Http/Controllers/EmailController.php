<?php namespace App\Http\Controllers;

use App\Email;
use App\Quote;
use App\Article;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class EmailController extends Controller {

	function create()
	{
	    return view('email.create');
	}

    function store(Requests\CreateEmailRequest $request)
    {
        $input = $request->all();

        $email = Email::create($input);
        return redirect()->action('EmailController@show', [$email['id']]);
    }

    function index() 
    {
        $user = \Auth::user();
dd($user);
        $emails = Email::all();        
        return view('email.index')->with('emails', $emails);
    }

    function show($id)
    {
        $email = Email::find($id);
        $quote = Quote::where('email_id', $email->id)->first();
        $feature = Article::where('email_id', $email->id)->feature()->first();
        $articles = Article::where('email_id', $email->id)->notFeature()->get();
        return view('email.show')
            ->with('email', $email)
            ->with('quote', $quote)
            ->with('feature', $feature)
            ->with('articles', $articles)
            ->nest('menu', 'menu.index', ['emailId' => $email['id']]);
    }

    function edit($id)
    {
        $email = Email::findOrFail($id);

        $articles = $email->articles;
        return view('email.edit')
            ->with('email', $email)
            ->with('articles', $articles);
    }

    function update($id, Requests\CreateEmailRequest $request)
    {
        $email = Email::findOrFail($id);
        $email->update($request->all());
        return redirect()->action('EmailController@show', $id);
    }

}
