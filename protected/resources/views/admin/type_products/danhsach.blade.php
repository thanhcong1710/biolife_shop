 @extends('admin.layout.index')

@section('content')
 <div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Loại sản phẩm
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
                        <th>Mô tả</th>      
                        <th>Hình ảnh</th>                               
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($type_products as $tp)
                        <tr class="odd gradeX" align="center">
                            <td>{{$tp->id}}</td>
                            <td>{{$tp->name}}</td>
                            <td>{{$tp->description}}</td>
                            <td><img width="200" src="image/product/{{$tp->image}}"></td>
                            <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="{{route('getXoaType_Products',$tp->id)}}"> Delete</a></td>
                            <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{{route('getSuaType_Products',$tp->id)}}">Edit</a></td>
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