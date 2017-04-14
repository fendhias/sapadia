<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests; // path saja, untuk form request (jika ada)
use App\Http\Requests\SiswaRequest;
use App\Produk;
use App\Telepon;
use App\Kategori;
use Storage;
use Session;

class ProdukController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => [
            'index',
            'show',
            'cari',
        ]]);
    }


    public function index()
    {
        $produk_list   = Produk::orderBy('id','desc')->paginate(10);
        $jumlah_produk = Produk::count();
        return view('produk.index', compact('produk_list', 'jumlah_produk'));
    }

    public function show(Produk $produk)
    {
        return view('produk.show', compact('produk'));
    }

    public function create()
    {
        return view('produk.create');
    }

    public function store(SiswaRequest $request)
    {
        $input = $request->all();

        // Upload Foto
        if ($request->hasFile('foto')) {
            $input['foto'] = $this->uploadFoto($request);
        }

        // Insert data siswa
        $siswa = Produk::create($input);
        Session::flash('flash_message', 'Data siswa berhasil disimpan.');

        return redirect('produk');
    }

    public function edit(Produk $siswa)
    {
        return view('produk.edit', compact('siswa'));
    }

    public function update(Produk $siswa, SiswaRequest $request)
    {
        $input = $request->all();

        // Cek apakah ada foto baru di form?
        if ($request->hasFile('foto')) {
            // Hapus foto lama
            $this->hapusFoto($siswa);

            // Upload foto baru
           $input['foto'] = $this->uploadFoto($request);
        }

        // Update siswa di tabel siswa
        $siswa->update($input);

        // Update telepon di tabel telepon
        Session::flash('flash_message', 'Data siswa berhasil diupdate.');

        return redirect('produk');
    }

    public function destroy(Produk $siswa)
    {
        $this->hapusFoto($siswa);
        $siswa->delete();
        Session::flash('flash_message', 'Data siswa berhasil dihapus.');
        Session::flash('penting', true);
        return redirect('produk');
    }

    public function cari(Request $request)
    {
        $kata_kunci    = trim($request->input('kata_kunci'));

        if (! empty($kata_kunci)) {
            $jenis_kelamin = $request->input('jenis_kelamin');
            $id_kelas      = $request->input('id_kelas');

            // Query
            $query         = Produk::where('nama_siswa', 'LIKE', '%' . $kata_kunci . '%');
            (! empty($jenis_kelamin)) ? $query->JenisKelamin($jenis_kelamin) : '';
            (! empty($id_kelas)) ? $query->Kelas($id_kelas) : '';
            $produk_list = $query->paginate(2);

            // URL Links pagination
            $pagination = (! empty($jenis_kelamin)) ? $produk_list->appends(['jenis_kelamin' => $jenis_kelamin]) : '';
            $pagination = (! empty($id_kelas)) ? $pagination = $produk_list->appends(['id_kelas' => $id_kelas]) : '';
            $pagination = $produk_list->appends(['kata_kunci' => $kata_kunci]);

            $jumlah_produk = $produk_list->total();
            return view('produk.index', compact('produk_list', 'kata_kunci', 'pagination', 'jumlah_produk', 'id_kelas', 'jenis_kelamin'));
        }

        return redirect('produk');
    }

    // ===============================================================
    private function uploadFoto(SiswaRequest $request)
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

    private function hapusFoto(Produk $siswa)
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

    public function dateMutator()
    {
        $siswa = Siswa::findOrFail(1);
        $str = 'Tanggal Lahir: ' .
                $siswa->tanggal_lahir->format('d-m-Y') . '<br>' .
                'Ulang tahun ke-30 akan jatuh pada tanggal: ' .
                '<strong>' .
                $siswa->tanggal_lahir->addYears(30)->format('d-m-Y') .
                '</strong>';
        return $str;
    }
}
