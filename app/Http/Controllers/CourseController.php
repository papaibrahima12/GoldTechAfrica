<?php

namespace App\Http\Controllers;

use App\Models\Cours;
use Http;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cours =  Cours::all();
        return view('cours.list',['cours' => $cours]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     public function add(){
        return view('cours.add');
     }

     public function showAll(){
        $cours =  Cours::all();
        return view('admin.listCours',['cours' => $cours]);
     }

    public function store(Request $request)
    {
        $cours = Cours::create($request->all());
        if ($cours) {
            return $this->showAll();
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
        $cours = Cours::find($id);
        if ($cours) {
            return response()->json(["status" => "success"]);
        }else {
            return response()->json(["status" => "failed"]);
        }
    }

    public function update(Request $request, $id)
    {
       $cours = Cours::find($id);
       if($cours){
        $cours->update($request->all());
        return response()->json(["status" => "success"]);
    }else{
        return response()->json(["status" => "error"]);
    }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $cours = Cours::find($id);
    if($cours){
        $cours->delete();
    }
        return $this->showAll();
    }
}
