<div class="container">
  <div class="card card-register mx-auto mt-5">
    <div class="card-header">Sosial Media</div>
    <div class="card-body">
      <form action="<?php echo site_url('alumni/update_proses');?>" method="post">
        <input type="hidden" name="id" value="<?php echo $id;?>"/>
        <div class="form-group">
          <div class="form-label-group">
            <input type="text" name="line" id="line" class="form-control" placeholder="Email address">
            <label for="line">Line</label>
          </div>
        </div>
        <div class="form-group">
          <div class="form-label-group">
            <input type="text" name="facebook" id="facebook" class="form-control" placeholder="Email address">
            <label for="facebook">Facebook</label>
          </div>
        </div>
        <div class="form-group">
          <div class="form-label-group">
            <input type="text" name="instagram" id="instagram" class="form-control" placeholder="Email address">
            <label for="instagram">Instagram</label>
          </div>
        </div>
        <div class="form-group">
          <div class="form-label-group">
            <input type="text" name="twitter" id="twitter" class="form-control" placeholder="Email address">
            <label for="twitter">Twitter</label>
          </div>
        </div>
        <button type="submit" name="update" class="btn btn-primary btn-block" value="sosmed">Perbaharui</button>
      </form>
    </div>
  </div>
</div>
