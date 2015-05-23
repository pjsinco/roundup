<?php namespace App\Http\Controllers;

use App\Roundup;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class RoundupController extends Controller {

    public function index() 
    {
        return view('roundup.index');
    }

    public function create()
    {
        return view('roundup.create');
    }

    public function test()
    {
        return view('roundup._base');
    }

    public function store(Requests\CreateRoundupRequest $request)
    {
        $input = $request->all();

        Roundup::create($input);

        return redirect('item');
    }

    public function show($id)
    {
        $roundup = Roundup::find($id);
        //dd($roundup);
        return view('roundup.show');
            //->with($roundup);
    }

    

}
