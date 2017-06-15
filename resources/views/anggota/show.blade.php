@extends('template')

@section('main')

      <div id="anggota" style="padding-top:50px;">

        @include('_partial.flash_message')

        <div class="row">
            <div class="col-md-3">
              <div class="panel panel-default"  style="padding:10px;background:none;">
              @if (isset($anggota->foto))
                  <img class="img-thumbnail img-circle" style="object-fit: cover;
                  width:120px;
                  height:120px;margin:35px;" src="{{ asset('fotoupload/' . $anggota->foto) }}">
              @else
                   @if ($anggota->jenis_kelamin == 'L')
                       <img class="img-thumbnail img-circle" style="object-fit: cover;
                       width:120px;
                       height:120px;margin:35px;" src="{{ asset('fotoupload/dummymale.jpg') }}">
                   @else
                       <img class="img-thumbnail img-circle" style="object-fit: cover;
                       width:120px;
                       height:120px;margin:35px;" src="{{ asset('fotoupload/dummyfemale.jpg') }}">
                   @endif
              @endif

              <div class="nama" style="margin-top:10px;">
                <p style="font-size:21px;">{{ $anggota->users->name }}</p>
              </div>

              <div class="email">
                <i class="glyphicon glyphicon-envelope"></i>
                 <strong>{{ $anggota->users->email }}</strong>
              </div>

              <div class="tombol">
                @if (Auth::check() && Auth::user()->id)
                  <hr>
                  <a href="{{ URL::to('anggota/' . $anggota->id . '/edit') }}" class="btn btn-default">
                     <i class="glyphicon glyphicon-pencil"></i>
                  </a>
                @endif
              </div>
            </div>
            </div>

            <div class="col-md-9">
                <table class="table table-default">
                  <tr>
                    <th>Nama</th>
                    <td>{{ $anggota->users->name }}</td>
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
                      <td>{{ ! empty($anggota->telepon) ? $anggota->telepon : '-' }}</td>
                  </tr>
                  <tr>
                      <th>Alamat</th>
                      <td>{{ ! empty($anggota->alamat) ? $anggota->alamat : '-' }}</td>
                  </tr>
                  <tr>
                      <th>Bio</th>
                      <td>{{ ! empty($anggota->bio) ? $anggota->bio : '-' }}</td>
                  </tr>
              </table>

            </div>

        </div>
      </div>
        <!-- Portfolio Item Row -->

        <!-- /.row -->


@stop

@section('footer')
    @include('footer')
@stop
