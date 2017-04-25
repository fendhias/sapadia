@extends('template')

@section('main')
      <div id="produk" style="padding-top:20px;">

      @include('_partial.flash_message')

      @if (Auth::check())
        <div class="tombol" style="padding-bottom:30px;">
                <a href="produk/create" class="btn btn-default pull-right"  style="padding:10px;padding-left:20px;padding-right:20px;">Tambah Produk</a>
        </div>
      @endif

      <div class="pencarian">
        <div class="title" style="font-size:13px;color:#998e8e;padding-bottom:10px;">
          Pencarian
        </div>
        <div class="panel panel-default" style="padding:20px;">
          @include('produk.form_pencarian')
        </div>
      </div>

        @if (count($produk_list) > 0)

        <div class="produk">
          <div class="title" style="font-size:13px;color:#998e8e;padding-bottom:10px;">
            Semua produk
          </div>

          <?php foreach($produk_list as $produk): ?>
            <div class="panel panel-default" style="margin-bottom:8px;padding:7px;">
              <div class="row">
                <div class="col-lg-2" style="margin-right:0px;">
                    @if (isset($produk->foto))
                        <a href=" {{ 'produk/' . $produk->id }} "><img class="img-rounded" style="object-fit: cover;
                        width:120px;
                        height:120px;" src="{{ asset('fotoupload/' . $produk->foto) }}"></a>
                    @else
                         <a href=" {{ 'produk/' . $produk->id }} "><img class="img-rounded" style="object-fit: cover;
                         width:120px;
                         height:120px;" src="{{ asset('fotoupload/product.png') }}"></a>
                    @endif
                  </div>
                  <div class="col-lg-8" style="margin-left: -20px;">
                    <div class="nama" style="font-size:18px;padding-top:7px">
                      <p>{{ link_to('produk/' . $produk->id, $produk->nama_siswa ) }}</p>
                    </div>
                    <h5>{{ $produk->kategori->nama_kategori }}</h5>
                    <div class="hubungi" style="font-size:10px;padding-top:7px">
                      @if (! empty($produk->users->id))
                        {{ link_to('anggota/' . $produk->users->id , 'Hubungi Penjual', ['class' => 'btn btn-success']) }}
                      @else
                        {{ "Penjual tidak tersedia" }}
                      @endif
                    </div>
                  </div>
                  <div class="col-lg-2">
                    <div class="harga pull-right" style="font-size:20px;padding-top:15px;color:#5cb85c;">
                      Rp {{ $produk->harga }}
                    </div>
                  </div>
              </div>
            </div>
          <?php endforeach ?>
        </div>

        @else
            <p style="font-size: 25px; text-align: center;">Produk tidak tersedia</p>
        @endif

        <div class="table-nav">
            <div class="paging">
                {{ $produk_list->links() }}
            </div>
        </div>

    </div>
@stop

@section('footer')
   @include('footer')
@stop
