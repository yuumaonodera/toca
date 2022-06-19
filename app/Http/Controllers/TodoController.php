<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use App\Models\Category;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        $item = Todo::all();
        $word = Category::all();
        return view('index', ['item' => $item,
    'word' => $word]);
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
    public function update($id, Request $request)
    {
        $validate_rule = [
            'content' => 'required | max:20'
        ];
        $this->validate($request, $validate_rule);
        $form = $request->all();
        unset($form['_token']);
        Todo::where('id', $id)->update($form);
        return redirect('/');
    }
    public function delete(Request $request)
    {
        $author = Todo::find($request->id);
        Todo::find($request->id)->delete($request);
        return redirect('/');
    }
}