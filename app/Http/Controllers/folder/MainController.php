<?php

namespace App\Http\Controllers\folder;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Comic;

class MainController extends Controller
{
    // index
    public function index() {
        $comics = Comic::all();
        return view("comic.index", compact("comics"));
    }
    // create
    public function create() {
        return view("comic.create");
    }
    // store
    public function store(Request $request) {

        $data = $request -> validate(
            $this -> getValidation(),
            $this -> getValidationMessages()
        );

        $comic = Comic :: create($data);

        return redirect() -> route("comic.show", $comic -> id);
    }

    // show
    public function show($id) {
        $comic = Comic::find($id);
        return view("comic.show", compact("comic"));
    }

    // edit
    public function edit($id) {
        $comic = Comic::find($id);
        return view("comic.edit", compact("comic"));
    }
    // update
    public function update(Request $request, $id) {
        // $data = $request -> all();
        // dd($data);

        $data = $request -> validate(
            $this -> getValidation(),
            $this -> getValidationMessages()
        );
        $comic = Comic::find($id);
        $comic -> update($data);
        return redirect() -> route("comic.show", $comic -> id);
    }
    // delete
    public function destroy($id) {
        $comic = Comic::find($id);
        $comic -> delete();
        return redirect() -> route("comic.index");
    }
    //validaton roule
    private function getValidation() {
        return [
                "title" => 'required|min:3|max:64',
                "description" => 'sometimes|string',
                "thumb" => 'required|url',
                "price" => 'required|min:3|max:64',
                "series" => 'required|min:3|max:64',
                "sale_date" => 'required|date:Y-m-d',
                "type" => 'required|min:3|max:64',
                "artists" => 'required|min:3',
                "writers" => 'required|min:3'
        ];
    }
    private function getValidationMessages(){
        return [

            "title.required" => 'titolo richiesto',
            "title.min" => 'titolo corto',
            "title.max" => 'titolo lungo',
            "description.required" => 'scrivi meglio description',
            "description.string" => 'scrivi meglio description',
            "thumb.required" => 'scrivi meglio thumb',
            "thumb.url" => 'scrivi meglio thumb',
            "price.required" => 'scrivi meglio price',
            "price.min" => 'scrivi meglio price',
            "price.max" => 'scrivi meglio price',
            "series.required" => 'scrivi meglio series',
            "series.min" => 'scrivi meglio series',
            "series.max" => 'scrivi meglio series',
            "sale_date.required" => 'scrivi meglio sale_date',
            "sale_date.date" => 'scrivi meglio sale_date',
            "type.required" => 'scrivi meglio type',
            "type.min" => 'scrivi meglio type',
            "type.max" => 'scrivi meglio type',
            "artists.required" => 'scrivi meglio artists',
            "artists.min" => 'scrivi meglio artists',
            "writers.required" => 'scrivi meglio writers',
            "writers.min" => 'scrivi meglio writers'
        ];
    }
}






