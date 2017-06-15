@extends('template')

@section('main')
    <div id="kelas">
      <div class="row">
        <div class="col-md-6 col-md-offset-4" style="padding:20px 15px 20px;">
          <div class="control-label"><h3>Tambah Kategori</h3></div>
        </div>
      </div>

        {!! Form::open(['url' => 'kategori']) !!}
            @include('kategori.form', ['submitButtonText' => 'Tambah Kategori'])
        {!! Form::close() !!}
    </div>
@stop

@section('footer')
    @include('footer')
@stop
