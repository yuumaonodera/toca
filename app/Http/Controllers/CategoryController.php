<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;


class CategoryController extends Controller
{
    public function index()
    {
       $item = Category::all();
       return view('index',  ['item' => $item]);
       return view('/category');
    }
    public function create()
    {
        $validate_rule = [
            'content'  => 'required | max:20'
        ];
        $this->validate($request, $validate_rule);
        $form = $request->all();
        Category::create($form);
        return redirect('/');
    }
}
