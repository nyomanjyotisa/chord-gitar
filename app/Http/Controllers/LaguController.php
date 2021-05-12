<?php

namespace App\Http\Controllers;

use App\Lagu;
use Illuminate\Http\Request;

class LaguController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lagus = Lagu::all();
        return view('all_post', ['lagus' => $lagus]);
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
     * @param  \App\Lagu  $lagu
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $lagu = Lagu::find($id);
        $next = Lagu::where('id', '>', $id)->orderBy('id','asc')->first();
        $previous = Lagu::where('id', '<', $id)->orderBy('id','desc')->first();

        return view('post',['lagu' =>$lagu, 'next' =>$next, 'previous' =>$previous]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Lagu  $lagu
     * @return \Illuminate\Http\Response
     */
    public function edit(Lagu $lagu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Lagu  $lagu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lagu $lagu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Lagu  $lagu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lagu $lagu)
    {
        //
    }
}
