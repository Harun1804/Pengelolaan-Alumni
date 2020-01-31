<script type="text/javascript">
function showAngkatan(){
  var xhttp;
  xhttp = new XMLHttpRequest();
  var id_masuk = document.getElementById("bangkatan");
  xhttp.onreadystatechange = function(){
    if (this.readyState == 4 && this.status == 200){
      document.getElementById("isitabel").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", document.getElementById("ajaxurlangkatan").value+id_masuk.options[id_masuk.selectedIndex].value, true);
  xhttp.send();
}
</script>
<input type="hidden" id="ajaxurlangkatan" value="<?php echo site_url('alumni/showangkatandetail/'); ?>">
<div class="card mb-3">
  <div class="card-header"><i class="fas fa-table"></i>Ini adalah teman berbeda angkatan</div>
    <div class="card-body">
      <form action="<?php site_url('alumni/showangkatan');?>" method="post">
        <div class="form-group">
          <div class="form-selection-group">
            <label>Angkatan</label>
            <select name="bangkatan" class="form-control" onchange="showAngkatan()" id="bangkatan">
              <option selected="" disabled="">Silahkan Pilih Tahun Angkatan</option>
              <?php foreach ($masuk as $s) { ?>
                <option value="<?php echo $s['id_masuk'];?>"><?php echo $s['tahun'];?></option>
              <?php } ?>
            </select>
          </div>
        </div>
      </form>
      <div class="table-responsive">
        <table class="table table-bordered" id="bedaang"  width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Jenis Kelamin</th>
            </tr>
          </thead>
          <tbody id="isitabel">
          </tbody>
        </table>
      </div>
    </div>
  </div>
