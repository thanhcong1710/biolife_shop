@extends('admin.layout.index')

@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Sản phẩm
                    <small>sửa</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
            @if(count($errors) > 0)
                <div class="alert alert-danger">
                    @foreach($errors->all() as $er)
                        {{$er}}<br>
                    @endforeach
                </div>
            @endif

            @if(session('thongbao'))
                <div class="alert alert-success">{{session('thongbao')}}</div>
            @endif
              @if(session('loi'))
                <div class="alert alert-success">{{session('loi')}}</div>
            @endif

                <form action="{{route('postSuaProducts',$products->id)}}" method="POST" enctype = "multipart/form-data" >
                {{csrf_field()}}

                    <div class="form-group">
                        <label>Nhóm sản phẩm</label>
                        <select class="form-control" name="id_type_products" id="id_type_products">        
                        <option value="0">-----Nhóm sản phẩm -----</option>                
                        @foreach($type_products as $type_pro)
                            <option value="{{$type_pro->id}}"
                             @if( $products->id_type_products == $type_pro->id)
                                {{'selected'}}
                                @endif
                            >
                            {{$type_pro->name}}</option>
                        @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Nhà cung cấp</label>
                        <select class="form-control" name="id_provider" id="id_provider">
                        <option value="0">-----Nhà cung cấp -----</option>  
                        @foreach($provider as $provi)
                            <option value="{{$provi->id}}"
                             @if( $products->id_provider == $provi->id)
                                {{'selected'}}
                                @endif
                            >
                            {{$provi->name}}</option>
                        @endforeach                    
                        </select>
                    </div>


                    <div class="form-group">
                        <label>Tên</label>
                        <input class="form-control" name="name" value="{{$products->name}}" placeholder="Nhập tên sản phẩm" />
                    </div>
                    
                    <div class="form-group">
                        <label>Mô tả</label>
                        <textarea class="form-control ckeditor" rows="3" id="description" name="description" >{{$products->description}}</textarea>                      
                        
                    </div>
                    <div class="form-group">
                        <label>Giá nhập</label>
                        <input required type="number"  class="form-control" name="in_price" value="{{$products->in_price}}" placeholder="Nhập giá nhập" />
                    </div>
                    <div class="form-group">
                        <label>Lượng nhập vào</label>
                        <input required type="number"  class="form-control" name="quantity" value="{{$products->quantity}}" placeholder="Số lượng nhập" />
                    </div>
                    <div class="form-group">
                        <label>Giá</label>
                        <input type="number" class="form-control" name="unit_price" value="{{$products->unit_price}}" placeholder="Nhập giá sản phẩm" />
                    </div>

                    <div class="form-group">
                        <label>Giá khuyến mại</label>
                        <input type="number"  class="form-control" name="promotion_price" value="{{$products->promotion_price}}" placeholder="Nhập giá khuyến mại" />
                    </div>

                    <div class="form-group">
                        <label>Hình ảnh</label>
                        <span><img src="image/product/{{$products->image}}"></span>
                        <input type="file" name="image"/>                     
                    </div>

                    <div class="form-group">
                        <label>Đơn vị tính</label>
                        <select class="form-control" name="unit" id="unit">
                            @foreach($donvitinh as $dv)
                            <option value="{{$dv->id}}"
                             @if($products->unit == $dv->id)
                                {{'selected'}}
                                @endif
                            >
                            {{$dv->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Sản phẩm</label>                        
                        <label class="radio-inline">
                            <input name="new" value="1" type="radio" 
                                 @if($products->new == 1)
                                    {{'checked'}}
                                    @endif
                                    
                            >Mới
                        </label>
                        <label class="radio-inline">
                            <input name="new" value="0"  type="radio"
                                @if($products->new == 0)
                                    {{'checked'}}
                                    @endif
                                    
                            >Cũ
                        </label>
                    </div>

                    <div class="form-group">
                        <label>Comments Plugins - IFrame</label>
                        <textarea class="form-control" name="comments" placeholder=" Đặt mã này ở bất cứ đâu mà bạn muốn plugin xuất hiện trên trang." >{{$products->comments}}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Like_button Plugins - IFrame</label>
                        <textarea class="form-control" name="like_button" placeholder=" Đặt mã này ở bất cứ đâu mà bạn muốn plugin xuất hiện trên trang." >{{$products->like_button}}</textarea>
                    </div>

                    <div class="form-group">
                        <label>Share_Button Plugins - IFrame</label>
                        <textarea class="form-control" name="share_button" placeholder=" Đặt mã này ở bất cứ đâu mà bạn muốn plugin xuất hiện trên trang." >{{$products->share_button}}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Send_Button Plugins - IFrame</label>
                        <textarea class="form-control" name="send_button" placeholder=" Đặt mã này ở bất cứ đâu mà bạn muốn plugin xuất hiện trên trang." >{{$products->send_button}}</textarea>
                    </div>

                    <div class="form-group">
                        <label>Follow_Button Plugins - IFrame</label>
                        <textarea class="form-control" name="follow_button" placeholder=" Đặt mã này ở bất cứ đâu mà bạn muốn plugin xuất hiện trên trang." >{{$products->follow_button}}</textarea>
                    </div>
                    <button type="submit" class="btn btn-default">Sửa</button>
                    <button type="reset" class="btn btn-default">Làm mới</button>
                </form>
            </div>
        </div>
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