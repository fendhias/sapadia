@if (isset($kategori))
    {!! Form::hidden('id', $kategori->id) !!}
@endif

@if ($errors->any())
    <div class="form-group {{ $errors->has('nama_kategori') ? 'has-error' : 'has-success' }}">
@else
    <div class="form-group">
@endif
    <div class="row">
      <div class="col-lg-4">
        {!! Form::label('nama_kategori', 'Nama Kategori:', ['class' => 'control-label pull-right']) !!}
      </div>
      <div class="col-lg-6">
        {!! Form::text('nama_kategori', null, ['class' => 'form-control']) !!}
        @if ($errors->has('nama_kategori'))
            <span class="help-block">{{ $errors->first('nama_kategori') }}</span>
        @endif
      </div>
    </div>


</div>

<div class="form-group">
  <div class="row">
    <div class="col-md-6 col-md-offset-4">
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-danger']) !!}
  </div>
</div>
</div>
