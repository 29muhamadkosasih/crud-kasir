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
                                    <td>Name </td>
                                    <td>{{ $admin->nama }}</td>
                                </tr>
                                <tr>
                                    <td>Username</td>
                                    <td>{{ $admin->username }}</td>
                                </tr>
                                <tr>
                                    <td>Role</td>
                                    <td>{{ $admin->role }}</td>
                                </tr>
                                <tr>
                                    <td>Created At</td>
                                    <td>{{ $admin->created_at }}</td>
                                </tr>
                                <tr>
                                    <td>Updated At</td>
                                    <td>{{ $admin->updated_at }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection