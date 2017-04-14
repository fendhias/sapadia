@extends('template')

@section('main')
    <div id="kelas">
        <h2>Tambah Kelas</h2>

        {!! Form::open(['url' => 'kategori']) !!}
            @include('kategori.form', ['submitButtonText' => 'Tambah Kategori'])
        {!! Form::close() !!}
    </div>
@stop

@section('footer')
    @include('footer')
@stop
