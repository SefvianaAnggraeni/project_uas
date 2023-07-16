<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/admin">
        <div class="sidebar-brand-text mx-3">MyJAdmin</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ (request()->is('admin')) ? 'active' : ''}}">
        <a class="nav-link" href="/admin">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <div class="sidebar-heading">
        Item
    </div>

    <li class="nav-item {{ (request()->is('admin/produk*')) ? 'active' : ''}}">
        <a class="nav-link" href="/admin/produk">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Produk</span></a>
    </li>

    <li class="nav-item {{ (request()->is('admin/kategoriproduk*')) ? 'active' : ''}}">
        <a class="nav-link" href="/admin/kategoriproduk">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Kategori Produk</span></a>
    </li>

    <li class="nav-item {{ (request()->is('admin/pesanan*')) ? 'active' : ''}}">
        <a class="nav-link" href="/admin/pesanan">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Pesanan</span></a>
    </li>
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
<!-- End of Sidebar -->