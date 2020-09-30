@extends('admin.layout.index')

@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Nhà cung cấp
                    <small>sửa</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
            <!--in lỗi thông báo cho người dùng-->
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
                <form action="{{route('postSuaProvider', $provider->id)}}" method="POST">
                {{ csrf_field() }}
                    <div class="form-group">
                        <label>Nhóm sản phẩm</label>
                        <select class="form-control" name="type_products">
                            @foreach($type_products as $tp)
                                <option value="{{$tp->id}}"
                                @if($tp->id == $provider->id_type_provider)
                                    {{selected}}
                                @endif
                                >
                                {{$tp->name}}
                                </option>
                           @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Tên</label>
                        <input class="form-control" name="name" placeholder="Nhập tên nhà cung cấp" value="{{$provider->name}}" required />
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