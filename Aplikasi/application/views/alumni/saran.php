<div class="container">
  <div class="card card-register mx-auto mt-5">
    <div class="card-header">Saran</div>
    <div class="card-body">
      <form action="<?php echo site_url('alumni/psaran');?>" method="post">
        <div class="form-group">
          <div class="form-selection-group">
            <label>Kategori Saran</label>
            <select name="ksaran" class="form-control">
              <option selected="" disabled="">Silahkan Pilih Kategori</option>
              <?php foreach ($saran as $s) { ?>
                <option value="<?php echo $s['id_masukan'];?>"><?php echo $s['nama_kategori'];?></option>
              <?php } ?>
            </select>
          </div>
        </div>
        <div class="form-group">
          <div class="form-label-group">
            <input type="text" name="isaran" id="isaran" class="form-control" placeholder="Email address">
            <label for="isaran">Masukan</label>
        </div>
        <br />
        <button name="submit" type="submit" class="btn btn-primary btn-block">Kirim</button>
      </form>
    </div>
  </div>
</div>
</div>
