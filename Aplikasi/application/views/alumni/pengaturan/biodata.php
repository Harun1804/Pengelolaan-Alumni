<div class="container">
  <div class="card card-register mx-auto mt-5">
    <div class="card-header">Biodata Diri</div>
    <div class="card-body">
      <form action="<?php echo site_url('alumni/update_proses');?>" method="post">
        <?php foreach ($bio as $b) { ?>
        <input type="hidden" name="id" value="<?php echo $b['id'];?>"/>
        <div class="form-group">
          <div class="form-row">
            <div class="col-md-4">
              <div class="form-label-group">
                <input type="text" name="gdepan" id="gdepan" class="form-control" placeholder="First name" autofocus="autofocus" value="<?php echo $b['dgelar'];?>">
                <label for="gdepan">Gelar Depan</label>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-label-group">
                <input type="text" name="nama" id="nama" class="form-control" placeholder="First name" required="required" autofocus="autofocus" value="<?php echo $b['nama'];?>">
                <label for="nama">Nama Lengkap</label>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-label-group">
                <input type="text" name="gbelakang" id="gbelakang" class="form-control" placeholder="Last name" value="<?php echo $b['bgelar'];?>">
                <label for="gbelakang">Gelar Belakang</label>
              </div>
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="form-selection-group">
            <label>Jenis Kelamin</label>
            <select name="jk" class="form-control">
              <option disabled="" selected>Pilih Jenis Kelamin</option>
              <option value="L" <?php if($b['jk'] == "L")echo "selected";?>>Laki - Laki</option>
              <option value="P" <?php if($b['jk'] == "P")echo "selected";?>>Perempuan</option>
            </select>
          </div>
        </div>
        <div class="form-group">
          <div class="form-label-group">
            <input type="text" name="no" id="no" class="form-control" placeholder="Email address" required="required" value="<?php echo $b['nomber'];?>">
            <label for="no">Nomber yang bisa dihubungi</label>
          </div>
        </div>
        <div class="form-group">
          <div class="form-label-group">
            <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Email address" value="<?php echo $b['alamat'];?>">
            <label for="alamat">Alamat</label>
          </div>
        </div>
        <div class="form-group">
          <div class="form-selection-group">
            <label>Status pekerjaan</label>
            <select name="pekerjaan" class="form-control">
              <option <?php if ($b['id_pekerjaan'] == null) {
                echo '.<option>Pilih Pekerjaan</option>.';
              }else{
                echo "selected";
              }?>><?php echo $b['nama_pekerjaan'];?></option>
              <?php } ?>
              <?php foreach ($job as $j) { ?>
                <option value="<?php echo $j['id_pekerjaan'];?>"><?php echo $j['nama_pekerjaan'];?></option>
              <?php } ?>
            </select>
          </div>
        </div>
        <!-- <div class="form-group">
          <div class="form-selection-group">
            <label>Tahun Masuk</label>
            <select name="tmasuk" class="form-control">
              <option selected="" disabled="">Pilih Tahun Masuk</option>
              <?php foreach ($tmasuk as $tm) { ?>
                <option value="<?php echo $tm['id_masuk'];?>"><?php echo $tm['tahun'];?></option>
              <?php } ?>
            </select>
          </div>
        </div> -->
        <button type="submit" name="update" class="btn btn-primary btn-block" value="biodata">Perbaharui</button>
      </form>
    </div>
  </div>
</div>
