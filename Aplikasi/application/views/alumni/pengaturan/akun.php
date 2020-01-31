<div class="container">
  <div class="card card-register mx-auto mt-5">
    <div class="card-header">Akun</div>
    <div class="card-body">
      <form action="<?php echo site_url('alumni/update_proses');?>" method="post">
        <?php foreach ($akun as $b) { ?>
        <input type="hidden" name="id" value="<?php echo $b['id'];?>"/>
        <div class="form-group">
        </div>
        <div class="form-group">
          <div class="form-label-group">
            <input type="Email" name="username" id="username" class="form-control" placeholder="Email address" required="required" value="<?php echo $b['username'];?>">
            <label for="username">Username</label>
          </div>
        </div>
        <div class="form-group">
          <div class="form-label-group">
            <input type="password" name="password" id="password" class="form-control" placeholder="Email address" value="<?php echo $b['password'];?>">
            <label for="password">Password</label>
          </div>
        </div>
      <?php } ?>
        <button type="submit" name="update" class="btn btn-primary btn-block" value="akun">Perbaharui</button>
      </form>
    </div>
  </div>
</div>
