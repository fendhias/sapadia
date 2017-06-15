@extends('template')

@section('main')
    <div id="kategori">
      <div class="row">
        <div class="col-md-6 col-md-offset-4" style="padding:20px 15px 20px;">
          <div class="control-label"><h3>Edit Kategori</h3></div>
        </div>
      </div>

        {!! Form::model($kelas, ['method' => 'PATCH', 'action' => ['KategoriController@update', $kelas->id]]) !!}
            @include('kategori.form', ['submitButtonText' => 'Update Kategori'])
        {!! Form::close() !!}
    </div>
@stop

@section('footer')
    @include('footer')
@stop
