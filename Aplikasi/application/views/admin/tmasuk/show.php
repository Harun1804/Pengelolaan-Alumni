<div class="card mb-3">
  <div class="card-header"><i class="fas fa-table"></i>Tahun Masuk</div>
    <div class="card-body">
      <form action="<?= site_url('admin/proses_ttahun');?>" method="post">
        <input type="hidden" name="id" value="<?= $tbaru;?>" class="form-control"/>
        <button class="btn btn-primary">Tambah Masuk</button>
      </form>
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>No</th>
              <!-- <th>Aksi</th> -->
              <th>ID Tahun Masuk</th>
              <th>Tahun</th>
            </tr>
          </thead>
          <tbody>
            <?php
              $no = 1;
              foreach ($tmasuk as $j ) { ?>
            <tr>
              <td><?= $no++;?></td>
              <!-- <td>
                <a href="<?= site_url('admin/edit_form_tmasuk/'.$j['id_masuk']);?>"><button class="btn btn-primary"><i class="fa fa-edit"></i></button></a>
                <a href="<?= site_url('admin/hapus_tmasuk/'.$j['id_masuk']);?>"><button class="btn btn-primary"><i class="fa fa fa-trash"></i></button></a>
              </td> -->
              <td><?= $j['id_masuk'];?></td>
              <td><?= $j['tahun'];?></td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
