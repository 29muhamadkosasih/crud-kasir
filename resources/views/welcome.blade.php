<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login - Kasir Crud</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <!-- Custom fonts for this template-->
    <link href="assets/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../../assets/admin/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center my-3     ">

            <div class="col-xl-5 my-5">

                <div class="card o-hidden border -lg my-3">
                    <div class="card-body p-2">
                        <!-- Nested Row within Card Body -->
                        <div class="row justify-content-center">

                            <div class=" justify-content-center col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h3 text-gray-900 mb-2">LOGIN</h1>
                                        <p class=" text-gray-900 mb-4 ">Sign in to start your session</p>
                                    </div>
                                    @if ($message = Session::get('danger'))
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            <p>{{ $message }}</p>
                                            <button type="button" class="close" data-dismiss="alert"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                    @endif
                                    <form action="/login" method="GET" enctype="multipart/form-data"
                                        class="user justify-content-center  ">
                                        @csrf
                                        <div class="input-group mb-3">
                                            <input type="text" name="username" class="form-control"
                                                placeholder="Username" autofocus required autocomplete="off">
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span class="fas fa-envelope"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-group mb-3">
                                            <input type="password" name="password" class="form-control"
                                                placeholder="Password" required>
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span class="fas fa-lock"></span>
                                                </div>
                                            </div>
                                        </div>

                                        <button type="submit" class="btn btn-primary btn-block">Login</button>
                                        <br>
                                        <div class="text-center">
                                        </div>

                                    </form>

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
