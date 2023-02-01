@extends('layout.main')
@section('content')
    <div class="card mb-1">
        <div class="card-header">
            <h6 class="m-0 font-weight-bold text-primary">DataTales Admin</h6>
        </div>
        <div class="card-body">
            @if ($message = Session::get('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <p>{{ $message }}</p>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            <a class="mb-2 btn btn-primary bi bi-folder-plus " href="{{ route('admin.create') }}" role="button">
                Tambahkan Transaksi</a>

            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Username</th>
                            <th scope="col">Role</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($user as $user)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $user->nama }}</td>
                                <td>{{ $user->username }}</td>
                                <td>{{ $user->role }}</td>
                                <td>
                                    <form action="{{ route('admin.destroy', $user->id) }}" method="POST">
                                        <a type="submit" class="btn btn-warning bi bi-pencil-square square"
                                            href="{{ route('admin.edit', $user->id) }}"></a>
                                        <a type="submit" class="btn btn-success bi bi-eye-fill"
                                            href="{{ route('admin.show', $user->id) }}"></a>

                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="btn btn-danger bi bi-trash"
                                            onclick="return confirm ('Apakah Anda Yakin akan Menghapus?');"></button>

                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
@endsection
