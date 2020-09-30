 @extends('admin.layout.index')

@section('content')
 <div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Sản phẩm bán chạy - 
                    <small><a class="btn-annp" href="{{route('getBanChayExport')}}"> <i class="fa fa-file-excel-o" aria-hidden="true"></i> Xuất Excel
            </a></small>
                </h1>
            </div>            

            <!-- /.col-lg-12 -->
            @if(session('thongbao'))
                <div class="alert alert-success">{{session('thongbao')}}</div>
            @endif
            <table class="table table-striped table-bordered table-hover" >
                <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Tên</th>
                        <th>Loại</th>
                        <th>Nhà SX</th>
                        <th>Số lượng nhập</th>
                        <th>Số lượng còn</th>
                        <th>Giá nhập</th>
                        <th>Hình</th>
                        <th>Đơn giá</th>
                        <th>Giá khuyến  mại</th> 
                        <th>Mới/cũ</th>                       
                    </tr>
                </thead>
                <tbody>
                @foreach($products_banchay as $pro)
                    <tr class="odd gradeX" align="center">
                        <td>{{$pro->products->id}}</td>
                        <td>{{$pro->products->name}}</td>
                         <td>{{$pro->products->type_products->name}}</td>
                        <td>
                        @if($pro->products->id_provider != 0)
                            {{$pro->products->provider->name}}
                        @endif
                        </td>   
                        <td>{{$pro->products->quantity}}</td>
                        <td>{{$pro->products->quantity-$pro->quantity}}</td>
                        <td>{{$pro->products->in_price}}</td>
                        <td><img width = "100px;" src="image/product/{{$pro->products->image}}"></td>
                        <td>{{number_format($pro->products->unit_price)}}</td>     
                        <td>{{number_format($pro->products->promotion_price)}}</td>                         
                       <td>
                        @if($pro->products->new == 0)
                            {{"cũ"}}
                        @else
                            {{"mới"}}
                        @endif
                        </td>                       
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div style="text-align:center;">{{$products_banchay->links()}}</div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>

@endsection
