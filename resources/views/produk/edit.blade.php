@extends('template')

@section('main')
    <div id="produk">
      <div class="row">
        <div class="col-lg-6" style="padding:20px 25px 30px;">
          <div class="control-label  pull-right"><h3>Edit Produk</h3></div>
        </div>
      </div>

        {!! Form::model($produk, ['method' => 'PATCH', 'action' => ['ProdukController@update', $produk->id], 'files' => true]) !!}
            @include('produk.form', ['submitButtonText' => 'Update Produk'])
        {!! Form::close() !!}
    </div>
@stop

@section('footer')
    @include('footer')
@stop
