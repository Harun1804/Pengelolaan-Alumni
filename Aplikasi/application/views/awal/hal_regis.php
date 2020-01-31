<div class="container">
  <div class="card card-register mx-auto mt-5">
    <div class="card-header">Biodata Diri</div>
    <div class="card-body">
      <form action="<?php echo site_url('welcome/proses_regis');?>" method="post">
        <input type="hidden" name="id" value="<?php echo $maxid;?>"/>
        <div class="form-group">
          <div class="form-row">
            <div class="col-md-4">
              <div class="form-label-group">
                <input type="text" name="gdepan" id="gdepan" class="form-control" placeholder="First name" autofocus="autofocus">
                <label for="gdepan">Gelar Depan</label>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-label-group">
                <input type="text" name="nama" id="nama" class="form-control" placeholder="First name" required="required" autofocus="autofocus">
                <label for="nama">Nama Lengkap</label>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-label-group">
                <input type="text" name="gbelakang" id="gbelakang" class="form-control" placeholder="Last name">
                <label for="gbelakang">Gelar Belakang</label>
              </div>
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="form-selection-group">
            <label>Jenis Kelamin</label>
            <select name="jk" class="form-control">
              <option selected="" disabled="">Pilih Jenis Kelamin</option>
              <option value="L">Laki - Laki</option>
              <option value="P">Perempuan</option>
            </select>
          </div>
        </div>
        <div class="form-group">
          <div class="form-label-group">
            <input type="text" name="no" id="no" class="form-control" placeholder="Email address" required="required">
            <label for="no">Nomber yang bisa dihubungi</label>
          </div>
        </div>
        <div class="form-group">
          <div class="form-selection-group">
            <label>Tahun Masuk</label>
            <select name="tmasuk" class="form-control">
              <option selected="" disabled="">Pilih Tahun Masuk</option>
              <?php foreach ($tmasuk as $tm) { ?>
                <option value="<?php echo $tm['id_masuk']; ?>"><?php echo $tm['tahun'];?></option>
              <?php } ?>
            </select>
          </div>
        </div>
        <div class="form-group">
          <div class="form-selection-group">
            <label>Status Pekerjaan</label>
            <select name="pekerjaan" class="form-control">
              <option selected="" disabled="">Pilih Pekerjaan</option>
              <?php foreach ($job as $j) { ?>
                <option value="<?php echo $j['id_pekerjaan'];?>"><?php echo $j['nama_pekerjaan'];?></option>
              <?php } ?>
            </select>
          </div>
        </div>
        <div class="form-group">
          <div class="form-label-group">
            <input type="text" name="instansi" id="instansi" class="form-control" placeholder="Email address" required>
            <label for="instansi">Instansi/PT</label>
          </div>
        </div>
        <div class="form-group">
          <div class="form-label-group">
            <input type="email" name="email" id="email" class="form-control" placeholder="Email address" required>
            <label for="email">Email</label>
          </div>
        </div>
        <div class="form-group">
          <div class="form-row">
            <div class="col-md-6">
              <div class="form-label-group">
                <input type="password" name="password" id="password" class="form-control" placeholder="First name" required="required" autofocus="autofocus">
                <label for="password">password</label>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-label-group">
                <input type="password" name="cpassword" id="cpassword" class="form-control" placeholder="Last name">
                <label for="cpassword">Konfirmasi Password</label>
              </div>
            </div>
          </div>
        </div>
        <button type="submit" name="regis" class="btn btn-primary btn-block">Registrasi</button>
      </form>
    </div>
  </div>
</div>
