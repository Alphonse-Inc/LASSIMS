<?php include('include/server.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>LASSIMS - Login</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../../node_modules/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../../node_modules/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="../../node_modules/flag-icon-css/css/flag-icon.min.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="login_assets/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="login_assets/images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper">
      <div class="row1">
        <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-full-bg">
          <div class="row1 w-100">
            <div class="col-lg-4 mx-auto">
              <div class="auth-form-dark text-left p-5">
                <div class="align-items-center">
                  <p style="text-align:center; margin-top:0px; margin-bottom:0px; padding:0px;">
                    <a href="index.php"><img class="align-items-center" src="login_assets/images/logo.png"></a>
                  </p>
                </div><br>
                <h2>Login</h2>
                <h4 class="font-weight-light">Hello! Let's get started</h4>
                  <form method="post" action="login.php" >
                    <!-- display validation errors here -->
                    <?php include('errors.php'); ?>
                    <div class="form-group">
                      <label for="name"><b>Username</b></label>
                      <input type="text" class="form-control" id="name" name="username">
                      <i class="mdi mdi-account"></i>
                    </div>
                    <div class="form-group">
                      <label for="password"><b>Password</b></label>
                      <input type="password" class="form-control" id="password" name="password">
                      <i class="mdi mdi-eye"></i>
                    </div>
                    <div class="mt-5">
                      <button class="btn btn-block btn-warning btn-lg font-weight-medium" name="login">Login</button>
                    </div>
                    <div class="mt-3 text-center">
                      <a href="index.php" class="auth-link text-white">VISIT HOMEPAGE</a>
                    </div>
                  </form>
              </div><br><br><br>
              <p style="text-align:center; margin-top:0px; margin-bottom:0px; padding:0px;"><font class="text-white"><b>LASSIMS OFFICIAL</b></font></p>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- row ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="../../node_modules/jquery/dist/jquery.min.js"></script>
  <script src="../../node_modules/popper.js/dist/umd/popper.min.js"></script>
  <script src="../../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/misc.js"></script>
  <!-- endinject -->
</body>

</html>
