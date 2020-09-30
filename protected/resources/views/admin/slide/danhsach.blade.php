 @extends('admin.layout.index')

@section('content')

<style type="text/css">
    #banner_slide{
        width: 400px;
    }
</style>
 <div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Slide
                    <small>danh sách</small>
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
                        <th>Tên</th>
                        <th>Hình</th>
                        <th>Nội dung</th>
                        <th>Đường dẫn</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($slide as $sl)
                    <tr class="odd gradeX" align="center">
                        <td>{{$sl->id}}</td>
                        <td>{{$sl->Ten}}</td>
                        <td>
                            <img id = "banner_slide" width="200" height="200" src="image/slide/{{$sl->Hinh}}">
                        </td>
                        <td>{{$sl->NoiDung}}</td>
                        <td>{{$sl->link}}</td>
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="{{route('getXoaSlide',$sl->id)}}"> Delete</a></td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{{route('getSuaSlide',$sl->id)}}">Edit</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>

@endsection