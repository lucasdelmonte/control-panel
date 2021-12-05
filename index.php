<?php include('validateForm.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <title>Login</title>
</head>
<body>
  <div class="container w-75 bg-warning mt-5 rounded shadow">
    <div class="row align-items-stretch">
      <div class="col bg d-none d-lg-block col-md-5 col-lg-5 col-xl-6 rounded">

      </div>
      <div class="col bg-white p-3 rounded-end">
        <div class="text-end">
          <img src="./img/logo.png" alt="Teraflop Computacion" width="80px">
        </div>

        <h2 class="fw-bold text-center py-4">Welcome</h2>

        <form action="validateForm.php" method="post" id="myForm">
          <div class="mb-4">
            <label for="username" class="form-label mb-2">Username</label>
            <input type="text" name="username" id="username" class="form-control">
          <div class="mb-4">
            <label for="password" class="form-label mt-3">Password</label>
            <input type="password" name="password" id="password" class="form-control">
          </div>
          <div class="mb-4 form-check">
            <input type="checkbox" name="connected" class="form-check-input" id="">
            <label for="connected" class="form-check-label">Remember password?</label>
          </div>

          <div id="alertMessage">
            <!--<div class="alert alert-danger">Error</div>-->
            <!--
              <?php 
              echo $alert != '' ? '$alert' : ''; 
            ?>
            -->
          </div>

          <div class="d-grid">
            <button type="submit" class="btn btn-primary">Log in</button>
          </div>

          <div class="my-3">
            <span>You do not have an account? <a href="#">Sign up</a></span> <br>
            <span><a href="#">Recover password</a></span>
          </div>
        </form>

        <div class="container w-100 my-5">
          <div class="row text-center">
            <div class="col-12">
                Log in
            </div>
            <div class="col">
              <button class="btn btn-outline-primary w-100 my-1">
                <div class="row align-items-center">
                  <div class="col-2 d-none d-md-block">
                    <img src="img/facebook_circled_48px.png" width="30" alt="Facebook">
                  </div>
                  <div class="col-12 col-md-10 text-center">
                    Facebook
                  </div>
                </div>
              </button>
            </div>
            <div class="col">
              <button class="btn btn-outline-danger w-100 my-1">
                <div class="row align-items-center">
                  <div class="col-2 d-none d-md-block">
                    <img src="img/google_48px.png" width="30" alt="Google">
                  </div>
                  <div class="col-12 col-md-10 text-center">
                    Google
                  </div>
                </div>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="js/validateForm.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>