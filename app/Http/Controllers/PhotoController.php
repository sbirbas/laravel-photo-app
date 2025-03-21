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
        $data = $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'required',
            'label' => 'required',
        ]);

        $data['url'] = $request->file('image')->store('photos', 's3');

        Photo::create($data);

        return redirect()->route('photos.index')->with('success', 'Photo uploaded successfully!');
    }

    public function create()
    {
        return view('photos.create');
    }

    public function edit(Photo $photo)
    {
        return view('photos.edit', compact('photo'));
    }

    public function update(Request $request, Photo $photo): RedirectResponse
    {
        $data = $request->validate([
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            if ($photo->url) {
                Storage::disk('s3')->delete($photo->url);
            }

            $data['url'] = $request->file('image')->store('photos', 's3');
        }

        $photo->update($data);

        return redirect()->route('photos.index')->with('success', 'Photo updated successfully!');
    }

    public function destroy(Photo $photo): RedirectResponse
    {
        if ($photo->url) {
            Storage::disk('s3')->delete($photo->url);
        }
        $photo->delete();
        return redirect()->route('photos.index')->with('success', 'Photo deleted successfully!');
    }
}

