@extends('admin.layout.index')


@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Users
                    <small>thêm mới</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            @if(count($errors) >0)
            <div class="alert alert-danger">
                @foreach($errors->all() as $er)
                    {{$er}}<br>
                @endforeach

            </div>
            @endif

            @if(session('thongbao'))
                <div class="alert alert-success">{{session('thongbao')}}</div>
            @endif

            <div class="col-lg-7" style="padding-bottom:120px">
                <form action="admin/users/them" method="POST">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-group">
                        <label>Name</label>
                        <input class="form-control" name="name" value="{{ old('name') }}" placeholder="Nhập tên người dùng" />
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" value="{{ old('email') }}" class="form-control" name="email" placeholder="Nhập địa chỉ email người dùng" />
                    </div>
                    <div class="form-group">
                        <label>Địa chỉ</label>
                        <input type="text" class="form-control" name="address" placeholder="Nhập địa chỉ " value="{{ old('address') }}"/>
                    </div>
                    <div class="form-group">
                        <label>Điện thoại</label>
                        <input type="text" class="form-control" name="phone" placeholder="Nhập số điện thoại" value="{{ old('phone') }}"/>
                    </div>
                    <div class="form-group">
                        <label>Mật khẩu</label>
                        <input type = 'password' class="form-control" name="password" placeholder="Nhập mật khẩu" />
                    </div>
                    <div class="form-group">
                        <label>Nhập lại mật khẩu</label>
                        <input type = 'password'  class="form-control" name="passwordAgain" placeholder="Nhập lại mật khẩu" />
                    </div>
                        @if($lavel == 1)
                        <div class="form-group">
                            <label>Quyền</label>
                            <label class="radio-inline">
                                <input name="lavel" id="quyen_admin" onclick = "showFunction()" value="2" checked="" type="radio">Admin
                            </label>
                            <label class="radio-inline">
                                <input name="lavel" id="quyen_thuong" onclick = "showFunction()" value="3" type="radio">Thường
                            </label>
                            <label class="radio-inline">
                                <input name="lavel" id="quyen_dangky" onclick = "showFunction()" value="0" type="radio">Đăng ký
                            </label>
                        </div>
                        @endif
                        @if($lavel == 2)      
                        <div class="form-group">
                            <label>Quyền</label>                  
                            <label class="radio-inline">
                                <input name="lavel" id="quyen_thuong" checked onclick = "showFunction()" value="3" type="radio">Thường
                            </label>
                            <label class="radio-inline">
                                <input name="lavel" id="quyen_dangky" onclick = "showFunction()" value="0" type="radio">Đăng ký
                            </label>
                        </div>
                        @endif
                    
                    <div id = "danhmucchuanang">
                        <table>
                            <thead>
                                <tr align="center">
                                    <th>ID</th>
                                    <th style="text-align: center;">Name</th>                                   
                                    <th>Chọn</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($chucnang as $us)
                                <tr class="odd gradeX" align="center">
                                    <td>{{$us->id}}</td>
                                    <td>{{$us->name}}</td>                                   
                                    <td><input type="checkbox" name="id_theloaimenu[]" value="{{$us->id}}"></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                    <button type="submit" class="btn btn-default">Thêm</button>
                    <button type="reset" class="btn btn-default">Làm mới</button>
                <form>
            </div>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@endsection

@section('script')
    <script type="text/javascript">
        $(document).ready(function(){  
            
            if ($('input[id=quyen_thuong]:checked').length>0)
            {
                $("#danhmucchuanang").show();
            }      
            else
                $("#danhmucchuanang").hide();
            
        });

        function showFunction($id = '')
        {
            if ($('input[id=quyen_thuong]:checked').length>0)
            {
                $("#danhmucchuanang").show();
            }
            else if($('input[id=quyen_admin]:checked').length>0 || $('input[id=quyen_dangky]:checked').length>0)

            {
                $("#danhmucchuanang").hide();
            }
        }

    </script>
        
@endsection