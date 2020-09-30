@extends('admin.layout.index')

@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Tin tức
                    <small>{{$news->TieuDe}}</small>
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

                <form action="{{route('postSuaNews',$news->id)}}" method="POST" enctype = "multipart/form-data" >
                <input type="hidden" name="_token" value="{{csrf_token()}}">

                    <div class="form-group">
                        <label>Thể loại</label>
                        <select class="form-control" name="TheLoai" id="TheLoai">
                        <option value="">-----Chọn thể loại -----</option>
                        @foreach($theloai as $tl)
                            <option 
                            @if($news->loaitin->theloai->id == $tl->id)
                                {{"selected"}}
                            @endif
                            value="{{$tl->id}}">{{$tl->Ten}}</option>
                        @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Loại tin</label>
                        <select class="form-control" name="LoaiTin" id="LoaiTin">
                        @foreach($loaitin as $lt)
                            <option 
                             @if($news->loaitin->id == $lt->id)
                                {{"selected"}}
                            @endif
                            value="{{$lt->id}}">{{$lt->Ten}}</option>
                        @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Tiêu đề</label>
                        <input class="form-control" name="TieuDe" placeholder="Nhập tiêu đề" value="{{$news->TieuDe}}" />
                    </div>
                    
                    <div class="form-group">
                        <label>Tóm tắt</label>
                        <textarea id="1" class="form-control ckeditor" rows="3" name="TomTat">{{$news->TomTat}}</textarea>
                    </div>

                    <div class="form-group">
                        <label>Nội dung</label>
                        <textarea id="2" class="form-control ckeditor" rows="5" name="NoiDung">{{$news->NoiDung}}</textarea>                       
                    </div>                    

                    <div class="form-group">
                        <label>Hình ảnh</label>
                        <img src="image/news/{{$news->Hinh}}"><br>
                        <input type="file" name="Hinh"/>
                     
                    </div>

                    <div class="form-group">
                        <label>Nổi bật</label>
                        <label class="radio-inline">
                            <input 
                            @if($news->NoiBat == 0)
                                {{"checked"}}
                            @endif
                            name="NoiBat" value="0" checked="" type="radio">Không
                        </label>
                        <label class="radio-inline">
                            <input 
                            @if($news->NoiBat == 1)
                                {{"checked"}}
                            @endif
                            name="NoiBat" value="1" type="radio">Có
                        </label>
                    </div>
                    <div class="form-group">
                        <label>Comments Plugins - IFrame</label>
                        <textarea class="form-control" name="comments" placeholder=" Đặt mã này ở bất cứ đâu mà bạn muốn plugin xuất hiện trên trang." >{{$news->comments}}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Like_button Plugins - IFrame</label>
                        <textarea class="form-control" name="like_button" placeholder=" Đặt mã này ở bất cứ đâu mà bạn muốn plugin xuất hiện trên trang." >{{$news->like_button}}</textarea>
                    </div>

                    <div class="form-group">
                        <label>Share_Button Plugins - IFrame</label>
                        <textarea class="form-control" name="share_button" placeholder=" Đặt mã này ở bất cứ đâu mà bạn muốn plugin xuất hiện trên trang." >{{$news->share_button}}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Send_Button Plugins - IFrame</label>
                        <textarea class="form-control" name="send_button" placeholder=" Đặt mã này ở bất cứ đâu mà bạn muốn plugin xuất hiện trên trang." >{{$news->send_button}}</textarea>
                    </div>

                    <div class="form-group">
                        <label>Follow_Button Plugins - IFrame</label>
                        <textarea class="form-control" name="follow_button" placeholder=" Đặt mã này ở bất cứ đâu mà bạn muốn plugin xuất hiện trên trang." >{{$news->follow_button}}</textarea>
                    </div>
                    <button type="submit" class="btn btn-default">Sửa</button>
                    <button type="reset" class="btn btn-default">Làm mới</button>
                </form>
            </div>
        </div>
        <!-- /.row -->

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Comment
                    <small>Danh sách</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            @if(session('thongbao'))
                <div class="alert alert-success">{{session('thongbao')}}</div>
            @endif
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Người dùng</th>
                        <th>Nội dung</th>
                        <th>Ngày đăng</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($news->comment as $cm)
                    <tr class="odd gradeX" align="center">
                        <td>{{$cm->id}}</td>
                        <td>{{$cm->user->name}}</td>
                        <td>{{$cm->NoiDung}}</td>
                        <td>{{$cm->created_at}}</td>
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/comment/xoa/{{$cm->id}}/{{$news->id}}"> Delete</a></td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/comment/sua/{{$cm->id}}/{{$news->id}}">Edit</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.row comment -->
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