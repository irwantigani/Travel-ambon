<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Edit Berita - SB Admin 2</title> <!-- Judul halaman -->

    <!-- Custom fonts for this template -->
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('assets/css/sb-admin-2.min.css') }}" rel="stylesheet">
</head>
<style>
        .file-list {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .file-item {
            flex-basis: calc(25% - 20px);
            margin-bottom: 10px;
        }

        .file-item .card {
            height: 50%;
        }
    </style>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        @include('includes.sidebar')

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                @include('includes.topbar')

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Edit Berita</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Content Column -->
                        <div class="col-lg-8">

                            <!-- Form untuk edit berita -->
                            <form action="{{ route('berita.update', $berita->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <!-- Form Group untuk Judul -->
                                <div class="form-group">
                                    <label for="judul">Judul</label>
                                    <input type="text" class="form-control" id="judul" name="judul" value="{{ $berita->judul }}" required>
                                </div>

                                <!-- Form Group untuk Konten -->
                                <div class="form-group">
                                    <label for="konten">Konten</label>
                                    <textarea class="form-control" id="konten" name="konten" rows="3" required>{{ $berita->konten }}</textarea>
                                </div>

                                <!-- Form Group untuk Gambar -->
                                <div class="form-group">
                                    @if($berita->gambar)
                                        <a href="{{ Storage::url($berita->gambar) }}" target="_blank">
                                            <img src="{{ Storage::url($berita->gambar) }}" alt="{{ $berita->judul }}" class="img-thumbnail">
                                        </a>
                                    @endif
                                    <input type="file" class="form-control-file" id="gambar" name="gambar">
                                </div>

                                <!-- Tombol untuk Submit Form -->
                                <button type="submit" class="btn btn-primary">Update</button>
                            </form>

                        </div>

                    </div>
                    <!-- /.row -->

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="text-center">
                        <span>Copyright &copy; IrwantiGani Website 2024</span>
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

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('assets/js/sb-admin-2.min.js') }}"></script>

</body>

</html>
