<?php

namespace App\Http\Controllers;

use App\Models\Fillier;
use Illuminate\Http\Request;

class FillierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Filliers=Fillier::all();
        return view('director.fillier.index',compact('Filliers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
        $request->validate([
           'name'=>'required',
           'description'=>'required',
        ]);
        Fillier::create([
            'name'=>$request->name,
            'description'=>$request->description,
        ]);

        return redirect()->back()->with('success','the fillier added succesfuly');

    }

    /**
     * Display the specified resource.
     */
    public function show(Fillier $fillier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Fillier $fillier)
    {
        return view('director.fillier.Edit',compact('fillier'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Fillier $fillier)
    {
        $request->validate([
            'name'=>'required',
            'description'=>'required',
         ]);
         $fillier->update([
             'name'=>$request->name,
             'description'=>$request->description,
         ]);
 
         return redirect()->route('fillier.index')->with('success','the fillier updated succesfuly');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Fillier $fillier)
    {
        // dd($fillier->Coureces);
        if($fillier->Coureces){
            return redirect()->back()->with('error','the fillier cant be deleted because its related with cources');

        }

        $fillier->delete();
        return redirect()->back()->with('success','the fillier deleted succesfuly');
    }
}
