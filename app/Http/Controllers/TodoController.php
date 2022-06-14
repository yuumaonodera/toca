<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        $item = Todo::all();
        return view('index', ['item' => $item]);
    }
    public function create(Request $request)
    {
        $validate_rule = [
            'content' => 'required | max:20'
        ];
        $this->validate($request, $validate_rule);
        $form = $request->all();
        Todo::create($form);
        return redirect('/');
    }
}
