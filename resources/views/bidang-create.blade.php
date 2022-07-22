<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>E-SIDAK</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="@import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;800;900&display=swap');"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        @include('partials.sidebar');

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                @include('partials.navbar')

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Tambah Bidang</h1>
                    </div>
                
                    <!-- Content Row -->
                    <div class="row" style="padding-top: 0rem">

                        <div class="col-lg-12 mb-4">

                            <!-- Illustrations -->
                            <div class="card shadow mb-4">
                                {{-- <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Laporan</h6>
                                </div> --}}
                                <div class="card-body">

                                    <form method="POST" action="/tambah-bidang">
                                        @csrf
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="name">Nama Bidang</label>
                                                        <input type="text" class="form-control" id="name" name="nama_guru">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="tgl_lahir">No Hp</label>
                                                        <input type="text" class="form-control" id="hp" name="hp">
                                                    </div>
                                                    <div class="form-group">
                                                    <label for="gender">Gender</label>
                                                        <select class="form-control" id="gender" name="gender">
                                                        <option>L</option>
                                                        <option>P</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="kota_lahir">Email</label>
                                                        <input type="email" class="form-control" id="email" name="email">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="nama_ortu">Status Aktif</label>
                                                        <input type="text" class="form-control" id="aktif" aria-describedby="emailHelp" name="aktif">
                                                    </div>

                                                    <button type="submit" class="btn mt-2 btn-primary btn-sm">Submit</button>
                                                </div>
                                                {{-- <div class="row">
                                                  <div class="col-lg-6">
                                                  <button type="submit" class="btn mt-2 btn-primary ml-3 btn-sm">Submit</button>
                                                  </div>
                                                </div> --}}
                              
                                            </div>
                                        </form>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; E-SIDAK 2022</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>
