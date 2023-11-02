<?php

namespace App\Http\Controllers;


use App\Models\berita;
use Illuminate\Http\Request;

class beritaController extends Controller
{
    
    public function index(){
        $berita = berita::all();
        // dd($berita);
        return view('auth.createberita', compact('berita'));
    }
    // return view('bagian.berita',[
    //     "judul" => "judul",
    //     "body" => berita::all()
    // ]);
    public function create() {
        return view('auth.createberita');
    }
// ubah GPT
    public function show($id) {
        $berita = berita::find($id);
        return view('bagian.berita', compact('berita'));
    }

    // public function show($id){
    //     return view('berita', [
    //         "judul" => "judul",
    //         "body" => berita::find($id)
    //     ]);
    // }
}
