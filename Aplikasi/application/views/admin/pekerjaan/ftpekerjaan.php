<div class="container">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header">Jenis Pekerjaan</div>
        <div class="card-body">
          <form action="<?php echo site_url('admin/proses_input_pkrn');?>" method="post">
            <div class="form-group">
              <div class="form-label-group">
                <input type="text" id="idp" name="id_pekerjaan" class="form-control" placeholder="Silahkan Masukan Email Kamu"  required="">
                <label for="idp">ID</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="text" id="jpekerjaan" name="jpekerjaan" class="form-control" placeholder="Password" required="required">
                <label for="jpekerjaan">Jenis Pekerjaan</label>
              </div>
            </div>
            <button type="submit" name="login" class="btn btn-primary">Tambah</button>
          </form>
        </div>
      </div>
    </div>
