<?php

namespace App\Http\Controllers\ccc;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
 use App\Models\clients;
 use App\Models\services;
 use App\Models\slider;
 use App\Models\Projects;
 use App\Models\catProject;
 use App\Models\Reviews;

class fronthomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $services =   services::take(6)->get();
      $slider =   slider::take(6)->get();
       $clients =   clients::take(15)->get();
       $Projects =   Projects::take(9)->get();
       $catProject =   catProject::take(9)->get();
       $Reviews =   Reviews::take(9)->get();
        return view('layouts.home')
        ->with('clients', $clients )->with('services', $services )->with('slider', $slider ) ->with('Projects', $Projects ) ->with('catProject', $catProject ) ->with('Reviews', $Reviews ) ;
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
