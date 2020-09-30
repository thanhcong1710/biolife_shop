 @extends('admin.layout.index')

@section('content')
 <div id="page-wrapper">
    <div class="container-fluid">
    
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Hóa đơn gốc - 
                    <small><a class="btn-annp" href="{{route('getBillsExport')}}"> <i class="fa fa-file-excel-o" aria-hidden="true"></i> Xuất Excel
            </a></small>
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
                        <th>Khách hàng</th>
                         <th>Ngày đặt hàng</th>
                        <th>Tổng tiền</th>
                        <th>Thanh toán</th>
                        <th>Ghi chú</th>
                        <th>Chi tiết</th> 
                        <th>Chuyển hàng</th>                       
                        <!-- <th>Delete</th> -->
                    </tr>
                </thead>
                <tbody>
                @foreach($bills as $bill)
                    <tr class="odd gradeX" align="center">
                        <td>{{$bill->id}}</td>
                        <td>{{$bill->customer->name}}</td>                       
                        <td>{{date("d/m/y", strtotime($bill->date_order)) }}</td>
                        <td>{{number_format($bill->total)}}</td>      
                        <td>{{$bill->payment}}</td>       
                        <td>{{$bill->note}}</td> 
                        <th><a href="admin/bill_detail/detail/{{$bill->id}}">Chi tiết</a></th> 
                        <td style="text-align:center;">
                            <input type="checkbox" onclick="checkBills({{$bill->id}})" name="check_tt_{{$bill->id}}" id="check_tt_{{$bill->id}}" 
                            @if($bill->check_bills == 1)
                                {{'checked'}}
                            @endif
                            >
                        </td>
                       <!--  <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="{{route('getXoaBills',$bill->id)}}"> Delete</a></td>           -->             
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

@section('script')
    <script>
   
    function checkBills(id='')
    {
        if ($('#check_tt_'+id).is(":checked")) {
            var tt = 1;           
        }
        else
            var tt = 0;
            $.get('admin/ajax/checkBills/'+id+'/'+tt, function(data){
                       alert(data);
                       location.reload(true);                       
                });           
    }   
    </script>
@endsection