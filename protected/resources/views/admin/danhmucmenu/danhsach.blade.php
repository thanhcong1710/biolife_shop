 @extends('admin.layout.index')
@section('content')
 <div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Danh mục menu
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
                        <th>Route</th>
                        <th>Path</th>
                        <th>Action</th>
                        <th>Hiển thị</th>                                  
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($danhmucmenu as $dm)
                        <tr class="odd gradeX" align="center">
                            <td>{{$dm->id}}</td>
                            <td>{{$dm->name}}</td>
                            <td>{{$dm->route}}</td>
                            <td>{{$dm->path}}</td>
                            <td>{{$dm->action}}</td>
                            <td>@if($dm->show == 1)
                            	{{'Hiển thị'}}
                            	@else {{'Ẩn'}}
                            	@endif
                            </td>
                            <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="{{route('getXoaDanhMucMenu',$dm->id)}}"> Delete</a></td>
                            <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{{route('getSuaDanhMucMenu',$dm->id)}}">Edit</a></td>
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