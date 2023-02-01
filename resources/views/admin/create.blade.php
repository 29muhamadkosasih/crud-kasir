@extends('layout.main')
@section('content')
    <div class="card mb-1">
        <div class="card-body">
            <div class="form-responsive">
                <form action="{{ route('admin.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3 row">

                        <label for="name" class="col-sm-2 col-form-label">Nama </label>
                        <div class="col-sm-8">
                            <input type="text" name="nama" class="form-control" id="names" placeholder=""
                                autofocus>
                        </div>
                    </div>
                    <div class="mb-3 row">

                        <label for="" class="col-sm-2 col-form-label">Username</label>
                        <div class="col-sm-8">
                            <input type="text" name="username" class="form-control" id="" placeholder="">
                        </div>
                    </div>
                    <div class="mb-3 row">

                        <label for="" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-8">
                            <input type="password" name="password" class="form-control" id="" placeholder="">
                        </div>
                    </div>
                    <div class="mb-3 row">

                        <label for="" class="col-sm-2 col-form-label">Role</label>
                        <div class="col-sm-8">
                            <select name="role" class="form-control" id="">
                                <option selected>Pilih Role</option>
                                <option value="admin">admin</option>
                                <option value="manajer">manajer</option>
                                <option value="kasir">kasir</option>
                            </select>
                        </div>
                    </div>
                    <div class="">
                        <button type="submit"
                            class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Simpan</button>
                        <a class="d-none d-sm-inline-block btn btn-sm btn-secondary shadow-sm"
                            href="{{ route('admin.index') }}" role="button">Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
