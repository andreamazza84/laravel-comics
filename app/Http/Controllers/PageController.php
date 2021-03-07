<?php

namespace App\Http\Controllers;

use App\Comic;
use App\Mustread;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function comics()
    {
        $comics = Comic::all();
        $mustreads = Mustread::all();
        return view('guests.comics', compact('comics', 'mustreads'));
    }
}
