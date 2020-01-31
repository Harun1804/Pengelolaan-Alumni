<div class="container">
  <div class="card card-register mx-auto mt-5">
    <div class="card-header">Intansi</div>
    <div class="card-body">
      <form action="<?php echo site_url('alumni/update_proses');?>" method="post">
        <?php foreach ($intansi as $b) { ?>
        <input type="hidden" name="id" value="<?php echo $b['id'];?>"/>
        <div class="form-group">
          <div class="form-label-group">
            <input type="text" name="intansi" id="intansi" class="form-control" placeholder="Email address" required="required" value="<?php echo $b['nama_instansi'];?>">
            <label for="intansi">Nama Intansi</label>
          </div>
        </div>
        <div class="form-group">
          <div class="form-label-group">
            <input type="text" name="jabatan" id="jabatan" class="form-control" placeholder="Email address" value="<?php echo $b['jabatan'];?>">
            <label for="jabatan">Jabatan*</label>
          </div>
        </div>
        <div class="form-group">
          <div class="form-label-group">
            <input type="text" name="fakultas" id="fakultas" class="form-control" placeholder="Email address" value="<?php echo $b['fakultas'];?>">
            <label for="fakultas">Fakultas</label>
          </div>
        </div>
        <div class="form-group">
          <div class="form-label-group">
            <input type="text" name="jurusan" id="jurusan" class="form-control" placeholder="Email address" value="<?php echo $b['jurusan'];?>">
            <label for="jurusan">Jurusan</label>
          </div>
        </div>
        <div class="form-group">
          <div class="form-selection-group">
            <label>Semester</label>
            <select name="semester" class="form-control">
              <option
              <?php if($b['semester']==null){
                echo '.<option>Pilih Tingkat Semester</option>.';
              }else{
                echo "selected";
              }
              ?>><?php echo $b['semester']?>
              </option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
            </select>
          </div>
        </div>
      <?php } ?>
      <label><sup>*Untuk yang sudah bekerja</sup></label><br />
        <button type="submit" name="update" class="btn btn-primary btn-block" value="intansi">Perbaharui</button>
      </form>
    </div>
  </div>
</div>
