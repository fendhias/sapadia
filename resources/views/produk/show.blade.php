@extends('template')

@section('main')



        <!-- Portfolio Item Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h4 style="padding-top:30px;padding-bottom:10px">{{ $produk->nama_siswa }}</h4>
            </div>
        </div>
        <!-- /.row -->
        <!-- Portfolio Item Row -->
        <div class="row">
          <div class="col-md-5">
            <div class="panel panel-default">
              <div class="panel-heading"><strong>Foto Produk</strong></div>
              <div class="panel-body">
                @if (isset($produk->foto))
                    <img class="img-rounded" style="object-fit: cover;
                    width:330px;
                    height:330px;" src="{{ asset('fotoupload/' . $produk->foto) }}">
                @else
                     @if ($produk->jenis_kelamin == 'L')
                         <img class="img-rounded" style="object-fit: cover;
                         width:330px;
                         height:330px;" src="{{ asset('fotoupload/dummymale.jpg') }}">
                     @else
                         <img class="img-rounded" style="object-fit: cover;
                         width:330px;
                         height:330px;" src="{{ asset('fotoupload/dummyfemale.jpg') }}">
                     @endif
                @endif
              </div>
            </div>

            <div class="tombol">
              @if (Auth::check())
                <div class="aksi pull-right">
                  <div class="box-button">
                      {{ link_to('produk/' . $produk->id . '/edit', 'Edit Produk', ['class' => 'btn btn-primary btn-sm']) }}
                  </div>
                  <div class="box-button">
                      {!! Form::open(['method' => 'DELETE', 'action' => ['ProdukController@destroy', $produk->id]]) !!}
                          {!! Form::submit('Hapus', ['class' => 'btn btn-primary btn-sm']) !!}
                      {!! Form::close() !!}
                  </div>
                </div>
              @endif
            </div>

          </div>

          <div class="col-md-7">
              <div class="panel panel-default">
                <div class="panel-heading"><strong>Rincian Produk</strong></div>
                <div class="panel-body">
                  <table class="table table-striped">
                    <tr>
                      <th>Nama Produk</th>
                      <td>{{ $produk->nama_siswa }}</td>
                    </tr>
                    <tr>
                      <th>Deskripsi</th>
                      <td><p>{{ $produk->deskripsi }}</p></td>
                    </tr>
                    <tr>
                      <th>Kategori</th>
                      <td>{{ $produk->kategori->nama_kategori }}</td>
                    </tr>
                    <tr>
                        <th>Produk ini milik</th>
                        <td><a href="{{ '../anggota/' . $produk->users->id }}">{{ $produk->users->name }}</a></td>
                    </tr>
                    <tr>
                        <th>Telepon</th>
                        <td>{{ ! empty($produk->telepon->nomor_telepon) ? $produk->telepon->nomor_telepon : '-' }}</td>
                    </tr>
                  </table>
                </div>
            </div>
          </div>
          </div>
        <!-- /.row -->
@stop

@section('footer')
    @include('footer')
@stop
