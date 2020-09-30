@extends('admin.layout.index')

@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Sản phẩm
                    <small>thêm</small>
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

                <form action="{{route('postThemProducts')}}" method="POST" enctype = "multipart/form-data" >
                {{csrf_field()}}

                    <div class="form-group">
                        <label>Nhóm sản phẩm</label>
                        <select class="form-control" name="id_type_products" id="id_type_products">        
                        <option value="0">-----Nhóm sản phẩm -----</option>                
                        @foreach($type_products as $type_pro)
                            <option value="{{$type_pro->id}}"
                             @if(old('id_type_products') == $type_pro->id)
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
                        </select>
                    </div>


                    <div class="form-group">
                        <label>Tên</label>
                        <input required class="form-control" name="name" value="{{old('name')}}" placeholder="Nhập tên sản phẩm" />
                    </div>
                    
                    <div class="form-group">
                        <label>Mô tả</label>
                        <textarea required class="form-control ckeditor" rows="3" id="description" name="description" >{{old('description')}}</textarea>                      
                        
                    </div>                    
                    <div class="form-group">
                        <label>Giá nhập</label>
                        <input required type="number"  class="form-control" name="in_price" value="{{old('in_price')}}" placeholder="Nhập giá nhập" />
                    </div>
                    <div class="form-group">
                        <label>Lượng nhập vào</label>
                        <input required type="number"  class="form-control" name="quantity" value="{{old('quantity')}}" placeholder="Số lượng nhập" />
                    </div>
                    <div class="form-group">
                        <label>Giá bán</label>
                        <input required type="number" class="form-control" name="unit_price" value="{{old('unit_price')}}" placeholder="Nhập giá sản phẩm" />
                    </div>
                    <div class="form-group">
                        <label>Giá khuyến mại</label>
                        <input type="number"  class="form-control" name="promotion_price" value="{{old('promotion_price')}}" placeholder="Nhập giá khuyến mại" />
                    </div>

                    <div class="form-group">
                        <label>Hình ảnh</label>
                        <input type="file" name="image"/>                     
                    </div>

                    <div class="form-group">
                        <label>Đơn vị tính</label>
                        <select class="form-control" name="unit" id="unit">
                            @foreach($donvitinh as $dv)
                            <option value="{{$dv->id}}"
                             @if(old('donvitinh') == $dv->id)
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
                            <input name="new" value="1" type="radio" checked="">Mới
                        </label>
                        <label class="radio-inline">
                            <input name="new" value="0"  type="radio">Cũ
                        </label>
                    </div>

                    <button type="submit" class="btn btn-default">Thêm mới</button>
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