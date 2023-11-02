<?php

namespace App\Http\Controllers;

use App\Models\Penghargaan;
use Illuminate\Http\Request;

class PenghargaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penghargaan = Penghargaan::OrderBy('nama_penghargaan', 'asc')->get();
        return view('pages.admin.penghargaan.index', compact('penghargaan'));
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
            'nama_penghargaan' => 'required|unique:penghargaan',
        ], [
            'nama_penghargaan.unique' => 'Nama Penghargaan sudah ada',
        ]);

        Penghargaan::create([
            'id' => $request->jurusan_id,
            'nama_penghargaan' => $request->nama_penghargaan,
        ]);

        return back()->with('success', 'Data penghargaan berhasil dibuat!');
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
        $penghargaan = Penghargaan::findOrFail($id);
        return view('pages.admin.penghargaan.edit', compact('penghargaan'));
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
            'nama_penghargaan' => 'unique:penghargaan',
        ], [
            'nama_penghargaan.unique' => 'Nama Penghargaan sudah ada',
        ]);

        $data = $request->all();

        $penghargaan = Penghargaan::findOrFail($id);
        $penghargaan->update($data);

        return redirect()->route('penghargaan.index')->with('success', 'Data penghargaan berhasil diperbaharui!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $penghargaan = Penghargaan::findOrFail($id);
        $penghargaan->delete();

        return back()->with('success', 'Data penghargaan berhasil dihapus!');
    }
}
