<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\KelasRequest;
use App\Kategori;
use Session;

class KategoriController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategori_list = Kategori::orderBy('id')->paginate(5);
        return view('kategori/index', compact('kategori_list'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kategori.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(KelasRequest $request)
    {
        Kategori::create($request->all());
        Session::flash('flash_message', 'Data kelas berhasil disimpan.');
        return redirect('kategori');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Kategori $kelas)
    {
        return view('kategori.edit', compact('kelas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Kategori $kelas, KelasRequest $request)
    {
        $kelas->update($request->all());
        Session::flash('flash_message', 'Data kelas berhasil diupdate.');
        return redirect('kategori');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kategori $kelas)
    {
        $kelas->delete();
        Session::flash('flash_message', 'Data kelas berhasil dihapus.');
        Session::flash('penting', true);
        return redirect('kategori');
    }
}
