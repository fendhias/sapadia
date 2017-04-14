@if (isset($kategori))
    {!! Form::hidden('id', $kategori->id) !!}
@endif

@if ($errors->any())
    <div class="form-group {{ $errors->has('nama_kategori') ? 'has-error' : 'has-success' }}">
@else
    <div class="form-group">
@endif
    {!! Form::label('nama_kategori', 'Nama Kelas:', ['class' => 'control-label']) !!}
    {!! Form::text('nama_kategori', null, ['class' => 'form-control']) !!}
    @if ($errors->has('nama_kategori'))
        <span class="help-block">{{ $errors->first('nama_kategori') }}</span>
    @endif
</div>

<div class="form-group">
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
</div>
