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

        $data = $request -> all();

        $comic = Comic :: create([
            "title" => $data["title"],
            "description" => $data["description"],
            "thumb" => $data["thumb"],
            "price" => $data["price"],
            "series" => $data["series"],
            "sale_date" => $data["sale_date"],
            "type" => $data["type"],
            "artists" => $data["artists"],
            "writers" => $data["writers"],
        ]);

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
        $data = $request -> all();
        $comic = Comic::find($id);
        $comic -> update($data);
        return redirect() -> route("comic.show", $comic -> id);
    }
}
