<?php

namespace App\Http\Controllers\admin;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    public function index(){

    }
    public function create(){
        return view('admin.category.create');
    }
    public function store(Request $request){
        $categorieValidator = $request ->validate([
            'name' => 'required',
            'slug' => ['required',Rule::unique('categories','slug')],
        ]);
        Category::create($categorieValidator);
        return redirect('/');
        // dd($request->all());
        // $validator = Validator::make($request->all(),[
        //     'name' => 'required',
        //     'slug' => 'required|unique:categories',
        // ]);
        // if($validator -> passes()){

        // } else{
        //     return response()->json([
        //         'status' => false,
        //         'errors' => $validator->errors()
        //     ]);
        // }
    }
    public function edit(){

    }
    public function update(){

    }
    public function destroy(){

    }

}
