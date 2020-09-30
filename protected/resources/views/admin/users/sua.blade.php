@extends('admin.layout.index')


@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Users
                    <small>{{$user->name}}</small>
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
                <form action="{{route('postSuaUser',$user->id)}}" method="POST">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-group">
                        <label>Name</label>
                        <input class="form-control" name="name" placeholder="Nhập tên người dùng" value="{{$user->name}}" />
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Nhập địa chỉ email người dùng" value="{{$user->email}}" readonly />
                    </div>
                    <div class="form-group">
                        <label>Địa chỉ</label>
                        <input type="text" class="form-control" name="address" placeholder="Nhập địa chỉ " value="{{$user->address}}"/>
                    </div>
                    <div class="form-group">
                        <label>Điện thoại</label>
                        <input type="text" class="form-control" name="phone" placeholder="Nhập số điện thoại" value="{{$user->phone}}"/>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="changePassWord" id="changePassWord" >
                        <label>Đổi mật khẩu</label>
                        <input type = 'password' class="form-control changepass" name="password" placeholder="Nhập mật khẩu" disabled="" />
                    </div>
                    <div class="form-group">
                        <label>Nhập lại mật khẩu</label>
                        <input type = 'password'  class="form-control changepass" name="passwordAgain" placeholder="Nhập lại mật khẩu" disabled/>
                    </div>
                    
                    @if($lavel == 1)
                        <div class="form-group">
                            <label>Quyền</label>
                            <label class="radio-inline">
                                <input name="lavel" id="quyen_admin" onclick = "showFunction()" value="2" checked="" type="radio"
                                @if($user->lavel == 2)
                                {{'checked'}}
                                @endif
                                >Admin
                            </label>
                            <label class="radio-inline">
                                <input name="lavel" id="quyen_thuong" onclick = "showFunction()" value="3" type="radio"
                                @if($user->lavel == 3)
                                {{'checked'}}
                                @endif
                                >Thường
                            </label>
                            <label class="radio-inline">
                                <input name="lavel" id="quyen_dangky" onclick = "showFunction()" value="0" type="radio"
                                @if($user->lavel == 0)
                                {{'checked'}}
                                @endif
                                >Đăng ký
                            </label>
                        </div>
                        @endif
                        @if($lavel == 2)      
                        <div class="form-group">
                            <label>Quyền</label>                  
                            <label class="radio-inline">
                                <input name="lavel" id="quyen_thuong" checked onclick = "showFunction()" value="3" type="radio"
                                @if($user->lavel == 3)
                                {{'checked'}}
                                @endif
                                >Thường
                            </label>
                            <label class="radio-inline">
                                <input name="lavel" id="quyen_dangky" onclick = "showFunction()" value="0" type="radio"
                                @if($user->lavel == 0)
                                {{'checked'}}
                                @endif
                                >Đăng ký
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
                                    <td><input type="checkbox" name="id_theloaimenu[]" value="{{$us->id}}"
                                    @if(in_array($us->id,explode(',', $user->id_theloaimenu)))
                                        {{'checked'}}
                                    @endif
                                    ></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                    <button type="submit" class="btn btn-default">Sửa</button>
                    <button type="reset" class="btn btn-default">Làm mới</button>
                <form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@endsection

@section('script')
    <script>
        $(document).ready(function()
        {
            if ($('input[id=quyen_thuong]:checked').length>0)
            {
                $("#danhmucchuanang").show();
            }      
            else
                $("#danhmucchuanang").hide();


            $("#changePassWord").change(function(){
                if ($(this).is(":checked"))
                {
                    $(".changepass").removeAttr('disabled');
                }
                else
                {
                    $(".changepass").attr('disabled','');
                }
            });
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

