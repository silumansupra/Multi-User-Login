<form action="<?= $login_url ?>" method="post" id="fLogin">
     <div class="form-group has-feedback">
      <input type="text" class="form-control" name="idpeg_user" placeholder="IDPEG/USERNAME">
      <span class="glyphicon glyphicon-user form-control-feedback"></span>
     </div>
     <div class="form-group has-feedback">
      <input type="password" class="form-control" name="password" placeholder="PASSWORD">
      <span class="glyphicon glyphicon-lock form-control-feedback"></span>
     </div>
     <div class="row">
     <!-- /.col -->
      <div class="col-xs-12">
       <input type="submit" name="btnLogin" value="Log in" class="btn btn-primary btn-block">
      </div>
      <!-- /.col -->
     </div>
    </form>
