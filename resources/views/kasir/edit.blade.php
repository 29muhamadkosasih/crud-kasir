@extends('layout.main')
@section('content')
    <div class="card mb-1">
        <div class="card-body">
            @if ($message = Session::get('danger'))
                <div class="alert alert-danger">
                    <p>{{ $message }}</p>
                </div>
            @endif

            <form action="{{ route('kasir.update', $kasir->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3 row">

                    <label for="" class="col-sm-2 col-form-label">Nama Pelanggan</label>
                    <div class="col-sm-8">
                        <input type="text" name="nama_pelanggan" class="form-control" id="" placeholder=""
                            autocomplete="off" value="{{ $kasir->nama_pelanggan }}">
                    </div>
                </div>
                <div class="mb-3 row">

                    <label for="" class="col-sm-2 col-form-label">Menu</label>
                    <div class="col-sm-8">
                        <input type="text" name="nama_menu" class="form-control" id="" placeholder=""
                            autocomplete="off" value="{{ $kasir->nama_menu }}">
                    </div>
                </div>
                <div class="mb-3 row">

                    <label for="" class="col-sm-2 col-form-label">Jumlah</label>
                    <div class="col-sm-8">
                        <input type="text" name="jumlah" class="form-control" id="" placeholder=""
                            autocomplete="off" value="{{ $kasir->jumlah }}">
                    </div>
                </div>
                <div class="mb-3 row">

                    <label for="" class="col-sm-2 col-form-label">Total Harga</label>
                    <div class="col-sm-8">
                        <input type="text" name="total_harga" class="form-control" id="" placeholder=""
                            autocomplete="off" value="{{ $kasir->total_harga }}">
                    </div>
                </div>
                <div class="mb-3 row">

                    <label for="" class="col-sm-2 col-form-label">Nama Pegawai</label>
                    <div class="col-sm-8">
                        <input type="text" name="nama_pegawai" class="form-control" id="" placeholder=""
                            autocomplete="off" value="{{ $kasir->nama_pegawai }}">
                    </div>

                </div>
                <div class="">
                    <button type="submit" class="btn btn-primary">Update</button>

                    {{-- <a class="btn btn-secondary" type="submit" role="button">Simpan</a> --}}
                    <a class="btn btn-dark" href="{{ route('kasir.index') }}" role="button">Kembali</a>
                </div>
            </form>
        </div>
    </div>
@endsection
