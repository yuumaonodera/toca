<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;


class CategoryController extends Controller
{
    public function index()
    {
       $item = Category::all();
       return view('category',  ['item' => $item]);
    }
    public function create(Request $request)
    {
        $validate_rule = [
            'content'  => 'required | max:10 | string'
        ];
        $this->validate($request, $validate_rule);
        $form = $request->all();
        Category::create($form);
        return redirect('/category');
    }
    public function update($id, Request $request)
    {
        $validate_rule = [
            'content' => 'required | max:10 |
            string'
        ];
        $form = $request->all();
        unset($form['_token']);
        Category::where('id', $id)->update($form);
        return redirect('/category');
    }
    public function delete($category,Request $request)
    {
        $author = Category::find($category);
        Category::find($category)->delete($author);
        return redirect('/category');
    }
    public function show($category)
    {
        return $category;
    }
}
