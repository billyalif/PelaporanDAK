<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>E-SIDAK | {{ $title }}</title>

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
                        <h1 class="h3 mb-0 text-gray-800">Tambah Kegiatan</h1>
                    </div>

                    <div class="row">

                        <div class="col-lg-12">

                        <form method="POST" action="/tambah-kegiatan">
                                @csrf
                            <div class="card shadow mb-4">
                                <div class="card-body">

                                        <div class="form-group" style="font-weight:700">
                                            <label for="formGroupExampleInput">Kabupaten/Kota</label>
                                            <input type="text" class="form-control" id="formGroupExampleInput" readonly placeholder="{{ auth()->user()->nama_user }}">
                                        </div>

                                        <div class="form-group" style="font-weight:700">
                                            <label for="subbidang">Bidang</label>
                                            <select class="form-control" id="id_subbidang" name="id_subbidang" readonly placeholder="tes" >
                                                <option value="{{ $subbidang->id }}" selected>{{ $subbidang->nama_subbidang }}</option>
                                            </select>
                                        </div>

                                        <div class="form-group" style="font-weight:700">
                                            <label for="subbidang">Sub Bidang</label>
                                            <select class="form-control" id="id_subbidang" name="id_subbidang" readonly placeholder="tes" >
                                                <option value="{{ $subbidang->id }}" selected>{{ $subbidang->nama_subbidang }}</option>
                                            </select>
                                        </div>

                                        <div class="form-group" style="font-weight:700">
                                            <label for="formGroupExampleInput">Kegiatan</label>
                                            <input type="text" class="form-control" id="nama_kegiatan" name="nama_kegiatan" placeholder="">
                                            <h6 class="font-italic mt-2">Isikan kegiatan yang sudah berjalan  </h6>
                                            <h6 class="font-italic">Contoh : Pembelian alat tulis</h6>
                                        </div>

                                        <div class="form-group" style="font-weight:700">
                                            <label for="exampleFormControlTextarea1">Deskripsi Kegiatan</label>
                                            <textarea class="form-control" id="deskripsi_kegiatan" name="deskripsi_kegiatan" rows="3"></textarea>
                                            <h6 class="font-italic mt-2">Isikan rencana kegiatan secara detail</h6>
                                            <h6 class="font-italic">Contoh : Pembelian alat tulis menghabiskan anggaran sebesar Rp.5.000.000  </h6>
                                        </div>

                                        <div class="form-group" style="font-weight:700">
                                            <label for="formGroupExampleInput">Volume</label>
                                            <input type="number" class="form-control" id="volume" name="volume" placeholder="">
                                            <h6 class="font-italic mt-2">Isikan volume yang sesuai dengan kegiatan</h6>
                                            <h6 class="font-italic">Contoh : 30</h6>
                                        </div>

                                        {{-- Satuan --}}
                                        <div class="form-group" style="font-weight:700">
                                            <label for="formGroupExampleInput">Satuan</label>
                                            <input type="text" class="form-control" id="satuan" name="satuan" placeholder="">
                                            <h6 class="font-italic mt-2">Isikan sesuai nama satuan</h6>
                                            <h6 class="font-italic">Contoh : Mobil</h6>
                                        </div>

                                        <div class="form-group" style="font-weight:700">
                                            <label for="inputState">Jumlah Penerima Manfaat</label>
                                            <input type="number" class="form-control" id="jumlah_penerima_manfaat" name="jumlah_penerima_manfaat" placeholder="">
                                            <h6 class="font-italic mt-2">Isikan jumlah penerima manfaat</h6>
                                            <h6 class="font-italic">Contoh : 30</h6>
                                        </div>

                                        <div class="form-group" style="font-weight:700">
                                            <label for="exampleFormControlSelect1">Jenis DAK</label>
                                            <select class="form-control" id="id_dak" name="id_dak" placeholder="x">
                                                <option value=""readonly>-------------------Pilih DAK------------------------</option>
                                                @foreach($dak as $v)
                                                    <option value="{{ $v->id }}">{{ $v->nama_dak }}</option>
                                                @endforeach
                                            </select>
                                            <h6 class="font-italic mt-2">Isikan jenis DAK sesuai dengan kegiatan </h6>
                                            <h6 class="font-italic">Contoh : DAK Fisik/Non Fisik  </h6>
                                        </div>

                                        <div class="form-group" style="font-weight:700">
                                            <label for="exampleFormControlSelect1">Periode</label>
                                            <select class="form-control" id="id_batch" name="id_batch" readonly name="batch">
                                                @foreach($batch as $item)
                                                    <option value="{{ $item->id }}" selected>Q{{ $item->triwulan_batch }} {{ $item->tahun_batch }}</option>
                                                @endforeach
                                            </select>
                                            <h6 class="font-italic mt-2">Isi sesuai dengan periode saat ini</h6>
                                            <h6 class="font-italic">Contoh : Q1 2022 (Triwulan pertama 2022) </h6>
                                        </div>

                                        <div class="form-group">
                                            <label for="formGroupExampleInput" style="font-weight:700">Pagu Diterima</label>
                                            <input type="text" class="form-control" id="pagu_diterima" name="pagu_diterima" placeholder="Rp.">
                                            <h6 class="font-italic mt-2">Isikan besaran pagu sesuai perencanaan kegiatan</h6>
                                            <h6 class="font-italic">Contoh :Rp. 6000000 (isikan tanpa titik)</h6>
                                        </div>

                                        <div class="form-group" style="font-weight:700">
                                            <label for="formGroupExampleInput">Pagu Dibelanjakan</label>
                                            <input type="text" class="form-control" id="pagu_dibelanjakan" name="pagu_dibelanjakan" placeholder="Rp.">
                                            <h6 class="font-italic mt-2">Isikan besaran pagu sesuai nominal yang dibelanjakan </h6>
                                            <h6 class="font-italic">Contoh :Rp. 3200000 (isikan tanpa titik)</h6>
                                        </div>

                                        <div class="form-group" style="font-weight:700">
                                            <label for="exampleFormControlSelect1">(Opsional) Metode Pembayaran</label>
                                            <select class="form-control" id="metode_pembayaran" name="metode_pembayaran" >
                                                    <option value="Cash" selected >Cash</option>
                                                    <option value="Kredit">Kredit</option>
                                            </select>
                                            <h6 class="font-italic mt-2">Isikan sesuai metode pembayaran yang digunakan</h6>
                                        </div>

                                        <div class="form-group" style="font-weight:700">
                                            <label for="formGroupExampleInput">(Opsional) Kodefikasi/Keterangan/Permasalahan</label>
                                            <textarea class="form-control" id="keterangan" name="keterangan" rows="3"></textarea>
                                            <h6 class="font-italic mt-2">Isikan sesuai keterangan atau permasalahan terkait</h6>
                                        </div>

                                        <div class="btn-toolbar text-center well">
                                                <input type="submit" class="btn btn-primary" value="Submit">
                                        </div>


                                </div>


                            </div>
                        </form>
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
