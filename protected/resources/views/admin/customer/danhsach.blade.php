 @extends('admin.layout.index')

@section('content')
 <div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Khách hàng
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
                        <th>Giới tính</th>
                        <th>Email</th>
                        <th>Địa chỉ</th>
                        <th>Điện thoại</th>
                        <th>Ghi chú</th>
                        <th>Hóa đơn</th>
                        <!-- <th>Delete</th>      -->                   
                    </tr>
                </thead>
                <tbody>
                @foreach($customer as $cus)
                    <tr class="odd gradeX" align="center">
                        <td>{{$cus->id}}</td>
                        <td>{{$cus->name}}</td>
                        <td>{{$cus->gender}}</td>
                        <td>{{$cus->email}}</td>
                        <td>{{$cus->address}}</td>
                        <td>{{$cus->phone}}</td>
                        <td>{{$cus->note}}</td>
                        <td class="center"><a href="{{route('getDanhSachBillsFormCustomer',$cus->id)}}"> hóa đơn</a></td>
                       <!--  <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="{{route('getXoaCustomer',$cus->id)}}"> Delete</a></td> -->
                       
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