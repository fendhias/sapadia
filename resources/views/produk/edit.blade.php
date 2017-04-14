@extends('template')

@section('main')
    <div id="siswa">
        <h2>Edit Siswa</h2>

        {!! Form::model($siswa, ['method' => 'PATCH', 'action' => ['ProdukController@update', $siswa->id], 'files' => true]) !!}
            @include('produk.form', ['submitButtonText' => 'Update Siswa'])
        {!! Form::close() !!}
    </div>
@stop

@section('footer')
    @include('footer')
@stop
