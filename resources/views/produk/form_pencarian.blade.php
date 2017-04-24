<div id="pencarian">
{!! Form::open(['url' => 'produk/cari', 'method' => 'GET', 'id' => 'form-pencarian']) !!}
    <div class="row">
        <div class="col-md-4">
            {!! Form::select('id_kelas', $list_kategori, (! empty($id_kelas) ? $id_kelas : null), ['id' => 'id_kelas', 'class' => 'form-control', 'placeholder' => 'Pilih Kategori']) !!}
        </div>

        <div class="col-md-8">
            <div class="input-group">
            {!! Form::text('kata_kunci', (! empty($kata_kunci)) ? $kata_kunci : null,['class' => 'form-control', 'placeholder' => 'Cari Produk ...']) !!}
            <span class="input-group-btn" style="padding-left:30px;">
            {!! Form::button('Terapkan', ['class' => 'btn btn-success', 'type' => 'submit']) !!}
            </span>
            </div>
        </div>
    </div>
{!! Form::close() !!}
</div>
