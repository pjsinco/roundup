<?php namespace App\Http\Controllers;

use App\Email;
use App\Quote;
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

    function show($id)
    {
        $email = Email::find($id);
        $quote = Quote::where('email_id', $email->id)->first();
        return view('email.show')
            ->with('email', $email)
            ->with('quote', $quote)
            ->nest('menu', 'menu.index', ['emailId' => $email['id']]);
    }

}
