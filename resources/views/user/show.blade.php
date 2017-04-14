@extends('template')

@section('main')

        <!-- Portfolio Item Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header">{{ $userl->name }}
                </h3>
            </div>
        </div>
        <!-- /.row -->

        {{ $userl->anggota->telepon }}




@stop

@section('footer')
    @include('footer')
@stop
