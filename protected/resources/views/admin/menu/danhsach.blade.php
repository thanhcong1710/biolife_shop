 @extends('admin.layout.index')
@section('content')
 <div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Menu
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
                        <th>Thể loại</th>
                        <th>Route</th>
                        <th>Path</th>
                        <th>Action</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($menu as $me)
                        <tr class="odd gradeX" align="center">
                            <td>{{$me->id}}</td>
                            <td>{{$me->name}}</td>
                            <td>@if(isset($me->theloaimenu->danhmucmenu->name))
                                    {{$me->theloaimenu->danhmucmenu->name}}
                                    @else
                                    {{'--'}}
                                    @endif
                            </td>
                            <td>@if(isset($me->theloaimenu->name))
                                    {{$me->theloaimenu->name}}
                                    @else
                                    {{'--'}}
                                    @endif
                            </td>
                            <td>{{$me->route}}</td>
                            <td>{{$me->path}}</td>
                            <td>{{$me->action}}</td>
                            <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="{{route('getXoaMenu',$me->id)}}"> Delete</a></td>
                            <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{{route('getSuaMenu',$me->id)}}">Edit</a></td>
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