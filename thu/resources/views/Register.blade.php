<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ $title }}</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
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

</body>
</html>