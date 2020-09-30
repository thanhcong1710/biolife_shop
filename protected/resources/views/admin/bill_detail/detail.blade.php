 @extends('admin.layout.index')

@section('content')
 <div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Chi tiết - 
                    <small>{{$bills->customer->name}}
                    @if($bills->check_bills == 1)
                    - Đơn hàng đã được gửi đi - Điều chỉnh đơn <input type="checkbox" name="re_check" id="re_check"><small style="color:red;"> (Chú ý: Khi nhấn vào điều chỉnh đơn hàng phải gửi lại đơn mới trừ kho)
                   </small>
                    @endif
                   </small>
                   
                </h2>
            </div>
            <!-- /.col-lg-12 -->
            <div hidden class="alert alert-success" id="thongbao"></div>
            @if(session('thongbao'))
                <div class="alert alert-success">{!!session('thongbao')!!}</div>
            @endif

            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Mã hóa đơn gốc</th>
                         <th>Tên sản phẩm</th>
                        <th>Số lượng</th>
                        <th>Đơn giá</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody >
                @foreach($bills_detail as $bill)
                    <tr class="odd gradeX" align="center">
                        <td>{{$bill->id}}</td>
                        <td>{{$bill->id_bills}}</td>                       
                        <td>{{$bill->products->name }}</td>
                        <td>                           
                            <select class="soluong" id="soluong_{{$bill->id}}" onchange="reTotal({{$bill->id}})" 
                            @if($bills->check_bills == 1) {{"disabled"}} @endif
                            >
                                @for($i=1;$i<=10;$i++)
                                    <option value='{{$i}}'
                                        @if($bill->quantity == $i)
                                        {{'selected'}}
                                        @endif
                                    >{{$i}}</option>
                                @endfor
                            </select>  

                        </td>      
                        <td>{{$bill->unit_price}}</td>
                        <td class="center td_delete" id="td_delete" @if($bills->check_bills == 1) {{'hidden'}} @endif><i class="fa fa-trash-o  fa-fw"></i><a href="admin/bill_detail/xoa/{{$bill->id}}/{{$bill->id_bills}}"> Delete</a></td>                       
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div style=" width:300px;margin-left:-15px;">
            <span>Tên khách hàng: {{$bills->customer->name}}</span><br>
            <span>Tổng tiền: {{number_format($bills->total)}} (VNĐ)</span><br>
            <span>Địa chỉ: {{$bills->customer->address}}</span><br>
            <span>Email: {{$bills->customer->email}}</span><br>
            <span>Phone: {{$bills->customer->phone}}</span>
        </div>
        <div @if($bills->check_bills == 1) {{'hidden'}} @endif id = 'content_mail'>    
            <form action="admin/bill_detail/chuyenhang" method="post" class="beta-form-checkout">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <input type="hidden" name="id_bills" id = "id_bills" value="{{$bills->id}}">
            <input type="hidden" name="email" id = "email" value="{{$bills->customer->email}}">
                <div class="row">    
                        <div class="form-block">
                            <label for="adress">Nội dung chuyển hàng</label>
                             <textarea class="form-control " rows="3" id="" name="noidung" >{{old('noidung')}}</textarea>
                        </div>
                        <div class="form-block">
                            <button type="submit" class="btn btn-primary">Chuyển hàng</button>
                        </div>
                </div>
            </form>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>

@endsection

@section('script')
    <script>  
    $(document).ready(function()
    {      
        $("#re_check").change(function(){
            if($("#re_check").is(":checked"))
            {               
               $(".soluong").removeAttr('disabled');

                $("#content_mail").show();

                $(".td_delete").show();
                // trừ lượng hàng trong đơn để gửi lại
                var id = $("#id_bills").val();               
                var tt = 0;
                $.get('admin/ajax/checkBills/'+id+'/'+tt, function(data){
                       alert(data);
                       location.reload(true);                       
                });

            }
            else{
                $("#content_mail").hide();
                $(".soluong").attr('disabled','');
                $(".td_delete").hide();
            }
        });       

    });

        function reTotal(id='')
        {
            var soluong = $("#soluong_"+id).val();

            $.get('admin/ajax/changeTotal/'+id+'/'+soluong, function(data){
                           location.reload();
                    });
            }        
    </script>
@endsection