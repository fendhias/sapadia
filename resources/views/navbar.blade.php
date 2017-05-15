      <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container" style="margin-top:0px">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed"
                    data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1"
                    aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>

            <a class="navbar-brand" href="{{ url('/') }}">
            <img alt="Brand" width="35" height="35" src="{{ URL::asset('/img/logo.png') }}" class="logo-img">
            </a>
          </div>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">

              {{-- Home --}}
              @if (!empty($halaman) && $halaman == 'home')
                <li class="active"><a href="{{ url('/') }}">Home<span class="sr-only">(current)</span></a></li>
              @else
                <li><a href="{{ url('/') }}">Home</a></li>
              @endif

              {{-- Produk --}}
              @if (!empty($halaman) && $halaman == 'produk')
                <li class="active"><a href="{{ url('produk') }}">Produk<span class="sr-only">(current)</span></a></li>
              @else
                <li><a href="{{ url('produk') }}">Produk</a></li>
              @endif

              {{-- Anggota --}}
              @if (!empty($halaman) && $halaman == 'anggota')
                <li class="active"><a href="{{ url('anggota') }}">Anggota<span class="sr-only">(current)</span></a></li>
              @else
                <li><a href="{{ url('anggota') }}">Anggota</a></li>
              @endif

              {{-- Kategori --}}
              @if (Auth::check())
                @if (!empty($halaman) && $halaman == 'kategori')
                  <li class="active"><a href="{{ url('kategori') }}">Kategori<span class="sr-only">(current)</span></a></li>
                @else
                  <li><a href="{{ url('kategori') }}">Kategori</a></li>
                @endif
              @endif

              {{-- User --}}
              @if (Auth::check() && Auth::user()->level == 'admin')
                @if (!empty($halaman) && $halaman == 'user')
                  <li class="active"><a href="{{ url('user') }}">User<span class="sr-only">(current)</span></a></li>
                @else
                  <li><a href="{{ url('user') }}">User</a></li>
                @endif
              @endif
            </ul>

            {{-- Link Login --}}
            <ul class="nav navbar-nav navbar-right">
              @if (Auth::check())
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>
                <div class="dropdown-menu" role="menu">
                          <ul>
                            <br>
                            <li>{{ link_to('/', 'Ke Beranda') }}</li>
                            <br>
                            <li>{{ link_to('anggota/' . Auth::user()->id, 'Profil Saya') }}</li>
                            <br>
                            <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            <br>
                          </ul>
                </div>
            </li>
              @else
                <div class="login" style="padding-top:13px;">
                  <a href = "{{ url('login') }}" class="btn btn-danger" style="font-size:12px;"><strong>Login</strong></a>
                </div>
              @endif
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
