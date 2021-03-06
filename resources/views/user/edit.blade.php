@extends('template')

@section('main')
    <div id="user">
      <div class="row">
        <div class="col-lg-6 col-lg-offset-4">
          <div class="control-label" style="padding:20px 0px 30px;">
            <h3>Edit User</h3>
          </div>
        </div>
      </div>
        {!! Form::model($user, ['method' => 'PATCH', 'action' => ['UserController@update', $user->id]]) !!}
            @include('user.form', ['submitButtonText' => 'Update User'])
        {!! Form::close() !!}
    </div>
@stop

@section('footer')
    @include('footer')
@stop
