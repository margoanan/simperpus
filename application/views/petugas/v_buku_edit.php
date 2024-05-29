<div class="container">
    <div class="card">
        <div class="card-header text-center">
            <h4>Edit Buku</h4>
        </div>
        <div class="card-body">
            <a href="<?php echo base_url().'petugas/buku' ?>" class="btn btn-sm btn-light btn-outline-dark pull-right">
                <i class="fa fa-arrow-left"></i> Kembali
            </a>
            <br/><br/>
            <?php foreach ($buku as $b) { ?>
            <form method="post" action="<?php echo base_url().'petugas/buku_update'; ?>">
                <div class="form-group">
                    <label class="font-weight-bold" for="judul">Judul Buku</label>
                    <input type="hidden" name="id" value="<?php echo $b->iddata_buku; ?>">
                    <input type="text" class="form-control" name="judul" placeholder="Masukkan judul buku" required="required" value="<?php echo $b->data_buku_judul; ?>">
                </div>
                <div class="form-group">
                    <label class="font-weight-bold" for="penulis">Penulis Buku</label>
                    <input type="text" class="form-control" name="penulis" placeholder="Masukkan nama penulis" required="required" value="<?php echo $b->data_buku_penulis; ?>">
                </div>
                <div class="form-group">
                    <label class="font-weight-bold" for="kategori">Kategori Buku</label>
                    <select class="form-control" name="kategori" required="required">
                        <option value="">- Pilih kategori</option>
                        <option <?php if ($b->data_buku_kategori == "Pemrograman") { echo "selected='selected'"; } ?> value="Pemrograman">Pemrograman</option>
                        <option <?php if ($b->data_buku_kategori == "Pemrograman komputer, program & data") { echo "selected='selected'"; } ?> value="Pemrograman komputer, program & data">Pemrograman komputer, program & data</option>
                        <option <?php if ($b->data_buku_kategori == "Jaringan Komputer") { echo "selected='selected'"; } ?> value="Jaringan Komputer">Jaringan Komputer</option>
                        <option <?php if ($b->data_buku_kategori == "Sistem Operasi Komputer") { echo "selected='selected'"; } ?> value="Sistem Operasi Komputer">Sistem Operasi Komputer</option>
                        <option <?php if ($b->data_buku_kategori == "Microsoft Office") { echo "selected='selected'"; } ?> value="Microsoft Office">Microsoft Office</option>
                        <option <?php if ($b->data_buku_kategori == "Metode Komputer Khusus") { echo "selected='selected'"; } ?> value="Metode Komputer Khusus">Metode Komputer Khusus</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="font-weight-bold" for="penerbit">Penerbit Buku</label>
                    <input type="text" class="form-control" name="penerbit" placeholder="Masukkan penerbit buku" required="required" value="<?php echo $b->data_buku_penerbit; ?>">
                </div>
                <div class="form-group">
                    <label class="font-weight-bold" for="tahun">Tahun Terbit</label>
                    <select class="form-control" name="tahun" required="required">
                        <option value="">- Pilih tahun</option>
                        <?php
                        $currentYear = date('Y');
                        for ($tahun = $currentYear; $tahun >= 1990; $tahun--) {
                            if ($tahun == $b->data_buku_tahun_terbit) {
                                echo "<option value=\"$tahun\" selected=\"selected\">$tahun</option>";
                            } else {
                                echo "<option value=\"$tahun\">$tahun</option>";
                            }
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label class="font-weight-bold" for="status">Status Buku</label>
                    <select class="form-control" name="status" required="required">
                        <option value="">- Pilih status</option>
                        <option <?php if ($b->data_buku_status == "1") { echo "selected='selected'"; } ?> value="1">Tersedia</option>
                        <option <?php if ($b->data_buku_status == "2") { echo "selected='selected'"; } ?> value="2">Sedang Dipinjam</option>
                    </select>
                </div>
                <input type="submit" class="btn btn-primary" value="Simpan">
            </form>
            <?php } ?>
        </div>
    </div>
</div>
