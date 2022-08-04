<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Requests\Admin\CatFormRequest;
use Illuminate\Support\Facades\Auth;


class CategoryController extends Controller
{
    public function index(){
        return view('admin.category.index');
    }
    public function create(){
        return view('admin.category.create');
    }
    /**
 * Store the category.
 *
 * @param  CatFormRequest  $request
 * @return Response
 */

    public function store(CatFormRequest $request){
        /***
       $rules=array(
            'name'=>['required|string|max:200'],
            'slug'=>['required|string|max:200'],
            'description'=>['required'|'string'],
            'image'=>['required|image|file'],
            'meta_title'=>['required|string|max:200'],
            'meta_desc'=>['required|string'],
            'meta_keyword'=>['required|string'],
            'navbarStatus'=>['nullable|boolean'],
            'status'=>['nullable|boolean']
        );
            $data = Input::all();

            $validator = \Validator::make($data, $rules);
            if ($validator->fails()) {
                return redirect('admin/category')->with('message', 'Category Added Succuesfully!');
            }else{
                return view('home');
            };**/

        $data = $request->validate();
        $category = new Category;

        $category->name = Input::get['name'];
        $category->slug = Input::get['slug'];
        $category->description =Input::get['description'];


        if ($request->hasfile('image')){
            $file = $request->file('image');
            $filename = time().'.'.$file->getClientOriginalExtension();
            $file->move('uploads/category/',$filename);
            $category->image = $filename;
        }

        $category->meta_title = Input::get['meta_title'];
        $category->meta_desc = Input::get['meta_desc'];
        $category->meta_keyword = Input::get['meta_keyword'];
        $category->navbarStatus = $request->navbarStatus == true ?'1':'0';
        $category->status = $request->status == true ?'1':'0';
        $category->created_by =Auth::user()->id;
        $category->save();

        return redirect('admin/category')->with('message', 'Category Added Succuesfully!');

    }
}
