@extends('template')

@section('main')
      <div id="produk" style="padding-top:50px;">

          @if (Auth::check())
          <div class="tombol" style="padding-bottom:50px;">
                  <a href="produk/create" class="btn btn-default pull-right"  style="padding:10px;padding-left:20px;padding-right:20px;border-radius:0px;">Tambah Produk</a>
          </div>
          @endif

        @include('_partial.flash_message')

      <div class="pencarian">
        <div class="title" style="font-size:13px;color:#998e8e;padding-bottom:10px;">
          Pencarian
        </div>
        <div class="panel panel-default" style="padding:20px;background-color: #f5f0f0;">
          @include('produk.form_pencarian')
        </div>
      </div>



        @if (count($produk_list) > 0)

        <div class="produk" style="padding-top:10px;">
          <div class="title" style="font-size:13px;color:#998e8e;padding-bottom:10px;">
            Semua produk
          </div>

          <?php foreach($produk_list as $produk): ?>
            <div class="panel panel-default" style="margin-bottom:8px">
              <div class="row">
                <div class="col-lg-2" style="margin-right:0px;">
                    @if (isset($produk->foto))
                        <a href=" {{ 'produk/' . $produk->id }} "><img class="img-rounded" style="object-fit: cover;
                        width:120px;
                        height:120px;" src="{{ asset('fotoupload/' . $produk->foto) }}"></a>
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
