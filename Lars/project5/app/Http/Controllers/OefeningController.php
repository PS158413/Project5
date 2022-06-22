<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Oefening;

use Illuminate\Support\Facades\Log;
use Route;

class OefeningController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        log::channel('oefeningen')->info('oefeningen', [ 'action'=> Route::current()->getActionMethod()]);

        return Oefening::select('id','oefeningen','beschrijving','foto')->get();
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
        log::channel('oefeningen')->info('oefeningen', [ 'áction' => Route::current()->getActionMethod()]);
        $request->validate([
            'oefeningen'=>'required',
            'beschrijving'=>'required',
            'foto'=>'required|foto',
        ]);

        try{


            $textname = Str::random().'.'.$request->text->getClientOriginalExtension();
            Storage::disk('public')->putFileAs('oefening/beschrijving' , $request->text,$textname);
            Oefening::create($request->post()+['beschrijving' =>$textname]);


            $imagename = Str::random().'.'.$request->foto->getClientOriginalExtension();
            Storage::disk('public')->putFileAs('oefening/foto' , $request->foto,$imagename);
            Oefening::create($request->post()+['foto' =>$imagename]);

            return response()->json([
                'message'=>'Oefening Opgeslagen!!'
            ]);

        }catch(\Exception $e){
            \Log::error($e->getMessage());
            return response()->json([
                'message'=>'Er ging iets mies met het opslaan van de oefening !!'
            ],500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show( Oefening $oefening)
    {
        return response()->json([
            'oefening'=>$oefening
        ]);
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
        log::channel('oefening')->info('oefening', ['action'=> Route::current()->getActionMethod()]);
        $request->validate([
            'oefeningen'=>'required',
            'beschrijving'=>'required',
            'foto'=>'nullable',
        ]);
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
