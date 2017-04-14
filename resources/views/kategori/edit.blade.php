@extends('template')

@section('main')
    <div id="kategori">
        <h2>Edit Kelas</h2>

        {!! Form::model($kelas, ['method' => 'PATCH', 'action' => ['KategoriController@update', $kelas->id]]) !!}
            @include('kategori.form', ['submitButtonText' => 'Update Kategori'])
        {!! Form::close() !!}
    </div>
@stop

@section('footer')
    @include('footer')
@stop
