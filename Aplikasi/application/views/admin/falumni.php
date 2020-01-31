<script type="text/javascript">
function showMasuk(){
  var xhttp;
  xhttp = new XMLHttpRequest();
  var id_masuk = document.getElementById("masuk");
  xhttp.onreadystatechange = function(){
    if (this.readyState == 4 && this.status == 200){
      document.getElementById("isitabel").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", document.getElementById("ajaxurlmasuk").value+id_masuk.options[id_masuk.selectedIndex].value, true);
  xhttp.send();
}
</script>
<input type="hidden" id="ajaxurlmasuk" value="<?php echo site_url('admin/showmasuk/'); ?>">
<div class="card mb-3">
  <div class="card-header"><i class="fas fa-table"></i>Data Alumni</div>
    <div class="card-body">
      <form action="<?= site_url('admin/falumni');?>" method="post">
        <div class="form-group">
          <div class="form-selection-group">
            <label>Angkatan Masuk</label>
            <select name="masukan" class="form-control" onchange="showMasuk()" id="masuk">
              <option selected="" disabled="">Silahkan Pilih Tahun Angkatan</option>
              <?php foreach ($masuk as $s) { ?>
                <option value="<?php echo $s['id_masuk'];?>"><?php echo $s['tahun'];?></option>
              <?php } ?>
            </select>
          </div>
        </div>
      </form>
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>No</th>
              <th>Gelar Depan</th>
              <th>Nama Lengkap</th>
              <th>Gelar Belakang</th>
              <th>Jenis Kelamin</th>
              <th>Nomber</th>
              <th>Alamat</th>
              <th>Nama Pekerjaan</th>
              <th>Jabatan</th>
              <th>Intansi</th>
              <th>Fakultas</th>
              <th>Jurusan</th>
              <th>Semester</th>
              <th>Line</th>
              <th>Facebook</th>
              <th>Intagram</th>
              <th>Twitter</th>
            </tr>
          </thead>
          <tbody id="isitabel">
          </tbody>
        </table>
      </div>
    </div>
  </div>
