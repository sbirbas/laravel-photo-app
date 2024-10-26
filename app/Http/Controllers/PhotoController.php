<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PhotoController extends Controller
{
    protected $fillable = [
        'description',
        'url',
    ],

    public function index()
    {
        $photos = Photo::all();
        return view('/posts', compact('photos'));
    }
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'description' => 'required',
            'url'=> 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);
    }
    public function create({});
    public function update({});
    public function destroy({});
}
