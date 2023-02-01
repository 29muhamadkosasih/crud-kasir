@extends('layout.main')
@section('content')
    <div class="card mb-1">

        <div class="card-body">
            @if ($message = Session::get('danger'))
                <div class="alert alert-danger">
                    <p>{{ $message }}</p>
                </div>
            @endif
            <form action="{{ route('manajer.update', $manajer->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3 row">

                    <label for="" class="col-sm-2 col-form-label">Nama Menu</label>
                    <div class="col-sm-8">
                        <input type="text" name="nama_menu" class="form-control @error('nama_menu') is-invalid @enderror"
                            id="" placeholder="" autocomplete="off" value="{{ $manajer->nama_menu }}">
                        @error('nama_menu')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="mb-3 row">

                    <label for="" class="col-sm-2 col-form-label">Harga</label>
                    <div class="col-sm-8">
                        <input type="text" name="harga" class="form-control @error('harga') is-invalid @enderror"
                            id="" placeholder="" autocomplete="off" value="{{ $manajer->harga }}">
                        @error('harga')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="mb-3 row">

                    <label for="" class="col-sm-2 col-form-label">Deskripsi</label>
                    <div class="col-sm-8">
                        <textarea class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi"
                            id="exampleFormControlTextarea1" rows="3">{{ $manajer->deskripsi }}</textarea>
                        @error('deskripsi')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="mb-3 row">

                    <label for="" class="col-sm-2 col-form-label">Ketersediaan</label>
                    <div class="col-sm-8">
                        <input type="number" name="ketersediaan"
                            class="form-control @error('ketersediaan') is-invalid @enderror" id="" placeholder=""
                            autocomplete="off" value="{{ $manajer->ketersediaan }}">
                        @error('ketersediaan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                </div>
                <div class="">
                    <button type="submit" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Update</button>
                    <a href="{{ route('manajer.index') }}"
                        class="d-none d-sm-inline-block btn btn-sm btn-secondary shadow-sm"><i
                            class="fa-sm text-white-50"></i> Kembali</a>
                </div>
            </form>
        </div>
    </div>
@endsection
