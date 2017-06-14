<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use App\Colour;

class ColourController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Colour::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $colour = new Colour();
       $colour->name = Input::get("name");
       $colour->rgb = str_replace("#", "", Input::get("rgb"));
       $colour->enabled = (Input::get("enabled") == "on" ) ? true : false;
       $colour->save();

       return response()->json([
         "response" => "Saved"
       ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $colour = Colour::where("name", $id)->get();
        return $colour;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      return response()->json([
        "response" => "Enabled"
      ], 200);
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
      $colour = Colour::where("name", $id)->orWhere("rgb", $id)->first();
      $colour->enabled = Input::get("enabled");
      $colour->save();

      return response()->json([
        "response" => "Updated"
      ], 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        \App\Colour::destroy($id);
        return response()->json([
          "response" => "Deleted"
        ], 200);
    }
}
