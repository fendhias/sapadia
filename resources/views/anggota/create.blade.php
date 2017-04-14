@extends('template')

@section('main')
    <div id="anggota">
        <h2>Tambah Anggota</h2>

        {!! Form::open(['url' => 'anggota', 'files' => true]) !!}
            @include('anggota.form', ['submitButtonText' => 'Tambah Anggota'])
        {!! Form::close() !!}
    </div>
@stop

@section('footer')
    @include('footer')
@stop
