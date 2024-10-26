<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photo;
class GalleryController extends Controller
{

    $photo = Photo::all();

    public function index()
    {
        return view('gallery');
    }


}
