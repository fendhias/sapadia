@extends('template')

@section('main')

        <!-- Portfolio Item Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header">{{ $anggota->users->name }}
                </h3>
            </div>
        </div>
        <!-- /.row -->

        <!-- Portfolio Item Row -->
        <div class="row">

            <div class="col-md-6">
              @if (isset($anggota->foto))
                  <img style="object-fit: cover;
                  width:500px;
                  height:500px;" src="{{ asset('fotoupload/' . $anggota->foto) }}">
              @else
                   @if ($anggota->jenis_kelamin == 'L')
                       <img style="object-fit: cover;
                       width:500px;
                       height:500px;" src="{{ asset('fotoupload/dummymale.jpg') }}">
                   @else
                       <img style="object-fit: cover;
                       width:500px;
                       height:500px;" src="{{ asset('fotoupload/dummyfemale.jpg') }}">
                   @endif
              @endif
            </div>

            <div class="col-md-6">
                <h4><strong>Rincian</strong></h4>
                <table class="table table-striped">
                  <tr>
                    <th>Nama Produk</th>
                    <td>{{ $anggota->users->name }}</td>
                  </tr>
                  <tr>
                    <th>Kategori</th>
                    <td>{{ $anggota->nama_anggota }}</td>
                  </tr>
                  <tr>
                      <th>Tanggal Lahir</th>
                      <td>{{ $anggota->tanggal_lahir }}</td>
                  </tr>
                  <tr>
                      <th>Jenis Kelamin</th>
                      <td>{{ $anggota->jenis_kelamin }}</td>
                  </tr>
                  <tr>
                      <th>Telepon</th>
                      <td>{{ ! empty($anggota->telepon->nomor_telepon) ? $anggota->telepon->nomor_telepon : '-' }}</td>
                  </tr>
                  <tr>
                      <th>Bio</th>
                      <td>{{ ! empty($anggota->bio) ? $anggota->bio : '-' }}</td>
                  </tr>
              </table>

              <div class="tombol">
                @if (Auth::check() && Auth::user()->level == 'admin' )
                  <div class="aksi pull-right" style="padding-right:10px">
                    <div class="box-button">
                        {{ link_to('anggota/' . $anggota->id . '/edit', 'Edit', ['class' => 'btn btn-default btn-sm']) }}
                    </div>
                  </div>
                @endif
              </div>

            </div>

        </div>
        <!-- /.row -->


@stop

@section('footer')
    @include('footer')
@stop
