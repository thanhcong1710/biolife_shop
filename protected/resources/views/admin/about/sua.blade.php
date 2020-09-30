 @extends('admin.layout.index')

 @section('content')
 <div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Giới thiệu về đơn vị
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
                <form action="{{route('postSuaAbout',$about->id)}}" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">

                    <div class="form-group">
                        <label>Tên</label>
                        <input required class="form-control" name="name" placeholder="Điền tên"  value="{{$about->name}}" />
                    </div>
                    <div class="form-group">
                    	<label>Năm</label>
                        <div class="input-group date" data-provide="datepicker">
		    <input type="text" class="form-control" name="year" value="{{date('d/m/Y',strtotime($about->year))}}">
		    <div class="input-group-addon">
		        <span class="glyphicon glyphicon-th"></span>
		    </div>
		</div>
                    </div>   
                    <div class="form-group">
                        <label>Phone</label>
                        <input required class="form-control" name="phone" placeholder="Điền số điện thoại"  value="{{$about->phone}}" type="number" />
                    </div> 
                     <div class="form-group">
                        <label>Fax</label>
                        <input  class="form-control" name="fax" placeholder="Điền số fax"  value="{{$about->fax}}" type="number" />
                    </div> 
                    <div class="form-group">
                        <label>Email</label>
                        <input required class="form-control" name="email" placeholder="Điền email"  value="{{$about->email}}" type="email" />
                    </div> 
                    <div class="form-group">
                        <label>Website</label>
                        <input  class="form-control" name="website" placeholder="Điền địa chỉ trang web công ty"  value="{{$about->website}}" />
                    </div> 
                    <div class="form-group">
                        <label>Địa chỉ</label>
                        <textarea required class="form-control" name="address" placeholder="Điền địa chỉ" >{{$about->address}}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Google Map</label>
                        <textarea  class="form-control" name="googlemap">{{$about->googlemap}}</textarea>
                    </div> 

                    <div class="form-group">
                        <label>Ảnh</label>
                        <img src="image/about/{{$about->image}}">
                        <input  name="image"   type="file" />
                    </div> 

                     <div class="form-group">
                        <label>Nội dung</label>
                        <textarea required class="form-control ckeditor" name="description" placeholder="Điền địa chỉ" >{{$about->description}}</textarea>
                    </div> 
                    <div class="form-group">
                        <label>Kích hoạt</label>                      
                        <label class="radio-inline">
                            <input name="activi" value="1" type="radio" @if($about->activi == 1) {{'checked'}} @endif>Kích hoạt
                        </label>
                        <label class="radio-inline">
                            <input name="activi" value="0" type="radio" @if($about->activi == 0) {{'checked'}} @endif>Không
                        </label>
                    </div>

                    <button type="submit" class="btn btn-default">Sửa</button>
                    <button type="reset" class="btn btn-default">Làm mới</button>
                <form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>	                    
@endsection

@section('script')
	<script type="text/javascript">
		$(function () 
		{
			$.fn.datepicker.defaults.format = "dd/mm/yyyy";
	            	$('#datepicker').datepicker();
	            	altFormat: "dd-mm-yyyy";
	            });
	</script>
@endsection