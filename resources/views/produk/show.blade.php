@extends('template')

@section('main')

        <!-- /.row -->
        <!-- Portfolio Item Row -->
        <div class="row" style="padding-top:50px;">

          <div class="sukses" style="padding-left:15px;padding-right:15px;">
            @include('_partial.flash_message')
          </div>

          <div class="col-md-6">
            <div class="foto" style="padding-bottom:15px;">
              @if (isset($produk->foto))
                  <img style="object-fit: cover;
                  width:450px;
                  height:450px;" src="{{ asset('fotoupload/' . $produk->foto) }}">
              @else
                   @if ($produk->jenis_kelamin == 'L')
                       <img style="object-fit: cover;
                       width:450px;
                       height:450px;" src="{{ asset('fotoupload/dummymale.jpg') }}">
                   @else
                       <img style="object-fit: cover;
                       width:450px;
                       height:450px;" src="{{ asset('fotoupload/dummyfemale.jpg') }}">
                   @endif
              @endif
            </div>
          </div>

          <div class="col-md-6">
            <div class="rincian">
              <div class="page-header" style="font-size:20px;margin:0px">
                <p>{{ $produk->nama_siswa }}</p>
              </div>
              <div class="harga pull-right" style="font-size:20px;padding-top:15px;">
                 <p style="color:#5cb85c;">{{ 'Rp ' . $produk->harga }}</p>
              </div>
              <div class="nama-kategori" style="font-size:14px;padding-top:15px;">
                di <strong>{{ $produk->kategori->nama_kategori }}</strong>
              </div>
              <div class="milik" style="font-size:14px;padding-top:15px;">
                @if (! empty($produk->users->id))
                  Produk oleh : <a href="{{ '../anggota/' . $produk->users->id }}"><strong>{{ !  empty($produk->users->id) ? $produk->users->name : '-'}}</strong></a>
                @else
                  Produk oleh : {{ '-' }}
                @endif
              </div>
              <div class="telp" style="font-size:14px;padding-top:15px;">
                Telp : {{ ! empty($produk->telepon->nomor_telepon) ? $produk->telepon->nomor_telepon : '-' }}
              </div>
              <div class="hubungi" style="font-size:14px;padding-top:15px;">
                @if (! empty($produk->users->id))
                  {{ link_to('anggota/' . $produk->users->id , 'Hubungi Penjual', ['class' => 'btn btn-block btn-success']) }}
                @else
                  {{ "Penjual tidak tersedia" }}
                @endif
              </div><hr>
              <div class="tombol">
                @if (Auth::check())
                  <div class="aksi pull-right">
                    <div class="box-button">
                        {{ link_to('produk/' . $produk->id . '/edit', 'Edit Produk', ['class' => 'btn btn-primary']) }}
                    </div>
                    <div class="box-button">
                        {!! Form::open(['method' => 'DELETE', 'action' => ['ProdukController@destroy', $produk->id]]) !!}
                            {!! Form::submit('Hapus', ['class' => 'btn btn-primary']) !!}
                        {!! Form::close() !!}
                    </div>
                  </div>
                @endif
              </div>
            </div>
          </div>

        </div>
        <!-- /.row -->

        <div class="desc">
          <div class="page-header">
            <h4>Tentang Produk : </h4>
          </div>
          <p>{{ $produk->deskripsi }}</p>
        </div>


@stop

@section('footer')
    @include('footer')
@stop
