<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ $title }}</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="template/admin/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="template/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="template/admin/dist/css/adminlte.min.css"> 
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="login"><b>Đăng Ký</b></a>
  </div>
  <div class="card">
    <div class="card-body login-card-body">

                        <form action="" method="POST" enctype="multipart/form-data" class="form-floating">
                            <fieldset>
                                <div class="form-group" >
                                    <input class="form-control" placeholder="E-mail" name="  mail_address" type="email" autofocus >
                                </div>

                                <div class="form-group">
                                    <input type="password" name="password" class="form-control is-invalid" id="floatingInputInvalid" placeholder="nhập mật khẩu" >
                                        @if ($errors->any())
                                         <div class="alert alert-danger">
                                        @foreach ($errors->get('password') as $message)
                                          <label for="floatingInputInvalid">{{$message}}</label>
                                        @endforeach
                                         </div>
                                        @endif 
                                </div>
                                <div class="form-group">
                                    <input type="password" name="passwordconfirm" class="form-control is-invalid" id="floatingInputInvalid" placeholder="xác nhận mật khẩu" >
                                        @if ($errors->any())
                                         <div class="alert alert-danger">
                                        @foreach ($errors->get('passwordconfirm') as $message)
                                          <label for="floatingInputInvalid">{{$message}}</label>
                                        @endforeach
                                         </div>
                                        @endif 
                                </div>
                               <div class="form-group">                               
                                  <input class="form-control" placeholder="họ tên" name="name" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="địa chỉ" name="address" type="text" autofocus >
                                </div>
                                <div class="form-group">
                                    <input type="number" name="phone" class="form-control is-invalid" id="floatingInputInvalid" placeholder="nhập số điện thoại" >
                                        @if ($errors->any())
                                         <div class="alert alert-danger">
                                        @foreach ($errors->get('phone') as $message)
                                          <label for="floatingInputInvalid">{{$message}}</label>
                                        @endforeach
                                         </div>
                                                @endif 
                                </div>
                                <button type="submit" class="btn btn-lg btn-success btn-block" name="submit">Đăng ký</button>
                            </fieldset>
                         @csrf
                        </form>
    </div>
  </div>
</div>
<center><h3 >PHP training by LIFETIME technologies</h3></center>
<script src="template/admin/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="template/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="template/admin/dist/js/adminlte.min.js"></script>
<script src="template/admin/js/main.js"></script>
</body>
</html>