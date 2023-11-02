<?php

namespace App\Http\Controllers;

use App\Models\jurusan;
use App\Models\visimisisekolah;
use Illuminate\Routing\Controller;
use App\Http\Requests\StorejurusanRequest;
use App\Http\Requests\UpdatejurusanRequest;
use Symfony\Component\HttpFoundation\Request;

class JurusanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $jurusan = jurusan::all();
        return view('auth.createjurusan', compact('jurusan'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('auth.createjurusan');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        jurusan::create($request->all());
        return redirect()->route('createjurusan');
        // return ($request);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $jurusan = jurusan::find($id);
        return view('bagian.jurusan', compact('jurusan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(jurusan $jurusan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatejurusanRequest $request, jurusan $jurusan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
{
    $jurusan = Jurusan::find($id);

    if (!$jurusan) {
        return redirect()->back()->with('error', 'Jurusan tidak ditemukan.');
    }

    $jurusan->delete();

    return redirect()->back()->with('success', 'Jurusan berhasil dihapus.');
}
}
