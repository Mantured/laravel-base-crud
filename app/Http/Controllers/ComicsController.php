<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DateTime;
use App\Comic;

class ComicsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('comics.create');
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
        $data = $request->all();

        $request->validate([
            'title'=>'required|min:3|max:20',
            'description'=>'required|min:3|max:200', /* eheh not 255 */
            'thumb'=>'required',
            'price'=>'required',
            'type'=>'required',
            'series'=>'required|min:3|max:10',
            'sale_date'=>'required',
        ],
        [
            'required' => "Non puoi aggiungere un Comic senza :attribute",
            'description.min' => 'CARATTERI INFERIORI AL MINIMO CONSENTITO',
            'description.required'=>'É OBBLIGATORIO',
        ],

        );

        $newComic = new Comic();
        $newComic->title = $data["title"];
        $newComic->description = $data["description"];
        $newComic->thumb = $data["thumb"];
        //floatval(mixed $value): float
        $newComic->price = floatval($data["price"]);
        $newComic->series = $data["series"];
        /* DateTime::createFromFormat(string $format, string $datetime, ?DateTimeZone $timezone = null): DateTime|false */
        $newComic->sale_date = DateTime::createFromFormat("Y-m-d", $data["sale_date"]);
        $newComic->type = $data["type"];

        $newComic->save();


        return redirect()->route('comics.show', $newComic->id);
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
        $comic = Comic::findOrFail($id);

        return view('comics.show', ['comic' =>$comic] );
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  Comic $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        //
        return view('comics.edit', ["comic" => $comic]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Comic $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        //
        //dd($request->all());
        $data = $request->all();
        $comic->title = $data["title"];
        $comic->description = $data["description"];
        $comic->thumb = $data["thumb"];
        $comic->price = floatval($data["price"]);
        $comic->series = $data["series"];
        $comic->sale_date = DateTime::createFromFormat("Y-m-d", $data["sale_date"]);
        $comic->type = $data["type"];

        $comic->save();
        /* $comic->update();  sempre utilizzati con i fillables*/
       /*  $comic->fill(); con i fillable nel model  */


        return redirect()->route('comics.show', $comic)->with("message", "$comic->title modificato con successo");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Comic $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        //
        $comic->delete();
        return redirect()->route('comics.index')->with('deleted-message', "$comic->title é stato delittato correttamente");
        /* posso passare anche gli errori se necessario con withErrors */
    }

}
