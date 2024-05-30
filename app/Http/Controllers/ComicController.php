<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::all();

        return view("comics.comics", compact("comics"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("comics.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   
        // recuperiamo i parametri che arrivano dal form
        $form_data = $request->all();

        // crea l'istanza, la popola con i dati e la salva nel db
        $new_pasta = Comic::create($form_data);

        // redirect alla rotta show di pasta 
        return to_route('comics.show', $new_pasta);
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {
        $form_data = $request->all();
        // dd($request->all());
        // dd($pasta);
        $comic->fill($form_data); //non salva automaticamente sul db
        // se qui dobbiamo fare qualcos'altro
        $comic->save();
        // $pasta->update($form_data);

        // redirect alla rotta show di pasta 
        return to_route('comics.show', $comic);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
