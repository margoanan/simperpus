<!DOCTYPE html>
<html>
<head>
    <title>Petugas Sistem Informasi Perpustakaan</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.css'; ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/DataTables/datatables.css'; ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/css/awesome-font/awesome/css/font-awesome.css'); ?>">
    <!-- <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css"> -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/fontawesome.min.css" integrity="sha512-siarrzI1u3pCqFG2LEzi87McrBmq6Tp7juVsdmGY1Dr8Saw+ZBAzDzrGwX3vgxX1NkioYNCFOVC0GpDPss10zQ==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
    <script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.js'; ?>"></script>
    <script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js'; ?>"></script>
    <script type="text/javascript" src="<?php echo base_url().'assets/DataTables/datatables.js'; ?>"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?= base_url('petugas'); ?>">SIMPERPUS</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('petugas'); ?>">
                        <i class="fa fa-home"></i> Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('petugas/ambilsiak'); ?>">
                        <i class="fa fa-users"></i> SIAK
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('petugas/anggota'); ?>">
                        <i class="fa fa-users"></i> Anggota
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('petugas/buku'); ?>">
                        <i class="fa fa-book"></i> Buku
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('petugas/petugas'); ?>">
                        <i class="fa fa-user"></i> Petugas
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('petugas/peminjaman'); ?>">
                        <i class="fa fa-book"></i> Peminjaman
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('petugas/ganti_password'); ?>" class="nav-link">
                        <i class="fa fa-lock"></i> Ganti Password
                    </a>
                </li>
            </ul>
            <span class="navbar-text mr-3 text-center">Halo, <?= $this->session->userdata('username'); ?> [Petugas]</span>
            <a href="<?= base_url('petugas/logout'); ?>" class="btn btn-outline-light ml-1">
                <i class="fa fa-power-off"></i> KELUAR
            </a>
        </div>
    </div>
</nav><br/><br/>

</body>
</html>
