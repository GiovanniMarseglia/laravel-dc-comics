<?php

namespace App\Http\Controllers;
use App\Models\Dc;
use Illuminate\Http\Request;

class CrudController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $comics = Dc::All();
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

        $validatedData = $request->validate([
            'title' => ['required', 'unique:posts', 'max:255'],
            'description' => ['required'],
            'thumb' => ['required'],
            'price' => ['required'],
            'series' => ['required'],
            'sale_date' => ['required'],
            'type' => ['required'],
        ]);

        $formData = $request->all();


        $newComic = new Dc();
        $newComic->fill($formData);


        $newComic->save();

        return redirect()->route('comic.show', ['comic' => $newComic->id]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Dc $comic)
    {
        return view("pages.single",compact("comic"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dc $comic)
    {
        //
        return view("pages.edit",compact("comic"));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $validatedData = $request->validate([
            'title' => ['required', 'unique:posts', 'max:255'],
            'description' => ['required'],
            'thumb' => ['required'],
            'price' => ['required'],
            'series' => ['required'],
            'sale_date' => ['required'],
            'type' => ['required'],
        ]);


        $formData = $request->all();
        $comic = Dc::find($id);
        $comic->update($formData);
        return redirect()->route("comic.index",compact('comic'));

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $comic = Dc::find($id);
        $comic->delete();
        return redirect()->route('comic.index');
    }
}
