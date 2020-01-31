<div class="card mb-3">
  <div class="card-header">
    <i class="fas fa-table"></i>
    Jumlah Alumni Pada PT / Intansi</div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama PT / Intansi</th>
              <th>Jumlah</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $no=1;
            foreach ($pt as $p) {
              ?>
              <tr>
                <td><?php echo $no++;?></td>
                <td><?php echo $p['nama_instansi'];?></td>
                <td><?php echo $p['Jumlah Alumni'];?></td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
