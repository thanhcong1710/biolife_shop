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
              @if(session('loi'))
                <div class="alert alert-success">{{session('loi')}}</div>
            @endif

                <form action="{{route('postThemNews')}}" method="POST" enctype = "multipart/form-data" >
                {{csrf_field()}}

                    <div class="form-group">
                        <label>Thể loại</label>
                        <select class="form-control" name="TheLoai" id="TheLoai">
                        <option value="">-----Chọn thể loại -----</option>
                        @foreach($theloai as $tl)
                            <option value="{{$tl->id}}"
                             @if(old('TheLoai') == $tl->id)
                                {{'selected'}}
                                @endif
                            >
                            {{$tl->Ten}}</option>
                        @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Loại tin</label>
                        <select class="form-control" name="LoaiTin" id="LoaiTin">
                        @foreach($loaitin as $lt)
                            <option value="{{$lt->id}}"
                             @if(old('loaitin') == $lt->id)
                                {{'selected'}}
                                @endif
                            >{{$lt->Ten}}
                            </option>
                        @endforeach
                        </select>
                    </div>


                    <div class="form-group">
                        <label>Tiêu đề</label>
                        <input class="form-control" name="TieuDe" value="{{old('TieuDe')}}" placeholder="Nhập tiêu đề" />
                    </div>
                    
                    <div class="form-group">
                        <label>Tóm tắt</label>
                        <textarea id="" class="form-control ckeditor" rows="3" name="TomTat" >{{old('TomTat')}}</textarea>
                    </div>

                    <div class="form-group">
                        <label>Nội dung</label>
                        <textarea id="" class="form-control ckeditor" rows="5" name="NoiDung" >{{old('NoiDung')}}</textarea>
                    </div>

                    <div class="form-group">
                        <label>Hình ảnh</label>
                        <input type="file" name="Hinh"/>
                     
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
                </form>
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
            
           
        });
    </script>
@endsection