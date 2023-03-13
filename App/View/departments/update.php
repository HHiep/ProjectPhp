

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title >Update</title>
  <!-- base:css -->
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="typicons.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  
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
            <h3 style="text-align: center">Update</h3>
              <div class="brand-logo">
                <img src="logo.jpg" alt="logo">
              </div>
              <form class="pt-3" action="" method='POST'>
                <div class="form-group">
                <input type="text" name="name" class="form-control form-control-lg" id="exampleInputEmail1" value="<?= $row['name']?>">
                </div>
                <div class="form-group">
                  <input type="text" name="manager" class="form-control form-control-lg" id="exampleInputPassword1" value="<?= $row['manager']?>">
                </div>
                <div class="mb-2">
                  <button type="submit" name="update" class="btn btn-block auth-form-btn"> Ok</button>
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
