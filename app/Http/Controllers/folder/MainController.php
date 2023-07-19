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
            $this -> getValidation()
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
        $data = $request -> validate(
            $this -> getValidation()
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
            "sale_date" => 'required|date',
            "type" => 'required|min:3|max:64',
            "artists" => 'required|min:3|max:64',
            "writers" => 'required|min:3|max:64',
        ];
    }
}
