@extends('template')

@section('main')
    <div id="kelas">
        <h2>Kelas</h2>

        @include('_partial.flash_message')

        @if (count($kategori_list) > 0)
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kelas</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 0; ?>
                    <?php foreach($kategori_list as $kategori): ?>
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $kategori->nama_kategori }}</td>
                        <td>
                            <div class="box-button">
                                {{ link_to('kategori/' . $kategori->id . '/edit', 'Edit', ['class' => 'btn btn-warning btn-sm']) }}
                            </div>
                            <div class="box-button">
                                {!! Form::open(['method' => 'DELETE', 'action' => ['KategoriController@destroy', $kategori->id]]) !!}
                                    {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
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

        <div class="tombol-nav">
            <a href="kategori/create" class="btn btn-primary">Tambah Kategori</a>
        </div>

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
