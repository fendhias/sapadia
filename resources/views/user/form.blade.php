@if (isset($user))
    {!! Form::hidden('id', $user->id) !!}
@endif

<div class="row">
  <div class="col-md-10">
    <div class="title pull-right" style="font-size:13px;color:#998e8e;">
      Data akun
    </div>
  </div>
</div>
 <hr>

{{-- Nama --}}
@if ($errors->any())
    <div class="form-group {{ $errors->has('name') ? 'has-error' : 'has-success' }}">
@else
    <div class="form-group">
@endif
    <div class="row">
      <div class="col-lg-4">
        {!! Form::label('name', 'Nama', ['class' => 'control-label pull-right']) !!}
      </div>
      <div class="col-lg-6">
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
        @if ($errors->has('name'))
            <span class="help-block">{{ $errors->first('name') }}</span>
        @endif
      </div>
    </div>
</div>

{{-- Email --}}
@if ($errors->any())
    <div class="form-group {{ $errors->has('email') ? 'has-error' : 'has-success' }}">
@else
    <div class="form-group">
@endif
    <div class="row">
      <div class="col-lg-4">
        {!! Form::label('email', 'Email', ['class' => 'control-label pull-right']) !!}
      </div>
      <div class="col-lg-6">
        {!! Form::text('email', null, ['class' => 'form-control']) !!}
        @if ($errors->has('email'))
            <span class="help-block">{{ $errors->first('email') }}</span>
        @endif
      </div>
    </div>
</div>

{{-- Level --}}
@if ($errors->any())
    <div class="form-group {{ $errors->has('level') ? 'has-error' : 'has-success' }}">
@else
    <div class="form-group">
@endif
    <div class="row">
      <div class="col-lg-4">
        {!! Form::label('level', 'Level', ['class' => 'control-label pull-right']) !!}
      </div>
      <div class="col-lg-6">
        <div class="radio">
            <label>{!! Form::radio('level', 'operator') !!} Member</label>
        </div>
        <div class="radio">
            <label>{!! Form::radio('level', 'admin') !!} Administrator</label>
        </div>
        @if ($errors->has('level'))
            <span class="help-block">{{ $errors->first('level') }}</span>
        @endif
      </div>
    </div>
</div>

{{-- Password --}}
@if ($errors->any())
    <div class="form-group {{ $errors->has('password') ? 'has-error' : 'has-success' }}">
@else
    <div class="form-group">
@endif
    <div class="row">
      <div class="col-lg-4">
        {!! Form::label('password', 'Password', ['class' => 'control-label pull-right']) !!}
      </div>
      <div class="col-lg-6">
        {!! Form::password('password', ['class' => 'form-control']) !!}
        @if ($errors->has('password'))
            <span class="help-block">{{ $errors->first('password') }}</span>
        @endif
      </div>
    </div>
</div>

{{-- Password Confirmation --}}
@if ($errors->any())
    <div class="form-group {{ $errors->has('password_confirmation') ? 'has-error' : 'has-success' }}">
@else
    <div class="form-group">
