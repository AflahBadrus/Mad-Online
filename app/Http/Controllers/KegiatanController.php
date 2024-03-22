<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;

class KegiatanController extends Controller
{
    public function index()
    {
        $data = Photo::all();
        return view('kegiatan.kegiatan', compact('data'));
    }
}
