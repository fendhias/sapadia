@extends('template')

@section('main')
    <div id="produk">
      <div id="title"  style="padding-top:20px;">
        <div class="row">
          <div class="col-lg-6">
            <h3>Menampilkan {{ $jumlah_produk }} produk</h3>
          </div>
          <div class="col-lg-6" style="padding-top:10px;">
            @if (Auth::check())
                <div class="tombol-nav">
                    <a href="produk/create" class="btn btn-primary pull-right"  style="padding:10px;padding-left:20px;padding-right:20px;">Tambah Produk</a>
                </div>
            @endif
          </div>
        </div><hr>
      </div>

        @include('_partial.flash_message')

        @include('produk.form_pencarian')

        @if (count($produk_list) > 0)

        <div class="produk" style="padding-top:10px;">
          <?php foreach($produk_list as $produk): ?>
            <div class="panel panel-default" style="margin-bottom:5px">
              <div class="row">
                <div class="col-lg-1" style="margin-right:30px;">
                    @if (isset($produk->foto))
                        <a href=" {{ 'produk/' . $produk->id }} "><img class="img-rounded" style="object-fit: cover;
                        width:100px;
                        height:100px;" src="{{ asset('fotoupload/' . $produk->foto) }}"></a>
                    @else
                         @if ($produk->jenis_kelamin == 'L')
                             <a href=" {{ 'produk/' . $produk->id }} "><img class="img-rounded" style="object-fit: cover;
                             width:100px;
                             height:100px;" src="{{ asset('fotoupload/dummymale.jpg') }}"></a>
                         @else
                             <a href=" {{ 'produk/' . $produk->id }} "><img class="img-rounded" style="object-fit: cover;
                             width:100px;
                             height:100px;" src="{{ asset('fotoupload/dummyfemale.jpg') }}"></a>
                         @endif
                    @endif
                  </div>
                  <div class="col-lg-6" style="margin-right: 45px;">
                    <div class="nama" style="font-size:18px;padding-top:7px">
                      {{ link_to('produk/' . $produk->id, $produk->nama_siswa ) }}
                    </div>
                    <h5>{{ $produk->kategori->nama_kategori }}</h5>
                  </div>
                  <div class="col-lg-4" style="padding-top:10px">
                    @if (Auth::check())
                      <div class="aksi pull-right" style="padding-right:10px">
                        <div class="box-button">
                            {{ link_to('produk/' . $produk->id . '/edit', 'Edit', ['class' => 'btn btn-default btn-sm']) }}
                        </div>
                        <div class="box-button">
                            {!! Form::open(['method' => 'DELETE', 'action' => ['ProdukController@destroy', $produk->id]]) !!}
                                {!! Form::submit('Delete', ['class' => 'btn btn-default btn-sm']) !!}
                            {!! Form::close() !!}
                        </div>
                      </div>
                    @endif
                  </div>
              </div>
            </div>
          <?php endforeach ?>
        </div>

        @else
            <p>Tidak ada data siswa.</p>
        @endif

        <div class="table-nav">
            <div class="paging">
                {{ $produk_list->links() }}
            </div>
        </div>


    </div> <!-- / #siswa -->
@stop

@section('footer')
   @include('footer')
@stop
