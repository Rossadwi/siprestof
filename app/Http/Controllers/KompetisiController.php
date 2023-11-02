<?php

namespace App\Http\Controllers;

use App\Models\Kompetisi;
use Illuminate\Http\Request;

class KompetisiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kompetisi = Kompetisi::OrderBy('nama_kompetisi', 'asc')->get();
        return view('pages.admin.kompetisi.index', compact('kompetisi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        abort(404);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_kompetisi' => 'required|unique:kompetisi',
        ], [
            'nama_kompetisi.unique' => 'Nama Kompetisi sudah ada',
        ]);

        Kompetisi::create([
            'id' => $request->id_kompetisi,
            'nama_kompetisi' => $request->nama_kompetisi,
        ]);

        return back()->with('success', 'Data kompetisi berhasil dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kompetisi = Kompetisi::findOrFail($id);
        return view('pages.admin.kompetisi.edit', compact('kompetisi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nama_kompetisi' => 'unique:kompetisi',
        ], [
            'nama_kompetisi.unique' => 'Nama Kompetisi sudah ada',
        ]);

        $data = $request->all();

        $kompetisi = Kompetisi::findOrFail($id);
        $kompetisi->update($data);

        return redirect()->route('kompetisi.index')->with('success', 'Data kompetisi berhasil diperbaharui!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kompetisi = Kompetisi::findOrFail($id);
        $kompetisi->delete();

        return back()->with('success', 'Data kompetisi berhasil dihapus!');
    }
}
