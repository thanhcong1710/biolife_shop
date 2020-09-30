 @extends('admin.layout.index')

 @section('content')
 <div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Loại sản phẩm
                    <small>{{$type_products->Ten}}</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
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

                <form action="{{route('postSuaType_Products',$type_products->id)}}" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-group">
                        <label>Tên</label>
                        <input class="form-control" name="name" placeholder="Nhập tên thể loại" value="{{$type_products->name}}" />
                    </div>
                    <div class="form-group">
                        <label>Mô tả</label>
                        <textarea id="demo" class="form-control ckeditor" rows="3" name="description" >{{$type_products->description}}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Hình ảnh</label>
                        <img src="image/product/{{$type_products->image}}">
                        <input type="file" name="image"/>                     
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