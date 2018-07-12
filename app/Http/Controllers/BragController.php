<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brag;

class BragController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'imgtest']);
    }

    public function index()
    {
        $brags = Brag::all();
        $brag = $brags->random();

        return view('welcome', compact('brag'));
    }

    public function admin()
    {
        $brags = Brag::all();

        return view('admin', compact('brags'));
    }

    public function edit(Brag $brag)
    {
        return view('edit', compact('brag'));
    }

    public function update(Brag $brag)
    {
        $this->validate(request(), [
            'description' => 'required'
        ]);

        $brag->update(request(['description']));

        session()->flash('message', 'Record has been updated.');

        return redirect('/admin');
    }

    public function create()
    {
        return view('create');
    }

    public function store()
    {
        $this->validate(request(), [
            'description' => 'required'
        ]);

        $brag = Brag::create([
            'user_id' => auth()->id(),
            'description' => request('description')
        ]);

        session()->flash('message', 'New record saved.');

        return redirect('/admin');
    }

    public function delete(Brag $brag)
    {
        return view('delete', compact('brag'));
    }

    public function destroy(Brag $brag)
    {
        $brag->delete();

        session()->flash('message', 'Record deleted.');

        return redirect('/admin');
    }

    public function imgtest()
    {
        $img = Image::make('public/humblebrag.png');

        $img->text('The quick brown fox jumps over the lazy dog.');

        $img->save('public/test.png');

        return view('image');
    }

}
