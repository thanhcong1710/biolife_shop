 @extends('admin.layout.index')

@section('content')
 <div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Sản phẩm
                    <small>Danh sách</small>
                </h1>
            </div>
            <div>
                <form action="{{route('postDanhSachProducts')}}" method="POST" enctype="multipart/form-data">  
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div style="float: left;">
                     
                        <select class="form-control" name="id_type_products" id="id_type_products">        
                        <option value="0">-----Nhóm sản phẩm -----</option>                
                        @foreach($type_products as $type_pro)
                            <option value="{{$type_pro->id}}"
                             @if(isset($id_type_products) && $id_type_products == $type_pro->id)
                                {{'selected'}}
                                @endif
                            >
                            {{$type_pro->name}}</option>
                        @endforeach
                        </select>
                    </div>
                    <div style="float: left;">
                       
                        <select class="form-control" name="id_provider" id="id_provider">        
                        <option value="0">-----Nhà cung cấp -----</option>                
                        @foreach($provider as $pro)
                            <option value="{{$pro->id}}"
                             @if(isset($id_provider) && $id_provider == $pro->id)
                                {{'selected'}}
                                @endif
                            >
                            {{$pro->name}}</option>
                        @endforeach
                        </select>
                    </div>

                    <?php
                       // echo old('id_provider');exit();
                    ?>
                   <div style="float: left;margin-left: 4px;"><button type="submit" class="btn btn-default">Tìm</button></div>
                </form>
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
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($products as $pro)
                    <tr class="odd gradeX" align="center">
                        <td>{{$pro->id}}</td>
                        <td>{{$pro->name}}</td>
                         <td>{{$pro->type_products->name}}</td>
                        <td>
                        @if($pro->id_provider != 0)
                            {{$pro->provider->name}}
                        @endif
                        </td>   
                        <td>{{$pro->quantity}}</td>
                        <td>{{$pro->quantity-$pro->quantity_sold}}</td>
                        <td>{{$pro->in_price}}</td>
                        <td><img width = "100px;" src="image/product/{{$pro->image}}"></td>
                        <td>{{number_format($pro->unit_price)}}</td>     
                        <td>{{number_format($pro->promotion_price)}}</td>                         
                       <td>
                        @if($pro->new == 0)
                            {{"cũ"}}
                        @else
                            {{"mới"}}
                        @endif
                        </td>
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="{{route('getXoaProducts',$pro->id)}}"> Delete</a></td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{{route('getSuaProducts',$pro->id)}}">Edit</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div style="text-align:center;">{{$products->links()}}</div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>

@endsection

@section('script')
    <script>
        $(document).ready(function(){

            $("#id_type_products").change(function(){

                var id_type_products = $(this).val();

                $.get('admin/ajax/provider/'+id_type_products, function(data){

                        $("#id_provider").html(data);
                });
            });   
        });       
    </script>

@endsection