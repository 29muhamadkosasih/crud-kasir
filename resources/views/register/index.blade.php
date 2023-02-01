
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Register</title>

    <!-- Custom fonts for this template-->
  <link href="assets/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../../assets/admin/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center my-5">

            <div class="col-xl-7 my-0">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-2 mb-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row justify-content-center">
                            <div class=" justify-content-center col-lg-10 m-20">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h3 text-gray-900 mb-4">Register</h1>
                                    </div>
                                    @if ($message = Session::get('danger'))
                                        <div class="alert alert-danger">
                                            <p>{{ $message }}</p>
                                        </div>
                                    @endif
                                    <form action="{{ route('register.store') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                          <div class="mb-3 row">
                                              
                                            <label for="name" class="col-sm-2 col-form-label">Nama </label>
                                            <div class="col-sm-8">
                                              <input type="text" name="nama" class="form-control form-control-user" id="names" placeholder="" autofocus required>
                                            </div>
                                          </div>
                                          <div class="mb-3 row">
                                              
                                            <label for="" class="col-sm-2 col-form-label">Username</label>
                                            <div class="col-sm-8">
                                              <input type="text" name="username" class="form-control" id="" placeholder="" required>
                                            </div>
                                          </div>
                                          <div class="mb-3 row">
                                              
                                            <label for="" class="col-sm-2 col-form-label">Password</label>
                                            <div class="col-sm-8">
                                              <input type="password" name="password" class="form-control" id="" placeholder="" required>
                                            </div>
                                          </div>
                                          <div class="mb-3 row">
                                              
                                            <label for="" class="col-sm-2 col-form-label" >Role</label>
                                            <div class="col-sm-8">
                                              <select name="role" class="form-control" id="">
                                                <option value="admin">Admin</option>
                                                <option value="manajer">Manajer</option>
                                                <option value="kasir">Kasir</option>
                                              </select>
                                              {{-- <input type="text" name="role" class="form-control" id="" placeholder=""> --}}
                                            </div>
                                            
                                          </div>
                                          <div class="">
                                            <button type="submit" class="btn btn-secondary">Simpan</button>
                                            <a class="btn btn-secondary" href="{{ url('/') }}" role="button">Kembali</a>
                                          </div>
                                       </form>
                                 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

      <!-- Bootstrap core JavaScript-->
  <script src="assets/admin/vendor/jquery/jquery.min.js"></script>
  <script src="assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="assets/admin/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="assets/admin/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="assets/admin/vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="assets/admin/js/demo/chart-area-demo.js"></script>
  <script src="assets/admin/js/demo/chart-pie-demo.js"></script>

</body>

</html>