<?php 

    session_start();
    include_once "connection.php";
    include_once "data.php";

    $con = new conn();
    $db = $con->connect();

    if($_POST){
        $obj = new insert($db);
        $obj->username = $_POST['username'];
        $obj->password = $_POST['password'];
        $obj->insert2();
    }

?>


<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" type="text/css" href="style3.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
</head>
<body>
  <div class="container">

  <?php if (isset($_SESSION['success'])) : ?>
        <div class="success">
            <?php 
                echo $_SESSION['success'];
            ?>
        </div>
    <?php endif; ?>


    <?php if (isset($_SESSION['error'])) : ?>
        <div class="error">
            <?php 
                echo $_SESSION['error'];
            ?>
        </div>
    <?php endif; ?><br>

    <div class="row px-3">
      <div class="col-lg-10 col-xl-9 card flex-row mx-auto px-0">
        <div class="img-left d-none d-md-flex"></div>

        <div class="card-body">
          <h4 class="title text-center mt-4">
            Login into account
          </h4>
          <form class="form-box px-3" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <div class="form-input">
              <span><i class="fa fa-user-circle"></i></span>
              <input type="text" name="username" placeholder="Enter Username here" tabindex="10" required>
            </div>
            <div class="form-input">
              <span><i class="fa fa-key"></i></span>
              <input type="password" name="password" placeholder="Enter Password here" required>
            </div>

            <div class="mb-3">
              <button type="submit" class="btn btn-block text-uppercase">
                Login
              </button>
            </div>


            <div class="text-center mb-3">
              or login with
            </div>

            <div class="row mb-3">
              <div class="col-4">
                <a href="#" class="btn btn-block btn-social btn-facebook">
                  facebook
                </a>
              </div>

              <div class="col-4">
                <a href="#" class="btn btn-block btn-social btn-google">
                  google
                </a>
              </div>

              <div class="col-4">
                <a href="#" class="btn btn-block btn-social btn-twitter">
                  twitter
                </a>
              </div>
            </div>

            <hr class="my-4">

            <div class="text-center mb-2" style="font-family: saysettha ot; font-size: 14px;">
              ຖ້າທ່ານຍັງບໍທັນສະໜັກເປັນສະມາຊິກ 
              <a href="register.php" class="register-link">
                ກົດທີນີ້ເພື່ອສະໜັກເປັນສະມາຊິກ
              </a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>
</html>

<?php 

    if (isset($_SESSION['success']) || isset($_SESSION['error'])) {
        session_destroy();
    }

?>








    