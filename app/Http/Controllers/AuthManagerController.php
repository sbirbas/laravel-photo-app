<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\View\View;

class AuthManagerController extends Controller
{
    public function index(): View
    {
        $photos = Photo::all();
        return view('photo-manager', compact('photos'));
    }
}
