<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Archive;

class ArchiveController extends Controller
{
    public function index()
    {

        $artciles = Archive::latest()->get();
        return view('archives.index',compact('artciles'));
    }
}
