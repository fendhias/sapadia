@extends('template')

@section('main')
    <div id="user" style="padding-top:20px;">

        @include('_partial.flash_message')

        <div class="tombol-nav">
            <a href="user/create" class="btn btn-danger pull-right" style="margin-bottom:20px;">Tambah User</a>
        </div>

        @if (count($user_list) > 0)
            <table class="table" id="tabel-user">
                <thead style="background-color: #ddd;">
                    <tr>
                        <th></th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Level</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($user_list as $user): ?>
                    <tr>
                        <td style="padding-left:20px;">
                          @if (isset($user->anggota->foto))
                              <a href=" {{ 'user/' . $user->id }} "><img class="img-circle" style="object-fit: cover;
                              width:60px;
                              height:60px;" src="{{ asset('fotoupload/' . $user->anggota->foto) }}"></a>
                          @elseif (isset($user->anggota->jenis_kelamin))
                               @if ($user->anggota->jenis_kelamin == 'L')
                                   <a href=" {{ 'user/' . $user->id }} "><img class="img-circle" style="object-fit: cover;
                                   width:60px;
                                   height:60px;" src="{{ asset('fotoupload/dummymale.jpg') }}"></a>
                               @else
                                   <a href=" {{ 'user/' . $user->id }} "><img class="img-circle" style="object-fit: cover;
                                   width:60px;
                                   height:60px;" src="{{ asset('fotoupload/dummyfemale.jpg') }}"></a>
                               @endif
                           @else
                               <a href=" {{ 'user/' . $user->id }} "><img class="img-circle" style="object-fit: cover;
                               width:60px;
                               height:60px;" src="{{ asset('fotoupload/dummymale.jpg') }}"></a>
                          @endif
                        </td>
                        <td><a href=" {{ 'user/' . $user->id }} ">{{ $user->name }}</a></td>
                        <td>{{ $user->email }}</td>
                        <td>
                          @if ( $user->level == 'admin' )
                            <span class="label label-success">{{ $user->level }}</span></td>
                          @else
                            member</td>
                          @endif
                        <td>
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
                        </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>

        @else
            <p>Tidak ada data user.</p>
        @endif

        <div class="table-nav">
            <div class="paging">
                {{ $user_list->links() }}
            </div>
        </div>


    </div> <!-- / #kelas -->
@stop

@section('footer')
   @include('footer')
@stop
