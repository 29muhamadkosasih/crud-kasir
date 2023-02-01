@extends('layout.main')
@section('content')
    <div class="card mb-1">

        <div class="card-body">
            <div class="form-responsive">
                <form action="{{ route('admin.update', $admin->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    @method('PUT')
                    <div class="mb-3 row">

                        <label for="name" class="col-sm-2 col-form-label">Nama </label>
                        <div class="col-sm-8">
                            <input type="text" name="nama" class="form-control" id="names" placeholder=""
                                value="{{ $admin->nama }}">
                        </div>
                    </div>
                    <div class="mb-3 row">

                        <label for="" class="col-sm-2 col-form-label">Username</label>
                        <div class="col-sm-8">
                            <input type="text" name="username" class="form-control" id="" placeholder=""
                                value="{{ $admin->username }}">
                        </div>
                    </div>
                    <div class="mb-3 row">

                        <label for="" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-8">
                            <input type="password" name="password" class="form-control" id="" placeholder=""
                                value="{{ $admin->password }}">
                        </div>
                    </div>
                    <div class="mb-3 row">

                        <label for="" class="col-sm-2 col-form-label">Role</label>
                        <div class="col-sm-8">
                            <select name="role" class="form-control" id="">
                                <option selected>{{ $admin->role }}</option>
                                <option value="admin">admin</option>
                                <option value="manajer">manajer</option>
                                <option value="kasir">kasir</option>
                            </select>
                        </div>
                    </div>
                    <div class="">
                        <button type="submit"
                            class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Update</button>
                        <a class="d-none d-sm-inline-block btn btn-sm btn-secondary shadow-sm"
                            href="{{ route('admin.index') }}" role="button">Kembali</a>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection
