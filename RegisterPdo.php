<?php
$conn = mysqli_connect('localhost','root','','thu');

$err = [];

    
if(isset($_POST['mail_address'])){
    $email = $_POST['mail_address'];
    $password = $_POST['password'];
    $passwordconfirm = $_POST['passwordconfirm'];

    if(empty($email) || strlen($email) >255 ){
        $err['email'] = 'email không được bỏ trống và nhỏ hơn 255 ký tự';

    }
    if(empty($password) || strlen($password)>50 || strlen($password) < 6){
        $err['password'] ='password từ 6 đến 50 ký tự';

    }
      if($passwordconfirm != $password){
        $err['passwordconfirm'] ='mật khẩu nhập lại không đúng';

    }
    //var_dump(empty($err));die();
    if(empty($err) !== false){
    $pass = password_hash($password, PASSWORD_DEFAULT);
    $sql = "INSERT INTO users(mail_address,password) VALUES('$email','$pass')";
    $query = mysqli_query($conn,$sql);
    if($query){
        header('location: LoginPdo.php ');
    }
  }
    
}


?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">


<link rel="stylesheet" href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css">


</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Đăng ký</h3>
                    </div>
                    <div class="panel-body">

                        <form action="" method="POST" enctype="multipart/form-data">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="mail_address" type="email" autofocus>
                                </div>
                                <div class="has-error">
                                    <span color="red"><font color="red"><?php echo (isset($err['email']))?$err['email']:''    ?></font></span>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="nhập mật khẩu" name="password" type="password" >
                                </div>
                                <div class="has-error">
                                    <span><font color="red"><?php echo (isset($err['password']))?$err['password']:''    ?></font></span>
                                </div>
                                <div class="form-group">
                                   <input class="form-control" placeholder="xác nhận mật khẩu" name="passwordconfirm" type="password" >
                                </div>
                                <div class="has-error">
                                    <span color="red"><font color="red"><?php echo (isset($err['passwordconfirm']))?$err['passwordconfirm']:'' ?></font></span>
                                </div>

                                <button type="submit" class="btn btn-lg btn-success btn-block" name="submit">Đăng ký</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
