<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PhotoController extends Controller
{
//    public function profile()
//    {
//        return $this->hasOne(Auth::user());
//    }
    protected $fillable = [
        'id',
        'description',
        'url',
    ],

    public function index()
    {
        return view()
    }
}
