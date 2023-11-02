<?php

namespace App\Http\Controllers;
use App\Models\berita;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class createBeritaController extends Controller
{
    //
    public function index(){
        $berita = berita::all();
        
            return view('auth.createberita', compact('berita'));
    }
    public function create() {
        return view('auth.createberita');
    }
    // public function __invoke(Request $request)
    // {
    //     return view('auth.createberita');
    // }
    public function store(Request $request)
{
    berita::create($request->all());
    return redirect()->route('createberita');
    // return($request);
    // Validasi data yang diterima dari form
    // $validatedData = $request->validate([
    //     'judul' => 'required|string|max:255',
    //     'body' => 'required|string',
    // ]);

    // Membuat objek baru berdasarkan model Post dan menyimpan data yang telah divalidasi
    // berita::create($validatedData);

    // Redirect pengguna ke halaman indeks postingan setelah data berhasil disimpan
}

}
