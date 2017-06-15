@extends('template')

@section('main')
    <div id="kelas"  style="padding-top:20px;">

        @include('_partial.flash_message')

        <div class="tombol-nav">
            <a href="kategori/create" class="btn btn-danger pull-right" style="margin-bottom:20px;">Tambah Kategori</a>
        </div>

        @if (count($kategori_list) > 0)
            <table class="table" id="tabel-user">
                <thead style="background-color: #ddd;">
                    <tr>
                        <th style="padding-left:20px">No</th>
                        <th>Nama Kategori</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 0; ?>
                    <?php foreach($kategori_list as $kategori): ?>
                    <tr>
                        <td style="padding-left:20px">{{ ++$i }}</td>
                        <td>{{ $kategori->nama_kategori }}</td>
                        <td>
                            <div class="box-button">
                              <a href="{{ URL::to('kategori/' . $kategori->id . '/edit') }}" class="btn btn-default">
                                 <i class="glyphicon glyphicon-pencil"></i>
                              </a>
                            </div>
                            <div class="box-button">
                                {!! Form::open(['method' => 'DELETE', 'action' => ['KategoriController@destroy', $kategori->id]]) !!}
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
            <p>Tidak ada data kelas.</p>
        @endif

    </div> <!-- / #kelas -->

    <div class="table-nav">
        <div class="paging">
            {{ $kategori_list->links() }}
        </div>
    </div>
@stop

@section('footer')
   @include('footer')
@stop
