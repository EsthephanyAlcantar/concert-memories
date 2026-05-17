<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Concert;

class ConcertController extends Controller
{
    public function index()
    {
        $concerts = Concert::all();

        return view('welcome', compact('concerts'));
    }

    public function create()
    {
        return view('concerts.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();

        if ($request->hasFile('image_upload')) {
            $path = $request->file('image_upload')->store('concerts', 'public');

            $data['foto'] = '/storage/' . $path;
        }

        Concert::create($data);

        return redirect()->route('concerts.index');
    }

    public function show(Concert $concert)
    {
        return view('concerts.show', compact('concert'));
    }

    public function edit(Concert $concert)
    {
        return view('concerts.edit', compact('concert'));
    }

    public function update(Request $request, Concert $concert)
    {
        $data = $request->all();

        if ($request->hasFile('image_upload')) {
            $path = $request->file('image_upload')->store('concerts', 'public');

            $data['foto'] = '/storage/' . $path;
        }

        $concert->update($data);

        return redirect()->route('concerts.index');
    }

    public function destroy(Concert $concert)
    {
        $concert->delete();

        return redirect()->route('concerts.index');
    }
}