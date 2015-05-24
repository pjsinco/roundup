<?php namespace App\Http\Controllers;

use App\Email;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class MenuController extends Controller {

	public function index()
	{
	    return view('menu.index');
	}

    public function processMenuSelection(Requests\CreateMenuRequest $request)
    {
        $input = $request->all();
        $email = Email::find($input['email-id']);
        switch ( $request['select-item'] ) {
            case 'quote':
                return redirect('email/' . $input['email-id'] . '/quote/create')
                    ->withInput(['emailId', $input['email-id']]);
                //return view('quote.create')
                    //->with('emailId', $input['email-id']);
                break;
            
            default:
                
                break;
        }
        dd($request->all());
    }

}
