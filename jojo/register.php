<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
 <link rel="stylesheet" href="style.css">
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>
<body>

<?php
  include "config.php";
  //masukkan maklumat database
  if (isset($_POST['submit'])){
  $id= $_POST['id'];
  $username= $_POST['username'];
  $password= md5 ($_POST['password']);
    //echo $nokp."". $no_telefon."". $id_staf."";
    $sql = "INSERT INTO user (id,username,password) VALUES ('{$id}','{$username}','{$password}')";
    $rs=mysqli_query($link, $sql);
    //displaying proper message fot the user to see wheteher the query excuted perfectly or not
    if (!$rs){
      echo "Something went wrong ". mysqli_error($link);
    }
    else { echo "<script type'text/javascript'>alert('User added successfully!')</script>";
           echo "<script type'text/javascript'> document.location = 'index.php'; </script>";
    }
  }
  ?> 

<form action="" method="post">
<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4 pb-5">

              <h2 class="fw-bold mb-2 text-uppercase">Register</h2>

              <div class="form-outline form-white mb-4">
                <input type="text" id="id" class="form-control form-control-lg" name="id" />
                <label class="form-label" for="typeEmailX">ID</label>
              </div>

              <div class="form-outline form-white mb-4">
                <input type="text" id="username" class="form-control form-control-lg" name="username" />
                <label class="form-label" for="typeEmailX">Username</label>
              </div>

              <div class="form-outline form-white mb-4">
                <input type="password" id="password" class="form-control form-control-lg" name="password" />
                <label class="form-label" for="typePasswordX">Password</label>
              </div>

              <button class="btn btn-outline-light btn-lg px-5" type="submit" name="submit">Submit</button>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </form>
</section>
</body>
</html>

