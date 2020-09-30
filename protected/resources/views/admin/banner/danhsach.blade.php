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
                <h1 class="page-header">Banner
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
                        <th>Vị trí</th>
                        <th>Kích hoạt</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($banner as $ban)
                    <tr class="odd gradeX" align="center">
                        <td>{{$ban->id}}</td>
                        <td>{{$ban->name}}</td>
                        <td>
                            <img id = "banner_slide" width="200" height="200" src="image/banner/{{$ban->image}}">
                        </td>
                        <td>{{$ban->content}}</td>
                        <td>{{$ban->link}}</td>

                        <td>
                            @if($ban->type == 0)
                            {{'Trên'}}
                            @elseif($ban->type == 1)
                            {{'Trên - trái'}}
                            @elseif($ban->type == 2)
                            {{'Trái'}}
                            @else
                            {{'Phải'}}
                            @endif
                        </td>
                        <td>
                            @if($ban->activi == 0)
                            {{'Không'}}
                            @elseif($ban->activi == 1)
                            {{'Kích hoạt'}}
                            @endif
                        </td>
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="{{route('getXoaBanner',$ban->id)}}"> Delete</a></td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{{route('getSuaBanner',$ban->id)}}">Edit</a></td>
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