<script type="text/javascript">
function showprofile(isi){
  var xhttp;
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function(){
    if (this.readyState == 4 && this.status == 200){
      document.getElementById("isitabel").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET",document.getElementById("ajaxurlprofile").value+isi,true);
  xhttp.send();
}
</script>
<input type="hidden" id="ajaxurlprofile" value="<?php echo site_url('alumni/showprofile/'); ?>">
<div class="card mb-3">
  <div class="card-header">
    <i class="fas fa-table"></i>
    Ini adalah teman seangkatan kamu</div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Jenis Kelamin</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $no = 1;
            foreach ($tahun as $t) {
              ?>
              <tr>
                <td><?php echo $no++;?></td>
                <td><a id="profile" onclick="showprofile('<?=$t['id']?>')" href="#" data-dismiss='modal' data-toggle='modal' data-target='#konfirmasiModal'><?php echo $t['nama'];?></a></td>
                <td>
                  <?php
                  if($t['jk']=='L'){
                    echo "Laki - Laki";
                  }else{
                    echo "Perempuan";
                  }
                  ?>
                </td>
                <?php
              }
              ?>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <div id="konfirmasiModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
      <h4 class="modal-title">Profile</h4>
      </div>
      <div class="modal-body">
        <table width="100%">
          <tbody id="isitabel">
          </tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Tutup</button>
      </div>
    </div>
    </div>
  </div>
