<div class="container">
    <div class="card">
        <div class="card-header text-center">
            <h4>Data Petugas SIMPERPUS</h4>
        </div>
        <div class="card-body">
            <a href="<?php echo base_url().'admin/petugas_tambah' ?>" class="btn btn-sm btn-success pull-right">
                <i class="fa fa-plus"></i> Petugas Baru
            </a>
            <br/><br/>
            <table class="table table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th width="18">No</th>
                        <th>NIK</th>
                        <th>Nama</th>
                        <th>Username</th>
                        <th width="16%">Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($petugas as $p) {
                    ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $p->NIK; ?></td>
                        <td><?php echo $p->M_biodata_pegawai_nama; ?></td>
                        <td><?php echo $p->username; ?></td>
                        <td>
                            <a href="<?php echo base_url().'admin/petugas_edit/'.$p->id; ?>" class="btn btn-sm btn-warning">
                                <i class="fa fa-wrench"></i> Edit
                            </a>
                            <a href="<?php echo base_url().'admin/petugas_hapus/'.$p->id; ?>" class="btn btn-sm btn-danger">
                                <i class="fa fa-trash"></i> Hapus
                            </a>
                        </td>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
