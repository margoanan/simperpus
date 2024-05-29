<div class="container">
    <div class="card">
        <div class="card-header text-center">
            <h4>Tambah Buku Baru</h4>
        </div>
        <div class="card-body">
            <a href="<?php echo base_url() . 'petugas/buku'; ?>" class='btn btn-sm btn-light btn-outline-dark pull-right'>
                <i class="fa fa-arrow-left"></i> Kembali
            </a>
            <br/><br/>
            <form method="post" action="<?php echo base_url() . 'petugas/buku_tambah_aksi'; ?>">
                <div class="form-group">
                    <label class="font-weight-bold" for="judul">Judul Buku</label>
                    <input type="text" class="form-control" name="judul" placeholder="Masukkan judul buku" required="required">
                </div>
                <div class="form-group">
                    <label class="font-weight-bold" for="penulis">Penulis Buku</label>
                    <input type="text" class="form-control" name="penulis" placeholder="Masukkan nama penulis" required="required">
                </div>
                <div class="form-group">
                    <label class="font-weight-bold" for="kategori">Kategori</label>
                    <select class="form-control" name="kategori" required="required">
                        <option value="">- Pilih Kategori</option>
                        <?php
                        // Jika Anda ingin memasukkan beberapa opsi kategori, letakkan mereka dalam array dan gunakan foreach
                        $kategori = array('Pemrograman', 'Jaringan Komputer', 'Sistem Operasi Komputer', 'Microsoft Office', 'Metode Komputer Khusus');
                        foreach ($kategori as $cat) {
                            echo '<option value="' . $cat . '">' . $cat . '</option>';
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label class="font-weight-bold" for="penerbit">Penerbit</label>
                    <input type="text" class="form-control" name="penerbit" placeholder="Masukkan penerbit buku" required="required">
                </div>
                <div class="form-group">
                    <label class="font-weight-bold" for="tahun">Tahun Terbit</label>
                    <select class="form-control" name="tahun" required="required">
                        <option value="">- Pilih tahun</option>
                        <?php
                        $currentYear = date('Y');
                        for ($tahun = $currentYear; $tahun >= 1990; $tahun--) {
                            echo '<option value="' . $tahun . '">' . $tahun . '</option>';
                        }
                        ?>
                    </select>
                </div>
                <input type="submit" class="btn btn-primary" value="Simpan">
            </form>
        </div>
    </div>
</div>
