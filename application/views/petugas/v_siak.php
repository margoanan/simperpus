<div class="container">
    <div class="card">
        <div class="card-header text-center">
            <h4>Data Mahasiswa dari Server SIAK</h4>
        </div>
        <div class="card-body">
            <a href="<?php echo base_url('petugas/api_input'); ?>" class="btn btn-sm btn-success">
        <i class="fa fa-plus"></i> Simpan ke PERPUS
            </a>
            <br/><br/>
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover table-datatable">
                    <thead>
                        <tr>
                            <th width="18">No</th>
                            <th>NPM</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Pekerjaan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($databiodata as $biodata) {
                        ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $biodata->npm; ?></td>
                            <td><?php echo $biodata->nama; ?></td>
                            <td><?php echo $biodata->alamat; ?></td>
                            <td><?php echo $biodata->pekerjaan; ?></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
