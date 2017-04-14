@if (isset($siswa))
    {!! Form::hidden('id', $siswa->id) !!}
@endif

@if ($errors->any())
    <div class="form-group {{ $errors->has('nama_siswa') ? 'has-error' : 'has-success' }}">
@else
    <div class="form-group">
@endif
    {!! Form::label('nama_siswa', 'Nama Produk :', ['class' => 'control-label']) !!}
    {!! Form::text('nama_siswa', null, ['class' => 'form-control']) !!}
    @if ($errors->has('nama_siswa'))
        <span class="help-block">{{ $errors->first('nama_siswa') }}</span>
    @endif
</div>

@if ($errors->any())
    <div class="form-group {{ $errors->has('deskripsi') ? 'has-error' : 'has-success' }}">
@else
    <div class="form-group">
@endif
    {!! Form::label('deskripsi', 'Deskripsi Produk :', ['class' => 'control-label']) !!}
    {!! Form::textarea('deskripsi', null, ['class' => 'form-control']) !!}
    @if ($errors->has('deskripsi'))
        <span class="help-block">{{ $errors->first('deskripsi') }}</span>
    @endif
</div>

<!-- Kelas -->
@if ($errors->any())
    <div class="form-group {{ $errors->has('id_kategori') ? 'has-error' : 'has-success' }}">
@else
    <div class="form-group">
@endif
    {!! Form::label('id_kategori', 'Kategori Produk :', ['class' => 'control-label']) !!}
    @if(count($list_kategori) > 0)
        {!! Form::select('id_kategori', $list_kategori, null, ['class' => 'form-control', 'id' => 'id_kategori', 'placeholder' => 'Pilih Kategori']) !!}
    @else
        <p>Tidak ada pilihan kelas, buat dulu ya...!</p>
    @endif
    @if ($errors->has('id_kategori'))
        <span class="help-block">{{ $errors->first('id_kategori') }}</span>
    @endif
</div>

<!-- Kelas -->
@if ($errors->any())
    <div class="form-group {{ $errors->has('id_users') ? 'has-error' : 'has-success' }}">
@else
    <div class="form-group">
@endif
    {!! Form::label('id_users', 'Pemilik Produk :', ['class' => 'control-label']) !!}
    @if(count($list_users) > 0)
        {!! Form::select('id_users', $list_users, null, ['class' => 'form-control', 'id' => 'id_users', 'placeholder' => 'Pilih Anggota']) !!}
    @else
        <p>Tidak ada pilihan kelas, buat dulu ya...!</p>
    @endif
    @if ($errors->has('id_users'))
        <span class="help-block">{{ $errors->first('id_users') }}</span>
    @endif
</div>

@if ($errors->any())
    <div class="form-group {{ $errors->has('foto') ? 'has-error' : 'has-success' }}">
@else
    <div class="form-group">
@endif
    {!! Form::label('foto', 'Foto:') !!}
    {!! Form::file('foto') !!}
    @if ($errors->has('foto'))
        <span class="help-block">{{ $errors->first('foto') }}</span>
    @endif
</div>

<div class="form-group">
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
</div>
