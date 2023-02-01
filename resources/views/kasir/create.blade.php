@extends('layout.main')
@section('content')
    <div class="card mb-1">
        <div class="card-body">
            <div class="container">
                <form action="{{ route('kasir.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @if ($message = Session::get('success'))
                        <div class="alert alert-danger">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="mb-3 row">

                        <label for="" class="col-sm-2 col-form-label mt-3">Nama Pelanggan</label>
                        <div class="col-sm-8">
                            <input type="text" name="nama_pelanggan"
                                class="mt-3 form-control @error('nama_pelanggan') is-invalid @enderror" id=""
                                placeholder="" autofocus autocomplete="off" value="{{ old('nama_pelanggan') }}">
                            @error('nama_pelanggan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">

                        <label for="" class="col-sm-2 col-form-label">Nama Menu</label>
                        <div class="col-sm-8">

                            <select name="nama_menus" id="menu" class="form-control">
                                @foreach ($menus as $menu)
                                    <option value="{{ $menu->id }}">

                                        {{ $menu->nama_menu }}
                                    </option>
                                @endforeach
                            </select>

                        </div>
                    </div>


                    <div class="mb-3 row">

                        <label for="" class="col-sm-2 col-form-label">Jumlah</label>
                        <div class="col-sm-8">
                            <input type="number" name="jumlah" class="form-control @error('jumlah') is-invalid @enderror"
                                id="" placeholder="" autocomplete="off" value="{{ old('jumlah') }}">
                            @error('jumlah')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">

                        <label for="" class="col-sm-2 col-form-label">Nama Pegawai</label>
                        <div class="col-sm-8">
                            <input type="text" name="nama_pegawai"
                                class="form-control @error('nama_pegawai') is-invalid @enderror" id=""
                                placeholder="" autocomplete="off" value="{{ old('nama_pegawai') }}">
                            @error('nama_pegawai')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                    </div>
                    <div class="">
                        <button type="submit" class="btn btn-primary">Submit</button>

                        {{-- <a class="btn btn-secondary" type="submit" role="button">Simpan</a> --}}
                        <a class="btn btn-dark" href="{{ route('kasir.index') }}" role="button">Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
