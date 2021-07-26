<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Candidate;
use Illuminate\Http\Request;
use Storage;
use File;

class CandidateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('user.tambahcalon.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        {
            // $request->validate([
            //     'name' => 'required',
            //     'type_candidate_id' => 'required',
            // ]);
    
            $tambahcalon = auth()->user();
            
            if($request->hasFile('image')){
                $filename=$request->image->getClientOriginalName();
                Storage::disk('public')->put($filename, File::get($request->image));
            }
            $tambahcalon = Candidate::create([
                'name' => $request->name,
                'type_candidate_id'=>$request->type_candidate_id,
                'program_id'=>$request->program_id,
                'image'=>$filename,
            ]);

            dd($request);
            
                $tambahcalon->save();
                return redirect()->route('admin.home')->with([
                    'alert-type'=>'alert alert-success alert-dismissible',
                    'alert-message'=>'Calon Berjaya Ditambah!'
                ]);
            
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
