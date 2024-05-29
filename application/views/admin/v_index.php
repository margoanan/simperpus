<div class="container">
    <div class="jumbotron text-center">
        <div class="col-sm-8 mx-auto">
            <h1>SIMPERPUS UNIMMA</h1>
            <p>Selamat datang di Sistem Informasi Perpustakaan Universitas Muhammadiyah Magelang</p>
            <p><b>SIMPERPUS ini terhubung dengan Sistem Informasi Akademik (SIAK) menggunakan web service untuk mengambil data anggota yaitu nama dan NPM mahasiswa.</b></p>
            <p>Anda telah login sebagai <b><?php echo $this->session->userdata('username'); ?></b> [admin].</p>
        </div>
    </div>
    <div class="card">
        <div class="card-header">Dashboard</div>
        <div class="card-body">Halo</div>
    </div>
    <div class="row">
    <div class="col-md-3">
        <div class="card bg-danger text-white">
            <div class="card-body">
                <h1><?php echo $this->M_data->get_data('m_biodata_mhs')->num_rows(); ?></h1>
                <div class="pull-right"><i class="fa fa-users"></i></div>
                Jumlah Anggota
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card bg-primary text-white">
            <div class="card-body">
                <h1><?php echo $this->M_data->get_data('m_data_buku')->num_rows(); ?></h1>
                <div class="pull-right"><i class="fa fa-book"></i></div>
                Jumlah Buku
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card bg-warning text-white">
            <div class="card-body">
                <h1><?php echo $this->M_data->get_data('m_biodata_pegawai')->num_rows(); ?></h1>
                <div class="pull-right"><i class="fa fa-user"></i></div>
                Jumlah Petugas
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card bg-primary text-white">
            <div class="card-body">
                <h1><?php echo $this->M_data->get_data('log_peminjaman')->num_rows(); ?></h1>
                <div class="pull-right"><i class="fa fa-book"></i></div>
                Jumlah Peminjaman
            </div>
        </div>
    </div>
</div>
</div>
