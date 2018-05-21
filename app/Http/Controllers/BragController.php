<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brag;

class BragController extends Controller
{
    public function index()
    {
        $brags = Brag::all();
        $brag = $brags->random();

        // dd($brag);

        return view('welcome', compact('brag'));
    }
}
