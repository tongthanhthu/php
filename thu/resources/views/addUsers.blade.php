@extends('layouts.default')
@section('contentss')

    <div class="container">
                        <form action="addUsers" method="POST" enctype="multipart/form-data" class="form-floating">
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
                                <div class="form-group">
                                <label>lớp</label>
                                <select class="form-control" name="classroom_id" id="classrooms">
                                    @foreach($classrooms as $class)
                                    <option value="{{$class->id}}">{{$class->name}}</option>
                                   @endforeach
                                </select>
                                
                            </div>
                                <div class="form-group">
                                <label>Quyền :</label>
                                <label class="radio-inline">
                                    <input name="role" value="1" checked="" type="radio">quản trị viên
                                </label>
                                <label class="radio-inline">
                                    <input name="role" value="2" type="radio">Nhân viên
                                </label>
                            </div>
                                <button type="submit" class="btn btn-lg btn-success btn-block" name="submit">Thêm mới</button>
                            </fieldset>
                         @csrf
                        </form>


    </div>
 

@endsection