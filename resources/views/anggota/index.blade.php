@extends('template')

@section('main')
    <div id="produk">
      <div id="title"  style="padding-top:20px;">
        <div class="row">
          <div class="col-lg-6">
            <h3>Menampilkan {{ $jumlah_anggota }} anggota</h3>
          </div>
        </div><hr>
      </div>

        @include('_partial.flash_message')

        @if (count($anggota_list) > 0)

        <div class="produk" style="padding-top:10px;">
          <?php foreach($anggota_list as $anggota): ?>
            <div class="panel panel-default" style="margin-bottom:5px">
              <div class="row">
                <div class="col-lg-1" style="margin-right: 30px;">
                    @if (isset($anggota->foto))
                        <a href=" {{ 'anggota/' . $anggota->id }} "><img class="img-rounded" style="object-fit: cover;
                        width:100px;
                        height:100px;" src="{{ asset('fotoupload/' . $anggota->foto) }}"></a>
                    @else
                         @if ($anggota->jenis_kelamin == 'L')
                             <a href=" {{ 'anggota/' . $anggota->id }} "><img class="img-rounded" style="object-fit: cover;
                             width:100px;
                             height:100px;" src="{{ asset('fotoupload/dummymale.jpg') }}"></a>
                         @else
                             <a href=" {{ 'anggota/' . $anggota->id }} "><img class="img-rounded" style="object-fit: cover;
                             width:100px;
                             height:100px;" src="{{ asset('fotoupload/dummyfemale.jpg') }}"></a>
                         @endif
                    @endif
                  </div>
                  <div class="col-lg-6"">
                    <a href=" {{ 'anggota/' . $anggota->id }} "><h4>{{ $anggota->users->name }}</h4></a>
                    <h5>{{ $anggota->tanggal_lahir }}</h5>
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
                {{ $anggota_list->links() }}
            </div>
        </div>


    </div> <!-- / #siswa -->
@stop

@section('footer')
   @include('footer')
@stop
