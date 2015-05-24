<?php namespace App\Http\Controllers;

use App\Email;
use App\Quote;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class QuoteController extends Controller {

	public function create(Request $request)
	{
        // typical url:
        // http://localhost:8000/email/2/quote/create
        // id is in segment 2
        $emailId = $request->segment(2);

	    return view('quote.create')
            ->with('emailId', $emailId);
	}

    public function store(Requests\CreateQuoteRequest $request) 
    {
        $input = $request->all();

        // Grab the Email object we're working with
        $email = Email::find($input['email-id']);

        // Create a new Quote object and fill it with the values from the form
        $quote = Quote::create(['quote' => $input['quote'], 'speaker' => $input['speaker']]);
        $quote->email_id = $input['email-id'];
        $quote->context = $input['context'];

        // Email and Quote are one-to-one;
        // Associate this quote with the email
        $email->quote_id = $quote->id;
    
        $quote->save();
        $email->save();
        
        return redirect()->action('EmailController@show', [$input['email-id']]);
    }

}
