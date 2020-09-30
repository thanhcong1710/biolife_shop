 @extends('admin.layout.index')

 @section('content')
 <div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Thông tin chung
                    <small>{{$thongtinchung->name}}</small>
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

                <form action="admin/thongtinchung/sua/{{$thongtinchung->id}}" method="POST">
                    {{ csrf_field() }} 

                    <div class="form-group">
                        <label>Tên</label>
                        <input required class="form-control" name="name" placeholder="Điền tên"  value="{{$thongtinchung->name}}" />
                    </div>       
                    <div class="form-group">
                        <label>Phone</label>
                        <input required class="form-control" name="phone" placeholder="Điền số điện thoại"  value="{{$thongtinchung->phone}}" type="number" />
                    </div> 
                     <div class="form-group">
                        <label>Fax</label>
                        <input required class="form-control" name="fax" placeholder="Điền số fax"  value="{{$thongtinchung->fax}}" type="number" />
                    </div> 
                    <div class="form-group">
                        <label>Email</label>
                        <input required class="form-control" name="email" placeholder="Điền email"  value="{{$thongtinchung->email}}" type="email" />
                    </div> 
                    <div class="form-group">
                        <label>Website</label>
                        <input required class="form-control" name="website" placeholder="Điền địa chỉ trang web công ty"  value="{{$thongtinchung->website}}" />
                    </div> 
                    <div class="form-group">
                        <label>Địa chỉ</label>
                        <textarea required class="form-control" name="address" placeholder="Điền địa chỉ" >{{$thongtinchung->address}}</textarea>
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