<h1>{{$noidung}}</h1>
<div>
    <div hidden class="alert alert-success" id="thongbao"></div>  
    <span>Mã hóa đơn: {{$bills->id}}</span>
    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
        <thead>
            <tr align="center">                
                 <th>Tên sản phẩm</th>
                <th>Số lượng</th>
                <th>Đơn giá</th>               
            </tr>
        </thead>
        <tbody>
        @foreach($bills_detail as $bill)
            <tr class="odd gradeX" align="center">                        
                <td>{{$bill->products->name }}</td>
                <td>{{$bill->quantity}}</td>      
                <td>{{$bill->unit_price}}</td>               
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
<div><i>Cảm ơn quý khách hàng đã tin tưởng và đặt mua</i></div>