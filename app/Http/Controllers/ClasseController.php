<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use Illuminate\Http\Request;

class ClasseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $Classes=Classe::all();
       return view('director.Classes.index',compact('Classes'));
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
            'name'=>'required|unique:classes',
            'Capacity'=>'required',
         ]);
         Classe::create([
            'name'=>$request->name,
            'capacity'=>$request->Capacity,
         ]);

return redirect()->back()->with('success','the Classe added succesfuly');
    }

    /**
     * Display the specified resource.
     */
    public function show(Classe $classe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Classe $classe)
    {
        return view('director.Classes.Edit',compact('classe'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Classe $classe)
    {
        $request->validate([
            'name'=>'required',
            'Capacity'=>'required',
         ]);
         $classe->update([
            'name'=>$request->name,
            'capacity'=>$request->Capacity,
         ]);
         return redirect()->route('classe.index')->with('success','the Classe updated succesfuly');

        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Classe $classe)
    {
      
       if($classe->Cources){
        return redirect()->back()->with('error','the Classe cant be deleted because its related with cources');

    }
    $classe->delete();
    return redirect()->back()->with('success','the Classe deleted succesfuly');

    }
}