@endif
    <div class="row">
      <div class="col-lg-4">
        {!! Form::label('password_confirmation', 'Password Confirmation', ['class' => 'control-label pull-right']) !!}
      </div>
      <div class="col-lg-6">
        {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
        @if ($errors->has('password_confirmation'))
            <span class="help-block">{{ $errors->first('password_confirmation') }}</span>
        @endif
      </div>
    </div>
</div>

<div class="row">
  <div class="col-md-10">
    <div class="title pull-right" style="font-size:13px;color:#998e8e;padding-top:50px;">
      Data Profil
    </div>
  </div>
</div>
 <hr>

 @if ($errors->any())
     <div class="form-group {{ $errors->has('tanggal_lahir') ? 'has-error' : 'has-success' }}">
 @else
     <div class="form-group">
 @endif
     <div class="row">
       <div class="col-lg-4">
         {!! Form::label('tanggal_lahir', 'Tanggal Lahir', ['class' => 'control-label pull-right']) !!}
       </div>
       <div class="col-lg-6">
         {!! Form::date('tanggal_lahir', !empty($siswa) ? $siswa->tanggal_lahir->format('Y-m-d'): null, ['class' => 'form-control', 'id' => 'tanggal_lahir']) !!}
         @if ($errors->has('tanggal_lahir'))
             <span class="help-block">{{ $errors->first('tanggal_lahir') }}</span>
         @endif
       </div>
     </div>
 </div>

 @if ($errors->any())
     <div class="form-group {{ $errors->has('jenis_kelamin') ? 'has-error' : 'has-success' }}">
 @else
     <div class="form-group">
 @endif
     <div class="row">
       <div class="col-lg-4">
         {!! Form::label('jenis_kelamin', 'Jenis Kelamin', ['class' => 'control-label pull-right']) !!}
       </div>
     <div class="col-lg-6">
       <div class="radio">
           <label>{!! Form::radio('jenis_kelamin', 'L') !!} Laki-laki</label>
       </div>
       <div class="radio">
           <label>{!! Form::radio('jenis_kelamin', 'P') !!} Perempuan</label>
       </div>
       @if ($errors->has('jenis_kelamin'))
           <span class="help-block">{{ $errors->first('jenis_kelamin') }}</span>
       @endif
     </div>
   </div>
   </div>

   @if ($errors->any())
       <div class="form-group {{ $errors->has('nomor_telepon') ? 'has-error' : 'has-success' }}">
   @else
       <div class="form-group">
   @endif
   <div class="row">
     <div class="col-lg-4">
       {!! Form::label('telepon', 'Telepon', ['class' => 'control-label pull-right']) !!}
     </div>
     <div class="col-lg-6">
       {!! Form::text('telepon', null, ['class' => 'form-control']) !!}
       @if ($errors->has('telepon'))
           <span class="help-block">{{ $errors->first('telepon') }}</span>
       @endif
     </div>
   </div>
   </div>

   @if ($errors->any())
       <div class="form-group {{ $errors->has('foto') ? 'has-error' : 'has-success' }}">
   @else
       <div class="form-group">
   @endif
       <div class="row">
         <div class="col-lg-4">
           {!! Form::label('foto', 'Foto', ['class' => 'control-label pull-right']) !!}
         </div>
         <div class="col-lg-6">
           {!! Form::file('foto') !!}
           @if ($errors->has('foto'))
               <span class="help-block">{{ $errors->first('foto') }}</span>
           @endif
         </div>
       </div>
   </div>

   @if ($errors->any())
       <div class="form-group {{ $errors->has('deskripsi') ? 'has-error' : 'has-success' }}">
   @else
       <div class="form-group">
   @endif
         <div class="row">
           <div class="col-lg-4">
             {!! Form::label('alamat', 'Alamat', ['class' => 'control-label pull-right']) !!}
           </div>
           <div class="col-lg-6">
             {!! Form::textarea('alamat', null, ['class' => 'form-control']) !!}
             @if ($errors->has('alamat'))
                 <span class="help-block">{{ $errors->first('alamat') }}</span>
             @endif
           </div>
         </div>
       </div>

   @if ($errors->any())
       <div class="form-group {{ $errors->has('deskripsi') ? 'has-error' : 'has-success' }}">
   @else
       <div class="form-group">
   @endif
         <div class="row">
           <div class="col-lg-4">
             {!! Form::label('bio', 'Bio', ['class' => 'control-label pull-right']) !!}
           </div>
           <div class="col-lg-6">
             {!! Form::textarea('bio', null, ['class' => 'form-control']) !!}
             @if ($errors->has('bio'))
                 <span class="help-block">{{ $errors->first('bio') }}</span>
             @endif
           </div>
         </div>
       </div>

{{-- Submit Button --}}
<div class="form-group">
  <div class="row">
    <div class="col-md-6 col-md-offset-4">
      {!! Form::submit($submitButtonText, ['class' => 'btn btn-danger']) !!}
    </div>
  </div>
</div>
