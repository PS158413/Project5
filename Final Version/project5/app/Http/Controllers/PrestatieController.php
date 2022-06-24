<?php

namespace App\Http\Controllers;

use App\Models\Prestatie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Validator;

class PrestatieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function index()
    {
        return Prestatie::all();
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
        log::channel('prestatie')->info('prestatie', [ 'action'=> Route::current()->getActionMethod()]);
        return Prestatie::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\prestatie  $prestatie
     * @return prestatie
     */
    public function show(prestatie $prestatie)
    {
        return $prestatie;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\prestatie  $prestatie
     * @return \Illuminate\Http\Response
     */
    public function edit(prestatie $prestatie)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\prestatie  $prestatie
     * @return prestatie
     */
    public function update(Request $request, prestatie $prestatie)
    {
        // $prestatie->update($request->all());
        // return $prestatie;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\prestatie  $prestatie
     * @return \Illuminate\Http\Response
     */
    public function destroy(prestatie $prestatie)
    {
        $prestatie->delete();
    }
}
