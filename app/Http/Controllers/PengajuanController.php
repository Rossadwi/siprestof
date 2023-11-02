<?php

namespace App\Http\Controllers;

use App\Models\Pengajuan;
use Illuminate\Http\Request;

class PengajuanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengajuan = Pengajuan::OrderBy('nama_pengajuan', 'asc')->get();
        return view('pages.admin.pengajuan.index', compact('pengajuan'));
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
            'nama_pengajuan' => 'required|unique:pengajuan',
        ], [
            'nama_pengajuan.unique' => 'ID pengajuan sudah ada',
        ]);

        Pengajuan::create([
            'id' => $request->id_pengajuan,
            'nama_pengajuan' => $request->nama_pengajuan,
        ]);

        return back()->with('success', 'Data pengajuan berhasil dibuat!');
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
        $pengajuan = Pengajuan::findOrFail($id);
        return view('pages.admin.pengajuan.edit', compact('pengajuan'));
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
            'nama_pengajuan' => 'unique:pengajuan',
        ], [
            'nama_pengajuan.unique' => 'Nama pengajuan sudah ada',
        ]);

        $data = $request->all();

        $pengajuan = Pengajuan::findOrFail($id);
        $pengajuan->update($data);

        return redirect()->route('pengajuan.index')->with('success', 'Data pengajuan berhasil diperbaharui!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pengajuan = Pengajuan::findOrFail($id);
        $pengajuan->delete();

        return back()->with('success', 'Data kompetisi berhasil dihapus!');
    }
}
