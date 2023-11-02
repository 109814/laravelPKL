<?php

namespace App\Http\Controllers;

use App\Models\berita;
use App\Models\jurusan;
use App\Models\visimisisekolah;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return view('index', [
            'berita' => berita::all(),
            'jurusan' => jurusan::all(),
            'visimisisekolah' => visimisisekolah::all()
            
        ]);
    }
}
