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
                        <h1 class="h3 mb-0 text-gray-800">Form Laporan</h1>
                    </div>

                    <div class="row">

                        <div class="col-lg-12">

                            <!-- Illustrations -->
                            <div class="card shadow mb-4">
                                <div class="card-body">
                                    <form>
                                        <div class="form-group">
                                            <label for="formGroupExampleInput">Provinsi/Kab/Kota</label>
                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Kab.Kediri">
                                           
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Satuan kerja</label>
                                            <select class="form-control" id="exampleFormControlSelect1">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                            <h6 class="font-italic">Isikan satuan kerja sesuai dengan Provinsi/Kab/Kota</h6>
                                            <h6 class="font-italic">Contoh : Dinas Pendidikan Prov Jatim</h6>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Sub bidang</label>
                                            <select class="form-control" id="exampleFormControlSelect1">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                            <h6 class="font-italic">Isikan sub bidang sesuai dengan satuan kerja yang dipilih </h6>
                                            <h6 class="font-italic">Contoh : TK, SD SMP</h6>
                                        </div>
                                        <div class="form-group">
                                            <label for="formGroupExampleInput">Volume</label>
                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                            <h6 class="font-italic">isikan volume yang sesuai dengan sub bidang</h6>
                                            <h6 class="font-italic">Contoh : 1</h6>
                                        </div>
                                        <div class="form-group">
                                            <label for="formGroupExampleInput">Satuan</label>
                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label for="formGroupExampleInput">Kegiatan</label>
                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                            <h6 class="font-italic">Isikan kegiatan yang sudah berjalan  </h6>
                                            <h6 class="font-italic">Contoh : pembelian alat tulis</h6>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1">Rincian Kegiatan</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                            <h6 class="font-italic">isikan rencana kegiatan secara detail</h6>
                                            <h6 class="font-italic">Contoh : Pembelian alat tulis menghabiskan anggaran sebesar Rp.5.000.000  </h6>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputState">State</label>
                                            <select id="inputState" class="form-control">
                                                <option selected>Choose...</option>
                                                <option>...</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Jenis DAK</label>
                                            <select class="form-control" id="exampleFormControlSelect1">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                            <h6 class="font-italic">isikan jenis DAK sesuai dengan kegiatan </h6>
                                            <h6 class="font-italic">Contoh : DAK Fisik/Non Fisik  </h6>   
                                        </div>
                                        <div class="form-group">
                                            <label for="formGroupExampleInput">Pagu DAK</label>
                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Rp.">
                                            <h6 class="font-italic">isikan besaran pagu DAK sesuai dengan jenis DAK </h6>
                                            <h6 class="font-italic">Contoh :Rp. 6.000.000</h6>
                                        </div>
                                        <div class="btn-toolbar text-center well">
                                            <div class="mx-auto m-3" style="width: 300px;" >
                                                <button type="button" class="btn btn-primary btn-color btn-bg-color btn-sm col-xs-1 margin-left">
                                                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Submit
                                                </button>
                                                <button type="button" class="btn btn-danger btn-color btn-bg-color btn-sm col-xs-1 margin-left">
                                                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Cancel
                                                </button>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                                    
                                       
                            </div>
                        </div>
                    </div>
                </div>           
                        
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
