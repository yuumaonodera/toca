<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
       $item = Todo::all();
       return view('index', ['item' => $item]);
    }
    public function create()
    {
        $validate_rule = [
            'content'  => 'required | max:20'
        ];
        $this->validate($request, $validate_rule);
        $form = $request->all();
        Todo::create($form);
        return redirect('/');
    }
}
