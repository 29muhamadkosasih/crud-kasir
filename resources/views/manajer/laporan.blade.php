@extends('layout.main')
@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="card-header">
                <h6 class="m-0 font-weight-bold text-primary">DataTales Admin</h6>
            </div>
            <div class="card-body">
                <form action="{{ url('filter') }}" method="POST" class="form-inline">
                    @csrf
                    <input type="date" name="mulai" class="form-control ml-2">
                    <h5 class="ml-2 mt-2">sampai</h5>
                    <input type="date" name="selesai" class="form-control ml-2">
                    <button type="submit" class="d-none d-sm-inline-block btn btn-sm btn-info shadow-sm ml-2">
                        Filter</button>
                    <div class="justify-content-md-end ml-5">
                </form>
            </div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a href="{{ url('cetak') }}" target="_blank"
                    class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                        class="fas fa-download fa-sm text-white-50 justify-content-md-end"></i>&nbsp; Download PDF</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Pelanggan</th>
                                <th scope="col">Menu</th>
                                <th scope="col">Jumlah</th>
                                <th scope="col">Total</th>
                                <th scope="col">Nama Pegawai</th>
                                <th scope="col">Tgl Transaksi</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($transaksi as $transaksi)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $transaksi->nama_pelanggan }}</td>
                                    <td>{{ $transaksi->nama_menu }}</td>
                                    <td>{{ $transaksi->jumlah }}</td>
                                    <td>{{ $transaksi->total_harga }}</td>
                                    <td>{{ $transaksi->nama_pegawai }}</td>
                                    <td>{{ $transaksi->created_at }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    @endsection
