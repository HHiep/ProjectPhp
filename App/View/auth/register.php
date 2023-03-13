

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title >Register</title>
  <!-- base:css -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="typicons.css">
  <!-- endinject -->
  <!-- inject:css -->
  <link rel="stylesheet" href="vendor.bundle.base.css">
  <link rel="shortcut icon" href="logo.jpg" />
</head>
 
<body>    
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
            <h3 style="text-align: center">Register</h3>
              <div class="brand-logo">
                <img src="logo.jpg" alt="logo">
              </div>
              <h4>Hello! let's get started</h4>
              <h6 class="font-weight-light">Register in to continue.</h6>
              <span class="text-danger"><?= $messenger;?></span>
              <form class="pt-3" action="index.php?page=user_Register" method='POST'>
                <div class="form-group">
                <input type="email" name="email" class="form-control form-control-lg" id="exampleInputEmail1"  value="<?= $email?>"  placeholder="Email">
                <span class="text-danger"><?= $emailErr;?></span>
                </div>
                <div class="form-group">
                  <input type="password" name="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password">
                  <span class="text-danger"><?= $passwordErr;?></span>
                </div>
                <br>
                <div class="mb-2">
                  <button type="submit" name="register" class="btn btn-block btn-facebook auth-form-btn">OK</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
<?php 
