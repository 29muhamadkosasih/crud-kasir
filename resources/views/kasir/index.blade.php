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
            <a class="mb-2 btn btn-primary bi bi-folder-plus " href="{{ route('kasir.create') }}" role="button">
                Tambahkan Transaksi</a>

            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Pelanggan</th>
                            <th scope="col">Menu</th>
                            <th scope="col">Jumlah</th>
                            <th scope="col">Total</th>
                            <th scope="col">Nama Pegawai</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($transaksi as $data)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $data->nama_pelanggan }}</td>
                                <td>{{ $data->manajer->nama_menu }}</td>
                                {{-- <td> Rp.{{ number_format($data->manajer->nama_menu, 2,',','.') }}</td> --}}
                                <td>{{ $data->jumlah }}</td>
                                <td>{{ $data->total_harga }}</td>
                                <td> Rp.{{ number_format($data->total_harga, 2,',','.') }}</td>
                                <td>{{ $data->nama_pegawai }}</td>
                                <td>
                                    <form action="{{ route('kasir.destroy', $data->id) }}" method="POST">

                                        {{-- <a class="btn btn-primary" href="{{ route('kasir.edit',$data->id) }}">Edit</a> --}}
                                        <a type="submit" class="btn btn-warning bi bi-pencil-square square"
                                            href="{{ route('kasir.edit', $data->id) }}"></a>

                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="btn btn-danger bi bi-trash"
                                            onclick="return confirm ('Apakah Anda Yakin akan Menghapus?');"></button>
                                        {{-- <button type="submit" class="btn btn-danger" onclick="return confirm ('Apakah Anda Yakin akan Menghapus?');" >Delete</button> --}}
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
