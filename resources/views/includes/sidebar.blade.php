<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
            <i class="fas fa-umbrella-beach"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Pantai</div>
    </a>
    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <!-- Nav Item - Master Kategori Wisata -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('kategori-wisata.index') }}">
            <i class="fas fa-fw fa-folder-open"></i>
            <span>Kategori Wisata</span>
        </a>
    </li>

    <!-- Nav Item - Galeri -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('files.index') }}">
            <i class="fas fa-fw fa-images"></i>
            <span>Galeri</span>
        </a>
    </li>

    <!-- Nav Item - Berita -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('berita.index') }}">
            <i class="fas fa-fw fa-newspaper"></i>
            <span>Berita</span>
        </a>
    </li>

    <!-- Nav Item - Peta -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('peta.index') }}">
            <i class="fas fa-map-marked-alt"></i>
            <span>Peta</span>
        </a>
    </li>

</ul>
<!-- End of Sidebar -->
