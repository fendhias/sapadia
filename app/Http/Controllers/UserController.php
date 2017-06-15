<?php

namespace App\Http\Controllers;

use App\Http\Requests;
// use Request;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\User;
use App\Anggota;
use Validator;
use Session;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected function index()
    {
        $user_list = User::orderBy('id','asc')->paginate(10);
        return view('user.index', compact('user_list'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        $input = $request->all();

        // Upload Foto
        if ($request->hasFile('foto')) {
            $input['foto'] = $this->uploadFoto($request);
        }

        // Hash password.
        $input['password'] = bcrypt($input['password']);

        $user = User::create($input);

        $anggota = new Anggota;
        $anggota->tanggal_lahir = $request->input('tanggal_lahir');
        $anggota->jenis_kelamin = $request->input('jenis_kelamin');
        $anggota->telepon = $request->input('telepon');
        $anggota->foto = $request->input('foto');
        $anggota->alamat = $request->input('alamat');
        $anggota->bio = $request->input('bio');
        $user->anggota()->save($anggota);

        Session::flash('flash_message', 'Data user berhasil disimpan.');

        return redirect('user');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('user.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    protected function edit($id)
    {
        $user = User::findOrFail($id);
        $user->tanggal_lahir = $user->anggota->tanggal_lahir;
        $user->jenis_kelamin = $user->anggota->jenis_kelamin;
        $user->telepon = $user->anggota->telepon;
        $user->foto = $user->anggota->foto;
        $user->alamat = $user->anggota->alamat;
        $user->bio = $user->anggota->bio;
        return view('user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $user = User::findOrFail($id);
        $data = $request->all();

        $validasi = Validator::make($data, [
            'name'     => 'required|max:255',
            'email'    => 'required|email|max:100|unique:users,email,' . $data['id'],
            'password' => 'sometimes|confirmed|min:6',
            'level'    => 'required|in:admin,operator',
            'tanggal_lahir' => 'sometimes',
            'jenis_kelamin' => 'sometimes',
            'telepon'       => 'sometimes',
            'foto'          => 'sometimes',
            'alamat'        => 'sometimes',
            'bio'           => 'sometimes',
        ]);

        if ($validasi->fails()) {
            return redirect("user/$id/edit")
                        ->withErrors($validasi)
                        ->withInput();
        }

        if ($request->has('password')) {
            // Hash password.
            $data['password'] = bcrypt($data['password']);
        } else {
            // Hapus password (password tidak diupdate).
            $data = array_except($data, ['password']);
        }

        if ($request->hasFile('foto')) {
            // Hapus foto lama
            $this->hapusFoto($produk);

            // Upload foto baru
           $input['foto'] = $this->uploadFoto($request);
        }

        $user->update($data);

        $anggota = $user->anggota;
        $anggota->tanggal_lahir = $request->input('tanggal_lahir');
        $anggota->jenis_kelamin = $request->input('jenis_kelamin');
        $anggota->telepon = $request->input('telepon');
        $anggota->foto = $request->input('foto');
        $anggota->alamat = $request->input('alamat');
        $anggota->bio = $request->input('bio');

        $user->anggota()->save($anggota);

        Session::flash('flash_message', 'Data user berhasil diupdate.');

        return redirect('user/'. $user->id );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    protected function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        Session::flash('flash_message', 'Data user berhasil dihapus.');
        Session::flash('penting', true);
        return redirect('user');
    }

    private function uploadFoto(UserRequest $request)
    {
        $foto = $request->file('foto');
        $ext  = $foto->getClientOriginalExtension();

        if ($request->file('foto')->isValid()) {
            $foto_name   = date('YmdHis'). ".$ext";
            $upload_path = 'fotoupload';
            $request->file('foto')->move($upload_path, $foto_name);

            // Filename untuk database --> 20160220214738.jpg
            return $foto_name;
        }
        return false;
    }

    private function hapusFoto(User $siswa)
    {
        $exist = Storage::disk('foto')->exists($siswa->foto);

        if (isset($siswa->foto) && $exist) {
            $delete = Storage::disk('foto')->delete($siswa->foto);
            if ($delete) {
                return true;
            }
            return false;
        }
    }

}
