@extends('admin.layout.index')


@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Banner
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
                <form action="{{route('postThemBanner')}}" method="POST" enctype="multipart/form-data">  
                    <input type="hidden" name="_token" value ="{{csrf_token()}}">
                    <div class="form-group">
                        <label>Tên</label>
                        <input required class="form-control" name="name" placeholder="Nhập tên banner" value="{{ old('name') }}"/>
                    </div>
                    <div class="form-group">
                        <label>Nội dung</label>
                        <input  required class="form-control"  name="content" value="{{ old('content') }}" placeholder="Nhập nội dung"/>
                    </div>
                    <div class="form-group">
                        <label>Đường dẫn</label>
                        <input class="form-control" name="link" placeholder="Nhập đường dẫn" value="{{ old('link') }}"/>
                    </div>
                    <div class="form-group">
                        <label>Vị trí</label>
                        <label class="radio-inline">
                            <input name="type" value="0" checked="" type="radio">Trên
                        </label>
                        <label class="radio-inline">
                            <input name="type" value="1" type="radio">Trên - trái
                        </label>
                        <label class="radio-inline">
                            <input name="type" value="2" type="radio">Trái
                        </label>
                        <label class="radio-inline">
                            <input name="type" value="3" type="radio">Phải
                        </label>
                    </div>
                    <div class="form-group">
                        <label>Kích hoạt</label>                      
                        <label class="radio-inline">
                            <input name="activi" value="1" type="radio" checked="">Kích hoạt
                        </label>
                        <label class="radio-inline">
                            <input name="activi" value="0" type="radio">Không
                        </label>
                    </div>

                    <div class="form-group">
                        <label>Hình</label>
                        <input type="file" name="image">
                    </div>
                    <button type="submit" class="btn btn-default">Thêm banner</button>
                    <button type="reset" class="btn btn-default">Làm mới</button>
                <form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@endsection