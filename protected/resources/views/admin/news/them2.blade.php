@extends('admin.layout.index')

@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Tin tức
                    <small>thêm</small>
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

                <form action="admin/tintuc/them" method="POST" anctype = "multipart/form-data" id="formaddnew" name="formaddnew">
                {{csrf_field()}}

                    <div class="form-group">
                        <label>Thể loại</label>
                        <select class="form-control" name="TheLoai" id="TheLoai">
                        <option value="">-----Chọn thể loại -----</option>
                        @foreach($theloai as $tl)
                            <option value="{{$tl->id}}">{{$tl->Ten}}</option>
                        @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Loại tin</label>
                        <select class="form-control" name="LoaiTin" id="LoaiTin">
                        @foreach($loaitin as $lt)
                            <option value="{{$lt->id}}">{{$lt->Ten}}</option>
                        @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Tiêu đề</label>
                        <input class="form-control" name="TieuDe" placeholder="Nhập tiêu đề" />
                    </div>
                    
                    <div class="form-group">
                        <label>Tóm tắt</label>
                        <textarea id="demo" class="form-control ckeditor" rows="3" name="TomTat"></textarea>
                    </div>

                    <div class="form-group">
                        <label>Nội dung</label>
                        <textarea id="demo" class="form-control ckeditor" rows="5" name="NoiDung"></textarea>
                    </div>

                    <div class="form-group">
                        <label>Hình ảnh</label>
                        <input type="file" name="HinhAnh" id="HinhAnh">
                        <p id="image_upload">fdytf</p>
                    </div>

                    <div class="form-group">
                        <label>Nổi bật</label>
                        <label class="radio-inline">
                            <input name="NoiBat" value="0" checked="" type="radio">Không
                        </label>
                        <label class="radio-inline">
                            <input name="NoiBat" value="1" type="radio">Có
                        </label>
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

@section('script')
    <script>
        $(document).ready(function(){

            $("#TheLoai").change(function(){

                var idTheLoai = $(this).val();

                $.get('admin/ajax/loaitin/'+idTheLoai, function(data){

                        $("#LoaiTin").html(data);
                });

            });
            
            // update file by ajax to server

           $("#HinhAnh").change(function () {          
              
            //var form = document.forms.namedItem("formaddnew"); // high importance!, here you need change "yourformname" with the name of your form
            var formdata = new FormData($('formaddnew')[0]);

            console.log(formdata);
             $.ajax({
                type: 'post',
                url: 'admin/upload/hinhanhtintuc',
                data: formdata,
                enctype: 'multipart/form-data',
                success: function (data) {
                        alert(data);
                },
                processData: false,
                contentType: file.type
              });

              /* $.post('admin/upload/hinhanhtintuc',{cmd: form_data}, function (result) {
                      
                        alert("Thêm Menu Thành công");
                    }
                );*/

            });           


        });
    </script>
@endsection