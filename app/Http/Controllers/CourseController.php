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
        return view('cours.list',[
            'cours' => $cours
        ]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Cours::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Cours::find($id);
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

    public function showCourses(){
        return view('cours.list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cours = Cours::find($id);
    if($cours){
        $cours->delete();
        return response()->json(["status" => "success"]);
    }else{
        return response()->json(["status" => "error"]);
    }
    }
}
