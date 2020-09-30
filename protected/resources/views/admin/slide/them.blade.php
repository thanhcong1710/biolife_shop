@extends('admin.layout.index')


@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Slide
                    <small>thêm mới</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <!-- print errors to user -->
            @if(count($errors) >0)
                <div class="alert alert-danger">
                    @foreach($errors->all() as $er)
                        {{$er}}<br>
                    @endforeach
                </div>
            @endif

            @if(session('thongbao'))
                <div class="alert alert-success">
                    {{session('thongbao')}}
                </div>
            @endif
            @if(session('loi'))
                <div class="alert alert-danger"> {{session('loi')}}</div>
            @endif
            <div class="col-lg-7" style="padding-bottom:120px">
                <form action="{{route('postThemSlide')}}" method="POST" enctype="multipart/form-data">  
                    <input type="hidden" name="_token" value ="{{csrf_token()}}">
                    <div class="form-group">
                        <label>Tên</label>
                        <input class="form-control" name="Ten" placeholder="Nhập tên slide" value="{{ old('Ten') }}"/>
                    </div>

                    <div class="form-group">
                        <label>Nội dung</label>
                        <textarea class="form-control ckeditor" rows="3" name="NoiDung" value="{{ old('NoiDung') }}"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Đường dẫn</label>
                        <input class="form-control" name="link" placeholder="Nhập đường dẫn" value="{{ old('link') }}"/>
                    </div>

                    <div class="form-group">
                        <label>Hình</label>
                        <input type="file" name="Hinh">
                    </div>

                    <button type="submit" class="btn btn-default">Thêm slide</button>
                    <button type="reset" class="btn btn-default">Làm mới</button>
                <form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@endsection