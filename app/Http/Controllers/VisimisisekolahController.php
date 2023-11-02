<?php

namespace App\Http\Controllers;

use App\Models\visimisisekolah;
use App\Http\Requests\StorevisimisisekolahRequest;
use App\Http\Requests\UpdatevisimisisekolahRequest;

class VisimisisekolahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $visimisi = visimisisekolah::all();
        return view('bagian.visimisisekolah', compact('visimisi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('bagian.visimisisekolah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorevisimisisekolahRequest $request)
    {
        visimisisekolah::create($request->all());
        return redirect()->route('visimisi');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        return view('visimisisekolah', [
            "judul" => "judul",
            "" => visimisisekolah::find($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(visimisisekolah $visimisisekolah)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatevisimisisekolahRequest $request, visimisisekolah $visimisisekolah)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(visimisisekolah $visimisisekolah)
    {
        //
    }
}
