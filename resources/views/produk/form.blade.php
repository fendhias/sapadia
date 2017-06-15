@if (isset($produk))
    {!! Form::hidden('id', $produk->id) !!}
@endif

@if ($errors->any())
    <div class="form-group {{ $errors->has('nama_produk') ? 'has-error' : 'has-success' }}">
@else
    <div class="form-group">
@endif
      <div class="row">
        <div class="col-lg-4">
          {!! Form::label('nama_produk', 'Nama Produk', ['class' => 'control-label pull-right']) !!}
        </div>
        <div class="col-lg-6">
          {!! Form::text('nama_produk', null, ['class' => 'form-control']) !!}
          @if ($errors->has('nama_produk'))
              <span class="help-block">{{ $errors->first('nama_produk') }}</span>
          @endif
        </div>
        <div class="col-lg-2">
          <span style="color:grey">max 100 karakter</span>
        </div>
      </div>
    </div>

<!-- Kelas -->
@if ($errors->any())
    <div class="form-group {{ $errors->has('id_kategori') ? 'has-error' : 'has-success' }}">
@else
    <div class="form-group">
@endif
      <div class="row">
        <div class="col-lg-4">
          {!! Form::label('id_kategori', 'Kategori Produk', ['class' => 'control-label pull-right']) !!}
        </div>
        <div class="col-lg-6">
          @if(count($list_kategori) > 0)
              {!! Form::select('id_kategori', $list_kategori, null, ['class' => 'form-control', 'id' => 'id_kategori', 'placeholder' => 'Pilih Kategori']) !!}
          @else
              <p>Tidak ada pilihan kelas, buat dulu ya...!</p>
          @endif
          @if ($errors->has('id_kategori'))
              <span class="help-block">{{ $errors->first('id_kategori') }}</span>
          @endif
        </div>
      </div>

    </div>

<!-- Pemilik -->
@if ($errors->any())
    <div class="form-group {{ $errors->has('id_users') ? 'has-error' : 'has-success' }}">
@else
    <div class="form-group">
@endif
      <div class="row">
        <div class="col-lg-4">
          {!! Form::label('id_users', 'Pemilik Produk', ['class' => 'control-label pull-right']) !!}
        </div>
        <div class="col-lg-6">
          @if(count($list_users) > 0)
              {!! Form::select('id_users', $list_users, null, ['class' => 'form-control', 'id' => 'id_users', 'placeholder' => 'Pilih Anggota']) !!}
          @else
              <p>Tidak ada pilihan kelas, buat dulu ya...!</p>
          @endif
          @if ($errors->has('id_users'))
              <span class="help-block">{{ $errors->first('id_users') }}</span>
          @endif
        </div>
      </div>

    </div>

<!-- harga -->
@if ($errors->any())
    <div class="form-group {{ $errors->has('harga') ? 'has-error' : 'has-success' }}">
@else
    <div class="form-group">
@endif
      <div class="row">
        <div class="col-lg-4">
          {!! Form::label('harga', 'Masukan harga', ['class' => 'control-label pull-right']) !!}
        </div>
        <div class="col-lg-6">
          {!! Form::text('harga', null, ['class' => 'form-control']) !!}
          @if ($errors->has('harga'))
              <span class="help-block">{{ $errors->first('harga') }}</span>
          @endif
        </div>
        <div class="col-lg-2">
          <p style="color:gray">misal : (10000)</p>
        </div>
      </div>

    </div>

<!-- gambar -->
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
        <div class="col-lg-2">
          <p style="color:grey;">ukuran max 1 MB</p>
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
          {!! Form::label('deskripsi', 'Deskripsi Produk', ['class' => 'control-label pull-right']) !!}
        </div>
        <div class="col-lg-6">
          {!! Form::textarea('deskripsi', null, ['class' => 'form-control']) !!}
          @if ($errors->has('deskripsi'))
              <span class="help-block">{{ $errors->first('deskripsi') }}</span>
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
