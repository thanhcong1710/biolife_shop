 @extends('admin.layout.index')

@section('content')

<style type="text/css">
    #banner_slide{
        width: 300px;
    }
</style>
 <div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Giới thiệu
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
                        <th>Năm</th>
                        <th>Điện thoại</th>
                        <th>Email</th>
                        <th>Fax</th>
                        <th>Website</th>
                        <th>Hình</th>
                        <th>Kích hoạt</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($about as $ab)
                    <tr class="odd gradeX" align="center">
                        <td>{{$ab->id}}</td>
                        <td>{{$ab->name}}</td>
                        <td>{{$ab->year}}</td>
                        <td>{{$ab->phone}}</td>
                        <td>{{$ab->email}}</td>
                        <td>{{$ab->fax}}</td>
                        <td>{{$ab->website}}</td>
                        <td>
                            <img id = "banner_slide" width="200" height="200" src="image/about/{{$ab->image}}">
                        </td>                       
                        <td>
                            @if($ab->activi == 0)
                            {{'Không'}}
                            @elseif($ab->activi == 1)
                            {{'Kích hoạt'}}
                            @endif
                        </td>
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="{{route('getXoaAbout',$ab->id)}}"> Delete</a></td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{{route('getSuaAbout',$ab->id)}}">Edit</a></td>
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