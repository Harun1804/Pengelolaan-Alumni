<div class="card mb-3">
  <div class="card-header"><i class="fas fa-table"></i>Kategori Masukan</div>
    <div class="card-body">
      <a href="<?= site_url('admin/formmsk');?>"><button class="btn btn-primary">Tambah Kategori</button></a>
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>No</th>
              <th>Aksi</th>
              <th>Tahun Masuk</th>
              <th>Total</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $no = 1;
              foreach ($masukan as $j ) { ?>
            <tr>
              <td><?= $no++;?></td>
              <td>
                <a href="<?= site_url('admin/edit_form_ktgr/'.$j['id_masukan']);?>"><button class="btn btn-primary"><i class="fa fa-edit"></i></button></a>
                <!-- <a href="<?= site_url('admin/hapus_ktgr/'.$j['id_masukan']);?>"><button class="btn btn-primary"><i class="fa fa fa-trash"></i></button></a> -->
              </td>
              <td><?= $j['id_masukan'];?></td>
              <td><?= $j['nama_kategori'];?></td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
