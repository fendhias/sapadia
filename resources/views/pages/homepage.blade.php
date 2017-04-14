 @extends('template')

 @section('paralax')

      <header class="foto">
          <div class="parallax-window" data-parallax="scroll" data-image-src="{{ asset('/img/q9glzfhyggk-aidan-meyer.jpg') }}" style="top: 20px;"></div>
      </header>

      <div class="container">
        <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><strong>Produk</strong></h1>
                </div>

                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a class="thumbnail" href="#">
                        <img class="img-responsive" src="http://placehold.it/400x300" alt="">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a class="thumbnail" href="#">
                        <img class="img-responsive" src="http://placehold.it/400x300" alt="">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a class="thumbnail" href="#">
                        <img class="img-responsive" src="http://placehold.it/400x300" alt="">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a class="thumbnail" href="#">
                        <img class="img-responsive" src="http://placehold.it/400x300" alt="">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a class="thumbnail" href="#">
                        <img class="img-responsive" src="http://placehold.it/400x300" alt="">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a class="thumbnail" href="#">
                        <img class="img-responsive" src="http://placehold.it/400x300" alt="">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a class="thumbnail" href="#">
                        <img class="img-responsive" src="http://placehold.it/400x300" alt="">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a class="thumbnail" href="#">
                        <img class="img-responsive" src="http://placehold.it/400x300" alt="">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a class="thumbnail" href="#">
                        <img class="img-responsive" src="http://placehold.it/400x300" alt="">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a class="thumbnail" href="#">
                        <img class="img-responsive" src="http://placehold.it/400x300" alt="">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a class="thumbnail" href="#">
                        <img class="img-responsive" src="http://placehold.it/400x300" alt="">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a class="thumbnail" href="#">
                        <img class="img-responsive" src="http://placehold.it/400x300" alt="">
                    </a>
                </div>
            </div>
          <hr>

          <a href="produk" class="btn btn-primary btn-lg center" style="border-radius: 0px;">Semua Produk</a>
          </div>

@stop

@section('footer')
    @include('footer')
@stop
