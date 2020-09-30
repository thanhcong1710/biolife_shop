 @extends('admin.layout.index')
@section('content')
 <div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Thể loại menu
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
                        <th>Tên</th>
                        <th>Danh mục</th>
                        <th>Route</th>
                        <th>Path</th>
                        <th>Action</th>
                        <th>Hiển thị</th>                                  
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($theloaimenu as $tl)
                        <tr class="odd gradeX" align="center">
                            <td>{{$tl->id}}</td>
                            <td>{{$tl->name}}</td>
                            <td>{{$tl->danhmucmenu->name}}</td>
                            <td>{{$tl->route}}</td>
                            <td>{{$tl->path}}</td>
                            <td>{{$tl->action}}</td>
                            <td>@if($tl->show == 1)
                            	{{'Hiển thị'}}
                            	@else {{'Ẩn'}}
                            	@endif
                            </td>
                            <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="{{route('getXoaTheLoaiMenu',$tl->id)}}"> Delete</a></td>
                            <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{{route('getSuaTheLoaiMenu',$tl->id)}}">Edit</a></td>
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