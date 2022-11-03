<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories =  Category::all();
        return view('category.list',[
            'categories' => $categories
        ]);
        return response()->json($categories);
    }

    public function add(){
        return view('category.add');
     }

     public function showAll(){
        return view('notif');
     }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $categories = Category::create($request->all());
        if ($categories) {
            return redirect('/categorie/add');
        }else {
            return $this->add();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = Category::find($id);
        return response()->json($category);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $categories = Category::find($id);
       if($categories){
        $categories->update($request->all());
        return response()->json(["status" => "success"]);
    }else{
        return response()->json(["status" => "failed"]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categories = Category::find($id);
         if($categories){
         $categories->delete();
         return response()->json(["status" => "success"]);
        }
        else{
        return response()->json(["status" => "failed"]);
       }
    }
}
