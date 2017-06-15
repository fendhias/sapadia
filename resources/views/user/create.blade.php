@extends('template')

@section('main')
    <div id="user">
        <h2>Tambah User</h2>

        {!! Form::open(['url' => 'user','files' => true ]) !!}
            @include('user.form', ['submitButtonText' => 'Tambah User'])
        {!! Form::close() !!}
    </div>
@stop

@section('footer')
    @include('footer')
@stop
