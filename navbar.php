<?php
// session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="/tutormanagement">Ontutors</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/tutormanagement">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/tutormanagement/request_tutor.php">Request Tutor</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="/tutormanagement/available_tutions.php">Available Tutions</a>
        </li>
        
      </ul>
      <div class="d-flex">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        

        <?php if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) { ?>
          <li class="nav-item">
           <a href="/tutormanagement/login.php"><button class="btn btn-info mx-3">Login</button></a>
        </li>

        <li class="nav-item">
        <a href="/tutormanagement/register.php"><button class="btn btn-success">Register</button></a>
        </li>
    <?php }else{ ?>
      <?php if ($_SESSION['email'] !='admin'){ ?>
      <li class="nav-item">
        <a href="/tutormanagement/profile.php"><button class="btn btn-success">Profile</button></a>
      </li>
      <?php }else{?>
        <li class="nav-item">
        <a href="/tutormanagement/admin.php"><button class="btn btn-success">Admin</button></a>
      </li>
        <?php } ?>
        <li class="nav-item mx-3">
        <a href="/tutormanagement/logout.php"><button class="btn btn-danger">Logout</button></a>
        </li>
      <?php } ?>
      </ul>
      </div>
    </div>
  </div>
</nav>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>