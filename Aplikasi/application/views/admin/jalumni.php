<div class="card mb-3">
  <div class="card-header"><i class="fas fa-table"></i>Jumlah Alumni Setiap Angkatan</div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Tahun Masuk</th>
              <th>Total</th>
            </tr>
          </thead>
          <tbody>
            <?php
              foreach ($jumlah as $j ) { ?>
            <tr>
              <td><?= $j['id_masuk'];?></td>
              <td><?= $j['Jumlah Alumni'];?></td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
