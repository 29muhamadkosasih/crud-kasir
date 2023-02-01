@extends('layout.main')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h6 class="m-0 font-weight-bold text-primary">Detail</h6>
                    </div>
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <tbody>
                                <tr>
                                    <td>Name Menu</td>
                                    <td>{{ $manajer->nama_menu }}</td>
                                </tr>
                                <tr>
                                    <td>Harga</td>
                                    <td>{{ $manajer->harga }}</td>
                                </tr>
                                <tr>
                                    <td>Deskripsi</td>
                                    <td>{{ $manajer->deskripsi }}</td>
                                </tr>
                                <tr>
                                    <td>Ketersediaan</td>
                                    <td>{{ $manajer->ketersediaan }}</td>
                                </tr>
                                <tr>
                                    <td>Created At</td>
                                    <td>{{ $manajer->created_at }}</td>
                                </tr>
                                <tr>
                                    <td>Updated At</td>
                                    <td>{{ $manajer->updated_at }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
