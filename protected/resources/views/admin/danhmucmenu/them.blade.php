@extends('admin.layout.index')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Danh mục menu
                    <small>Thêm</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
            <!-- alert info insert model-->
            @if(count($errors) > 0)
                    <div class="alert alert-danger">
                        @foreach($errors->all() as $er)
                            {{$er}}<br>
                        @endforeach
                    </div>
            @endif

            @if(session('thongbao'))

            <div class="alert alert-success">{{session('thongbao')}}</div>

            @endif            
                <form action="{{route('postThemDanhMucMenu')}}" method="POST">
                    <input type="hidden" name="_token" value="{{csrf_token()}}"> 
                    <div class="form-group">
                        <label>Tên</label>
                        <input required class="form-control" name="name" placeholder="Nhập tên menu" value="{{old('name')}}" />
                    </div>
                    <div class="form-group">
                        <label>Route</label>
                        <input  class="form-control" name="route" placeholder="Nhập tên route" value="{{old('route')}}" />
                    </div>   
                    <div class="form-group">
                        <label>Path</label>
                        <input  class="form-control" name="path" placeholder="Nhập tên path" value="{{old('path')}}" />
                    </div>
                    <div class="form-group">
                        <label>Action</label>
                        <input  class="form-control" name="action" placeholder="Nhập tên action" value="{{old('action')}}" />
                    </div>        
                    <div class="form-group">
                        <label>Hiển thị</label>                        
                        <label class="radio-inline">
                            <input name="show" value="1" type="radio" checked="">có
                        </label>
                        <label class="radio-inline">
                            <input name="show" value="0"  type="radio">không
                        </label>
                    </div>

                    <button type="submit" class="btn btn-default">Thêm mới</button>
                    <button type="reset" class="btn btn-default">Làm mới</button>
                </form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@endsection