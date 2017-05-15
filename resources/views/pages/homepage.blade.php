 @extends('template')

 @section('main')

    <!-- First Featurette -->
    <img style="margin:80px auto 20px;object-fit: cover;width:120px;height:120px;" class="img-responsive" src="img/profil.png" alt="">
    <div class="title" style="padding-top:10px;">
      <h1 style="text-align:center;font-weight:bold;">Marketplace Sapadia</h1>
    </div>
    <div class="row">
      <div class="col-md-6 col-md-offset-3" style="padding-top:15px">
        <p style="text-align:center;color:grey;">Marketplace Sapadia adalah ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
      </div>
      <div class="col-md-2 col-md-offset-5">
        <a href="produk" class="btn btn-danger btn-lg" style="margin-top:30px;">Lihat Produk</a>
      </div>
    </div>

@stop

@section('footer')
    @include('footer')
@stop
