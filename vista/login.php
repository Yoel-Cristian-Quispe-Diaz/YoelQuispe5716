<body 
      class="hold-transition login-page">
<div class="login-box">
    
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
       <div class="login-logo">
  <img src="assest/dist/img/logo_login.png" alt="" width="200">
  </div>

      <form action="" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Usuario" name="usuario">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Contraseña" name="password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
            
             <!-- /.col -->
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">log in</button>
          </div>
          <!-- /.col -->
        </div>
          
           <?php
        
            $login=new ControladorUsuario();
            $login-> ctrIngresoUsuario();
          ?>
          
      </form>


  </div>
</div>

<script src="assest/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="assest/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="assest/dist/js/adminlte.min.js"></script>
    
</body>

 