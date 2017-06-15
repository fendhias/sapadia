@extends('template')

@section('main')

      <div id="user-profil" style="padding-top:50px;">

        @include('_partial.flash_message')

        <!-- Portfolio Item Heading -->
              <div class="row">
                  <div class="col-lg-3" style="padding-bottom:20px;">
                    <div class="panel panel-default"  style="padding:10px;background:none;">
                    @if (isset($user->anggota->foto))
                      <img class="img-circle" style="object-fit: cover;
                      width:120px;
                      height:120px;margin:35px;" src="{{ asset('fotoupload/dummymale.jpg') }}">
                    @elseif (isset($user->anggota->jenis_kelamin))
                       @if ($user->anggota->jenis_kelamin == 'L')
                         <img class="img-circle" style="object-fit: cover;
                         width:120px;
                         height:120px;margin:35px;" src="{{ asset('fotoupload/dummymale.jpg') }}">
                       @else ($user->anggota->jenis_kelamin == 'P')
                         <img class="img-circle" style="object-fit: cover;
                         width:120px;
                         height:120px;margin:35px;" src="{{ asset('fotoupload/dummyfemale.jpg') }}">
                       @endif
                     @else
                       <img class="img-circle" style="object-fit: cover;
                       width:120px;
                       height:120px;margin:35px;" src="{{ asset('fotoupload/dummymale.jpg') }}">
                    @endif

                    <div class="akun" style="padding-top:20px;">
                      <div class="nama" style="margin-top:0px;">
                        <p style="font-size:21px;">{{ $user->name }}</p>
                      </div>
                      <div class="level">
                        <p style="color:grey;">Level ( {{ $user->level }} )</p>
                      </div>
                      <div class="email">
                        <i class="glyphicon glyphicon-envelope"></i>
                         <strong>{{ $user->email }}</strong>
                      </div>

                    </div><hr>
                      <div class="box-button">
                        <a href="{{ URL::to('user/' . $user->id . '/edit') }}" class="btn btn-default">
                          <i class="glyphicon glyphicon-pencil"></i>
                        </a>
                      </div>
                      <div class="box-button">
                        {!! Form::open(['method' => 'DELETE', 'action' => ['UserController@destroy', $user->id]]) !!}
                            <button type="submit" class="btn btn-default">
                              <i class="glyphicon glyphicon-trash"></i>
                            </button>
                        {!! Form::close() !!}
                      </div>
                  </div>
                </div>

                <div class="col-lg-9" style="padding-bottom:20px;">
                    <table class="table table-default" id="profil-user">
                      <tr>
                        <th>Tanggal lahir</th>
                        <td>@if (isset($user->anggota->tanggal_lahir))
                          <p><strong>{{ $user->anggota->tanggal_lahir }}</strong></p>
                        @else
                          {{ "-" }}
                        @endif</td>
                      </tr>
                      <tr>
                        <th>Jenis Kelamin</th>
                        <td>
                          @if (isset($user->anggota->jenis_kelamin))
                            @if ($user->anggota->jenis_kelamin == 'L')
                            <strong>Pria</strong>
                            @else
                              <strong>Wanita</strong>
                            @endif
                          @else
                            {{ "-" }}
                          @endif
                         </td>
                      </tr>
                      <tr>
                        <th>Telepon</th>
                        <td>
                          @if (isset($user->anggota->telepon))
                            {{ $user->anggota->telepon }}
                          @else
                            {{ "-" }}
                          @endif
                      </tr>
                      <tr>
                        <th>Alamat</th>
                        <td>
                          @if (isset($user->anggota->alamat))
                            <p>{{ $user->anggota->alamat }}</p>
                          @else
                            {{ "-" }}
                          @endif
                        </td>
                      </tr>
                      <tr>
                        <th>Tentang</th>
                        <td>
                          @if (isset($user->anggota->bio))
                            <p>{{ $user->anggota->bio }}</p>
                          @else
                            {{ "-" }}
                          @endif
                        </td>
                      </tr>
                    </table>
                </div>
              </div>

                    <div class="row">
              <div class="col-lg-4" style="padding-left:20px;">

              </div>
        </div>
        <!-- /.row -->

      </div>






@stop

@section('footer')
    @include('footer')
@stop
