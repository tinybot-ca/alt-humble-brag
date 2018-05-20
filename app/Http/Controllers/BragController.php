<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brag;

class BragController extends Controller
{
    public function index()
    {
        $brag = Brag::all();

        // dd($brag);

        return view('welcome', compact('brag'));
    }
}
