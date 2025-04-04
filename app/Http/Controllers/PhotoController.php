<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PhotoController extends Controller
{
    public function index(Request $request)
    {
        $filter = $request->input('description');

        if ($filter){
            $photos = Photo::where('description', $filter)->get();
        } else {
            $photos = Photo::all();
        }
        return view('photos.index', compact('photos'));
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'description' => 'required',
            'label' => 'required',
        ]);

        $path = $request->file('image')->store('photos', 'public');

        Photo::create([
            'url' => $path,
            'description' => $request->description,
            'label' => $request->label,
        ]);
        return redirect()->route('photos.index');
    }

    public function create()
    {
        return view('photos.create');
    }

    public function edit(Photo $photo)
    {
        return view('photos.edit', compact('photo'));
    }

    public function update(Request $request, Photo $photo)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'description' => 'required',
        ]);

        if ($request->hasFile('image')) {
            Storage::disk('public')->delete($photo->url);
            $path = $request->file('image')->store('photos', 'public');
            $photo->update(['url' => $path]);
        }

        $photo->update(['description' => $request->description]);
        return redirect()->route('photos.index');
    }

    public function destroy(Photo $photo)
    {
        Storage::disk('public')->delete($photo->url);
        $photo->delete();
        return redirect()->route('photos.index');
    }
}
