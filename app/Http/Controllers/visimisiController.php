<?php

namespace App\Http\Controllers;
use App\Models\visimisisekolah;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class visimisiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $visimisi = visimisisekolah::all();
        return view('bagian.visimisiedit', compact('visimisi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $visimisi = visimisisekolah::find($id);
        return view('bagian.visimisiedit', compact('visimisi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $visimisi = visimisisekolah::find($id);
        $visimisi->update($request->all());

        return redirect()->route('indexhome')->with('sucsess', 'Data berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
