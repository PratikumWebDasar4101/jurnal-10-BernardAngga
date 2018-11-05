<!DOCTYPE html>
<html>
<head>
  <title>Profil</title>
  <link rel="stylesheet" type="text/css" href="./assets/bootstrap.css">
</head>
<body>
  <?php include_once "template/menu.php" ?>
  <div class="jumbotron bg-danger">
    <?php if (!isset($_SESSION["is_login"])) { ?>
      <div class="container text-center">
        <h1 class="display-4">Selamat Datang!</h1>
        <p><a class="btn btn-primary mr-2" href="register.php">Registrasi</a><a class="btn btn-dark" href="index.php?login=true">Login</a></p>
      </div>
    <?php }else { ?>
      <div class="container text-center">
        <h1 class="display-4">Selamat Datang! <?php echo $_SESSION["username"] ? $_SESSION["username"] : 'Guest' ?></h1>
        <p><a class="btn btn-primary mr-2" href="dashboard.php">Dasbor</a><a class="btn btn-dark" href="profile.php">Profil</a></p>
      </div>
    <?php } ?>
  </div>
</body>
</html>
