@extends('template')

@section('main')
    <div id="produk">
        <h2>Tambah Produk</h2>

        {!! Form::open(['url' => 'produk', 'files' => true]) !!}
            @include('produk.form', ['submitButtonText' => 'Tambah Produk'])
        {!! Form::close() !!}
    </div>
@stop

@section('footer')
    @include('footer')
@stop
