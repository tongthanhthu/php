@extends('layouts.default')
@section('contentss')
<form action="" >
    <div class="form-group">
        <input  name="key" class="form-control" placeholder="tìm kiếm">
        <button type="submit"  class="btn btn-primary"><i class="fas fa-search"></i></button>
    </div>
</form>
<hr>
<form>
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">

                         @if(session('thongbao'))
                         <div class="alert alert-danger">
                             {{session('thongbao')}}
                         </div>
                         @endif
                         <h4>STT {{ $listall->firstItem() }} - {{ $listall->lastItem() }}</h4>

                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>STT</th>
                                <th>email</th>
                                <th>name</th>
                                <th>địa chỉ</th>
                                <th>phone</th>s
                            </tr>
                        </thead>
                        <tbody>                                 
                                @foreach($listall as $l)
                                <tr >
                                <td>{{$loop->iteration}}</td>
                                <td>{{$l->mail_address}}</td>
                                <td >{!! \App\Helpers\facade::toUpperCase($l->name)   !!}</td>
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
        </form>



</body>

@endsection

