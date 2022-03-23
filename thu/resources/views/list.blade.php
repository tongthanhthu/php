
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">


<link rel="stylesheet" href="template/vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
</head>

<body>
    
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">user
                            <small>danh sách</small>
                        </h1>
                    </div>
                    @if(Session::has('success'))
                          <div class="alert alert-success">
                        {{Session::get('success')}}
                        </div>

                    @endif
                      @if(count($errors) > 0)
                         <div class="alert alert-danger">
                             @foreach($errors->all() as $err)
                             {{$err}}<br>
                             @endforeach
                         </div>
                         @endif
                         @if(session('thongbao'))
                         <div class="alert alert-danger">
                             {{session('thongbao')}}
                         </div>
                         @endif

                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>STT</th>
                                <th>email</th>
                                <th>name</th>
                                <th>địa chỉ</th>
                                <th>phone</th>
                                <th><button ><a href="register">Thêm</a></button><th>
                                
                            </tr>
                        </thead>
                        <tbody>

                       
                                 
                        <?php $i = 0; $skipped =  $listall->firstItem(); ?>

                              
                                @foreach($listall as $l)
                                <tr >
                                <td> {{ $skipped + $i }}
                                     <?php $i++; ?></td>
                                <td>{{$l->mail_address}}</td>
                                <td >{{$l->name}}</td>
                                <td >{{$l->address}}</td>
                                <td>{{$l->phone}}</td>
                          </tr>
                                @endforeach

                            
                            
                        </tbody>
                         
                    </table>
                    {!! $listall->render() !!}
                </div>

            </div>

        </div>



</body>

</html>
