<div class="container">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header">Kategori Masukan</div>
        <div class="card-body">
          <?php foreach ($idm as $d) { ?>
          <form action="<?php echo site_url('admin/proses_edit_ktgr/'.$d['id_masukan']);?>" method="post">
            <div class="form-group">
              <div class="form-label-group">
                <input type="text" id="idm" name="id_masukan" class="form-control" value="<?= $d['id_masukan'];?>" placeholder="Silahkan Masukan Email Kamu"  required="" readonly>
                <label for="idm">ID</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="text" id="nmasukan" name="nmasukan" value="<?= $d['nama_kategori'];?>" class="form-control" placeholder="Password" required="required">
                <label for="nmasukan">Nama Kategori</label>
              </div>
            </div>
            <button type="submit" name="login" class="btn btn-primary">Edit</button>
          </form>
          <?php } ?>
        </div>
      </div>
    </div>
