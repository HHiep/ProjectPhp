<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title >List</title>
  <!-- base:css -->
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="typicons.css">
  <!-- endinject -->
  <!-- inject:css -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="vendor.bundle.base.css">
  <link rel="shortcut icon" href="logo.jpg" />
</head>

<body>
<?=$_SESSION['email']?>
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Danh Sach</h4>
                    <div class="table-responsive">
                    <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Manager</th>
                            <th><a class="btn btn-success btn-rounded btn-fw" href="index.php?page=user_addDs">Add </a></th>
                        </tr>
                    </thead>
                <?php if(mysqli_num_rows($data) >0){
                        while($item = mysqli_fetch_assoc($data))
                {?>
                        <tr>
                            <td><?= $item['name']?></td>
                            <td><?= $item['manager']?></td>
                            <td><a class="btn btn-info btn-rounded btn-fw" href="index.php?page=user_updateDs&id=<?= $item['id']?>">Update</a></td>
                            <td><a class="btn btn-danger btn-rounded btn-fw" href="index.php?page=user_deleteDs&id=<?= $item['id']?>">Delete</a></td>
                        </tr>
                <?php }
                }?>
                    </table>
                    <div>  
                        <a class="btn btn-success btn-rounded btn-fw" href="index.php?page=user_list">Employees </a>
                        <a class="btn btn-dark btn-rounded btn-fw" href="index.php?page=logout">Logout </a></div>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
</body>
</html>
                                         

