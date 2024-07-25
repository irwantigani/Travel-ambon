<style>
    .three-lines {
        display: -webkit-box; /* Gunakan box model fleksibel Webkit */
        -webkit-line-clamp: 6; /* Tentukan jumlah maksimal baris */
        -webkit-box-orient: vertical; /* Orientasi box secara vertikal */
        overflow: hidden; /* Sembunyikan teks yang melampaui area elemen */
        text-overflow: ellipsis; /* Tambahkan elipsis (...) pada teks yang terpotong */
    }
</style>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Tables</title>

    <!-- Custom fonts for this template -->
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('assets/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
</head>

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
                        <h1 class="h3 mb-0 text-gray-800">@yield('title')</h1>
                    </div>
                    <div class="container">
                        <h1 class="my-4">Galeri Wisata</h1>

                        @if(session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif

                        <a href="{{ route('files.create') }}" class="btn btn-primary mb-3">Upload New File</a>

                        <div class="row file-list">
                            @foreach($files as $file)
                                <div class="col-md-3 file-item">
                                <a href="{{ Storage::url($file->path) }}" target="_blank">
                                        <img src="{{ Storage::url($file->path) }}" alt="{{ $file->name }}" class="img-thumbnail">
                                    </a>
                                    <h5 class="card-title">{{ $file->title }}</h5>
                                    <p class="card-title three-lines">{{ $file->deskripsi }}</p>
                                
                                    <form action="{{ route('files.destroy', $file->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <a class="btn btn-small btn-success" href="{{ route('files.edit', $file->id) }}">Edit</a>
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </div>
                            @endforeach
                        </div>
                    </div>
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

    <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('assets/js/sb-admin-2.min.js') }}"></script>
    <script src="{{ asset('js/demo/datatables-demo.js') }}"></script>
</body>

</html>
