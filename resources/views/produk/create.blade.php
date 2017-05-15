@extends('template')

@section('main')
    <div id="produk">
      <div class="row">
        <div class="col-lg-8">
          <div class="control-label pull-right"><h3  style="padding:20px 130px 30px;">Tambah Produk</h3></div>
        </div>
      </div>

        {!! Form::open(['url' => 'produk', 'files' => true]) !!}
            @include('produk.form', ['submitButtonText' => 'Tambah Produk'])
        {!! Form::close() !!}
    </div>
@stop

@section('footer')
    @include('footer')
@stop
