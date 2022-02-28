
<?php
session_start();

?>

<?php
  
if(isset($_POST['remember'])){
  if(isset($_POST['email'])){
  $_SESSION["email"] = $_POST['email'];
}
 if(isset ($_POST['password'])){
 $_SESSION["password"] = $_POST['password'];
}
  $e = $p ="";
  if(isset($_POST['email'])){
    $e = $_POST['email'];
  }
   if(isset ($_POST['password'])){
    $p = $_POST['password'];
  }
   //var_dump(strlen($p));die();
  if(!empty($e) && !empty($p)){

  if(strlen($e) > 255){
    echo ' gmail nhỏ hơn 255 ký tự';
  }
 if(strlen($p) < 3 || strlen($p) > 255) {
    echo '<font style="color:red; text-align: center;"><h2> Mật Khẩu lớn hơn 3 và nhỏ hơn 255 ký tự </h2></font>';
}
  elseif($e =='thu@gmail.com' && $p == 'thu123'){
    header('location: LoginSuccess.php '); die();
  }
  else{
    echo '<font style="color:red; text-align: center;"><h2> Đăng nhập thất bại.” </h2></font>';
  }
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">ĐĂNG NHẬP</p>
      <form action="" method="post">         
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email" name="email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
          <div class="icheck-primary">
              <input type="checkbox"  name="remember">
              <label for="remember">
                Remember Me
              </label>
            </div> 
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block" name="save-session">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
    </div>
  </div>
</div>
</body>
</html>






