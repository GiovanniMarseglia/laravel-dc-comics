<?php

namespace App\Http\Controllers;
use App\Models\dc;
use Illuminate\Http\Request;

class CrudController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $comics = dc::All();
        return view("pages.home",compact("comics"));
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("pages.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $formData = $request->all();


        $newComic = new dc();
        $newComic->fill($formData);


        $newComic->save();

        return redirect()->route('comic.show', ['comic' => $newComic->id]);
    }

    /**
     * Display the specified resource.
     */
    public function show(dc $comic)
    {
        //

        return view("pages.single",compact("comic"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
