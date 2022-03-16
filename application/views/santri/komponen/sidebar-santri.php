<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4 ">
    <!-- Brand Logo -->
    <a href="<?= base_url()?>" class="brand-link" target="_blank">
        <img
            src="<?= base_url()?>assets/backend/dist/img/AdminLTELogo.png"
            alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">PPM Nurba</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img
                    src="<?= base_url()?>assets/backend/dist/img/user2-160x160.jpg"
                    class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Alexander Pierce</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input
                    class="form-control form-control-sidebar"
                    type="search"
                    placeholder="Search"
                    aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul
                class="nav nav-pills nav-sidebar flex-column"
                data-widget="treeview"
                role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class with font-awesome or any
                other icon font library -->
                <li class="nav-item">
                    <a href="<?= base_url()?>santri" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Man Artikel
                            <i class="fas fa-angle-left right"></i>
                            <span class="badge badge-primary right"><?= $this->db->count_all('tb_berita')?></span>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url()?>santri/berita/tambah" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Tambah Artikel</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url()?>santri/berita" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Data Artikel</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url()?>santri/berita/kategori" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Kategori</p>
                            </a>
                        </li>
                    </ul>
                </li>
								<li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Pendaftaran
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url()?>santri/pendaftaran/index" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Daftar Menjadi Santri</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url()?>santri/pendaftaran/berkas" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Berkas Pendaftaran</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url()?>santri/profile" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Profile
                        </p>
                    </a>
                </li>
            </li>
            <li class="nav-item">
                <a href="<?= base_url()?>dashboard/logout" class="nav-link">
                    <i class="nav-icon fas fa-sign-out-alt"></i>
                    <p>
                        Logout

                    </p>
                </a>
            </li>
        </ul>
    </li>
</ul>
</nav>
<!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
</aside>
