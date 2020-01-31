<div class="container">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header">Kategori Masukan</div>
        <div class="card-body">
          <form action="<?php echo site_url('admin/proses_input_ktgr');?>" method="post">
            <div class="form-group">
              <div class="form-label-group">
                <input type="text" id="idm" name="id_masukan" class="form-control" value="<?= $idm;?>" placeholder="Silahkan Masukan Email Kamu"  required="" readonly>
                <label for="idm">ID</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="text" id="nmasukan" name="nmasukan" class="form-control" placeholder="Password" required="required">
                <label for="nmasukan">Nama Kategori</label>
              </div>
            </div>
            <button type="submit" name="login" class="btn btn-primary">Tambah</button>
          </form>
        </div>
      </div>
    </div>
