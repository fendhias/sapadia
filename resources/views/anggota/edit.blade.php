@extends('template')

@section('main')
    <div id="user">
      <div class="row">
        <div class="col-lg-6 col-lg-offset-4">
          <div class="control-label" style="padding:20px 0px 30px;">
            <h3>Edit Anggota</h3>
          </div>
        </div>
      </div>
        {!! Form::model($anggota, ['method' => 'PATCH', 'action' => ['AnggotaController@update', $anggota->id], 'files' => true]) !!}
            @include('anggota.form', ['submitButtonText' => 'Update Profil'])
        {!! Form::close() !!}
    </div>
@stop

@section('footer')
    @include('footer')
@stop
