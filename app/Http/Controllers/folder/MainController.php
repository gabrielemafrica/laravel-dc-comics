<?php

namespace App\Http\Controllers\folder;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Comic;

class MainController extends Controller
{
    public function index() {
        $comics = Comic::all();
        return view("comic.index", compact("comics"));

    }
}
