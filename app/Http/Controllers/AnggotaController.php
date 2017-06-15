<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\AnggotaRequest;
use App\Anggota;
use App\User;
use Storage;
use Validator;
use Session;

class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $anggota_list   = Anggota::orderBy('id','desc')->paginate(10);
      $jumlah_anggota = Anggota::count();
      return view('anggota.index', compact('anggota_list', 'jumlah_anggota'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return redirect('anggota');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Anggota $anggota)
    {
        return view('anggota.show', compact('anggota'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Anggota $anggota)
    {
        $anggota->name = $anggota->users->name;
        return view('anggota.edit', compact('anggota'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Anggota $anggota, AnggotaRequest $request)
    {
      $data = $request->all();

      // Update produk di tabel produk

      $validasi = Validator::make($data, [
          'name'          => 'required|max:255',
          'tanggal_lahir' => 'sometimes',
          'jenis_kelamin' => 'sometimes',
          'telepon'       => 'sometimes',
          'foto'          => 'sometimes',
          'bio'           => 'sometimes',
          'alamat'        => 'sometimes',
      ]);

      if ($validasi->fails()) {
          return redirect("anggota/$id/edit")
                      ->withErrors($validasi)
                      ->withInput();
      }

      $anggota->update($data);

      // $nama_anggota = $anggota->users;
      // $nama_anggota->name = $data['name'];
      // $anggota->nama_anggota()->save($nama_anggota);

      $nama = $anggota->users;
      $nama->name = $request->input('name');
      $nama->anggota()->save($nama);

      Session::flash('flash_message', 'Data anggota berhasil diupdate.');

      return redirect('anggota/'.$anggota->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
