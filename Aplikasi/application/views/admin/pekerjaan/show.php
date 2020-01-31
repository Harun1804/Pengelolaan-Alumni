<div class="card mb-3">
  <div class="card-header"><i class="fas fa-table"></i>Jenis Pekerjaan</div>
    <div class="card-body">
      <a href="<?= site_url('admin/tpekerjaan');?>"><button class="btn btn-primary">Tambah Jenis Pekerjaan</button></a>
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>No</th>
              <th>Aksi</th>
              <th>ID Pekerjaan</th>
              <th>Nama Pekerjaan</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $no = 1;
              foreach ($pekerjaan as $j ) { ?>
            <tr>
              <td><?= $no++;?></td>
              <td>
                <a href="<?= site_url('admin/edit_form_pkrn/'.$j['id_pekerjaan']);?>"><button class="btn btn-primary"><i class="fa fa-edit"></i></button></a>
                <!-- <a href="<?= site_url('admin/hapus_pkrn/'.$j['id_pekerjaan']);?>"><button class="btn btn-primary"><i class="fa fa fa-trash"></i></button></a> -->
              </td>
              <td><?= $j['id_pekerjaan'];?></td>
              <td><?= $j['nama_pekerjaan'];?></td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
