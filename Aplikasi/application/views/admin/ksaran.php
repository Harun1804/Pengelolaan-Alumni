<script type="text/javascript">
function showMasukan(){
  var xhttp;
  xhttp = new XMLHttpRequest();
  var id_masuk = document.getElementById("masukan");
  xhttp.onreadystatechange = function(){
    if (this.readyState == 4 && this.status == 200){
      document.getElementById("isitabel").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", document.getElementById("ajaxurlmasukan").value+id_masuk.options[id_masuk.selectedIndex].value, true);
  xhttp.send();
}
</script>
<input type="hidden" id="ajaxurlmasukan" value="<?php echo site_url('admin/showsaran/'); ?>">
<div class="card mb-3">
  <div class="card-header"><i class="fas fa-table"></i>Kotak Saran</div>
    <div class="card-body">
      <form action="<?= site_url('admin/kotak_saran');?>" method="post">
        <div class="form-group">
          <div class="form-selection-group">
            <label>Kategori Masukan</label>
            <select name="masukan" class="form-control" onchange="showMasukan()" id="masukan">
              <option selected="" disabled="">Silahkan Pilih Kategori</option>
              <?php foreach ($ksaran as $s) { ?>
                <option value="<?php echo $s['id_masukan'];?>"><?php echo $s['nama_kategori'];?></option>
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
              <th>Nama Pengirim</th>
              <th>Masukan</th>
            </tr>
          </thead>
          <tbody id="isitabel">
          </tbody>
        </table>
      </div>
    </div>
  </div>
