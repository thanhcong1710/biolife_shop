@extends('admin.layout.index')


@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Loại tin
                    <small>Thêm</small>
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
                <form action="{{route('postThemLoaiTin')}}" method="POST">
                {{ csrf_field() }}
                    <div class="form-group">
                        <label>Thể loại</label>
                        <select class="form-control" name="TheLoai">
                            @foreach($theloai as $tl)
                                <option value="{{$tl->id}}"
                                @if(old('TheLoai') == $tl->id)
                                {{'selected'}}
                                @endif
                                >
                                {{$tl->Ten}}
                                </option>
                           @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Tên</label>
                        <input class="form-control" name="Ten" placeholder="Nhập tên thể loại" value="{{old('Ten')}}" />
                    </div>
                    
                    <button type="submit" class="btn btn-default">Thêm mới</button>
                    <button type="reset" class="btn btn-default">Làm mới</button>
                <form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@endsection