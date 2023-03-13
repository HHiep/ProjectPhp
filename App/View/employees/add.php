

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title >Add</title>
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
            <h3 style="text-align: center">Add</h3>
              <div class="brand-logo">
                <img src="logo.jpg" alt="logo">
              </div>
              <form class="pt-3" action="" method='POST'>
                <div class="form-group">
                <input type="text" name="name" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Username">
                <span class="text-danger"><?= $nameErr;?></span>
                </div>
                <div class="form-group">
                  <input type="text" name="address" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Address">
                  <span class="text-danger"><?= $addressErr;?></span>
                </div>
                <br>
                <div class="form-group">
                <input type="text" name="phone" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Phone">
                <span class="text-danger"><?= $phoneErr;?></span>
                </div>
                <div class="form-group">
                <input type="email" name="mail" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Mail">
                <span class="text-danger"><?= $mailErr;?></span>
                </div>
                <div class="form-group">
                <input type="text" name="designation" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Designation">
                <span class="text-danger"><?= $designationErr;?></span>
                </div>
                <div class="form-group">
                <input type="text" name="salary" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Salary">
                <span class="text-danger"><?= $salaryErr;?></span>
                </div>
               
                
                <div class="form-group">
                <label for="membership">Manager</label>
                <select name="role" >
                <?php if(mysqli_num_rows($data) >0){
                        while($item = mysqli_fetch_assoc($data))    
                {?>
                    <option value="<?=$item['id'] ?>"><?= $item['manager']?></option>
                <?php }
                }?>
                  </select>
                <div class="mb-2">
                  <button type="submit" name="add" class="btn btn-block auth-form-btn"> Ok</button>
                </div>
                
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
</body>
</html>
