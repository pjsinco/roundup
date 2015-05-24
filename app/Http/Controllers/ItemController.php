<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Roundup;

use Illuminate\Http\Request;

class ItemController extends Controller {

    public function index()
    {
        return view('item.index')
            ->with('date', 'hello');
    }

    public function create($roundupId)
    {
        $roundup = Roundup::find($roundupId);
        return view('item.create')
            ->with('date', $roundup['date']);
    }

    public function store(Requests\CreateItemRequest $request)
    {
        dd($request);
    }

}
