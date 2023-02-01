@extends('layout.main')
@section('content')
    @include('sweetalert::alert')
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
            <a class="mb-2 btn btn-primary bi bi-folder-plus " href="{{ route('manajer.create') }}" role="button">
                Tambahkan Transaksi</a>

            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Menu</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Deskripsi</th>
                            <th scope="col">Ketersediaan</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($menu as $menu)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $menu->nama_menu }}</td>
                                <td>{{ $menu->harga }}</td>
                                <td>{{ $menu->deskripsi }}</td>
                                <td>{{ $menu->ketersediaan }}</td>
                                <td>
                                    <form action="{{ route('manajer.destroy', $menu->id) }}" method="POST">

                                        {{-- <a class="btn btn-primary" href="{{ route('manajer.edit',$menu->id) }}">Edit</a> --}}
                                        <a type="submit" class="btn btn-warning bi bi-pencil-square square"
                                            href="{{ route('manajer.edit', $menu->id) }}"></a>
                                        <a type="submit" class="btn btn-success bi bi-eye-fill"
                                            href="{{ route('manajer.show', $menu) }}"></a>

                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="btn btn-danger bi bi-trash "
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
