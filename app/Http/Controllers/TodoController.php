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
    public function delete($todo,Request $request)
    {
        $author = Todo::find($todo);
        Todo::find($todo)->delete($author);
        return redirect('/');
    }
    public function show($todo)
    {
        return $todo;
    }
    public function search(Request $request)
    {
        $item = Todo::where('content' , $request->content)->first();
        $word = Category::all();
        $param = [
            'item' => $item,
            'word' => $word,
            'input' => $request->input
        ];
        return view( 'index', $param);
    }
} 