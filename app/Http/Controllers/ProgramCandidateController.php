<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProgramCandidates;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class ProgramCandidateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('user.tambahcalon.create',);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'identification_number_pcandidate' => 'required',
            'name' => 'required',
            'program' => 'required',
            'image' => 'required',
        ]);

        $tambahcalonprogram = auth()->user();
        
        if($request->hasFile('image')){
            $filename=$request->image->getClientOriginalName();
            Storage::disk('public')->put($filename, File::get($request->image));
        }
        $tambahcalonprogram = ProgramCandidates::create([
            'identification_number_pcandidate' => $request->identification_number_pcandidate,
            'name' => $request->name,
            'program'=>$request->program,
            'image'=>$filename,
        ]);
        
            $tambahcalonprogram->save();
            return redirect()->route('student.index')->with([
                'alert-type'=>'alert alert-success alert-dismissible',
                'alert-message'=>'Calon Berjaya Ditambah!'
            ]);
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
