<div class="container">
    <div class="jumbotron text-center">
        <div class="col-sm-8 mx-auto">
            <h1>SIMPERPUS UNIMMA</h1>
            <p>Selamat datang di Sistem Informasi Perpustakaan Universitas Muhammadiyah Magelang.</p>
            <p><b>SIMPERPUS ini terhubung dengan Sistem Informasi Akademik (SIAK) menggunakan web service untuk mengambil data anggota, yaitu nama dan NPM mahasiswa.</b></p>
            <p>Anda telah login sebagai <b><?php echo $this->session->userdata('nama'); ?></b> (Petugas).</p>
        </div>
    </div>
    <div class="card">
        <div class="card-header">Dashboard</div>
        <div class="card-body">
            <p>Halo, <?php echo $this->session->userdata('nama'); ?>!</p>
            <p>Selamat datang di dashboard SIMPERPUS UNIMMA. Di sini Anda dapat mengakses berbagai fitur dan fungsi untuk mengelola perpustakaan.</p>
            <!-- Tambahkan informasi tambahan sesuai dengan kebutuhan Anda -->
        </div>
    </div>
</div>
