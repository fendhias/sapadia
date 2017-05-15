@extends('template')

@section('main')

      <div id="user-profil" style="padding-top:50px;">
        <!-- Portfolio Item Heading -->
              <div class="row">
                <div class="col-lg-3" style="padding-bottom:20px;">
                  @if (isset($user->anggota->foto))
                    <img class="img-rounded" style="object-fit: cover;
                    width:200px;
                    height:200px;border-radius: 30%;" src="{{ asset('fotoupload/dummymale.jpg') }}">
                  @elseif (isset($user->anggota->jenis_kelamin))
                     @if ($user->anggota->jenis_kelamin == 'L')
                       <img class="img-rounded" style="object-fit: cover;
                       width:200px;
                       height:200px;border-radius: 30%;" src="{{ asset('fotoupload/dummymale.jpg') }}">
                     @else ($user->anggota->jenis_kelamin == 'P')
                       <img class="img-rounded" style="object-fit: cover;
                       width:200px;
                       height:200px;border-radius: 30%;" src="{{ asset('fotoupload/dummyfemale.jpg') }}">
                     @endif
                   @else
                     <img class="img-rounded" style="object-fit: cover;
                     width:200px;
                     height:200px;border-radius: 30%;" src="{{ asset('fotoupload/dummymale.jpg') }}">
                  @endif

                  <div class="akun" style="padding-top:20px;">
                    <div class="nama" style="margin-top:0px;">
                      <p style="font-size:21px;">{{ $user->name }}</p>
                    </div>
                    <div class="level">
                      <p style="color:grey;">Level ( {{ $user->level }} )</p>
                    </div><hr>
                    <div class="email">
                      <i class="glyphicon glyphicon-envelope"></i>
                       <strong>{{ $user->email }}</strong>
                    </div>

                  </div>

                </div>
                <div class="col-lg-9" style="padding-bottom:20px;">
                  <div class="panel panel-default" style="padding:30px;">
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
