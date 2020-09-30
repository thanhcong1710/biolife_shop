 @extends('admin.layout.index')

 @section('content')
 <div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Facebook Plugins Social
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
                <form action="{{route('postSuaFacebookPluginsSocial')}}" method="POST">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="id" value="{{$facebookpluginssocial->id}}">
                    <span><a target="_blank"  href = 'https://developers.facebook.com/docs/plugins/'>Đường dẫn lấy mã của bạn</a> </span>
                    <div class="form-group">
                        <label>SDK-Javascipt</label>
                        <textarea required class="form-control" name="sdk_javascript" placeholder=" Include the SDK JavaScript on your page once, ideally right after the opening <body> tag." >{{$facebookpluginssocial->sdk_javascript}}</textarea>
                    </div>
                    
                    <div class="form-group">
                        <label>Google Map</label>
                        <textarea  class="form-control" name="googlemap" placeholder="Google Map" >{{$facebookpluginssocial->googlemap}}</textarea>
                    </div> 
                    <div class="form-group">
                        <label>Mã chát online</label>
                        <textarea  class="form-control" name="chatonline" placeholder="Điền chát online" >{{$facebookpluginssocial->chatonline}}</textarea>
                    </div> 

                    <div class="form-group">
                        <label>Comments Plugins - IFrame</label>
                        <textarea class="form-control" name="comments" placeholder=" Đặt mã này ở bất cứ đâu mà bạn muốn plugin xuất hiện trên trang." >{{$facebookpluginssocial->comments}}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Like_button Plugins - IFrame</label>
                        <textarea class="form-control" name="like_button" placeholder=" Đặt mã này ở bất cứ đâu mà bạn muốn plugin xuất hiện trên trang." >{{$facebookpluginssocial->like_button}}</textarea>
                    </div>

                    <div class="form-group">
                        <label>Share_Button Plugins - IFrame</label>
                        <textarea class="form-control" name="share_button" placeholder=" Đặt mã này ở bất cứ đâu mà bạn muốn plugin xuất hiện trên trang." >{{$facebookpluginssocial->share_button}}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Send_Button Plugins - IFrame</label>
                        <textarea class="form-control" name="send_button" placeholder=" Đặt mã này ở bất cứ đâu mà bạn muốn plugin xuất hiện trên trang." >{{$facebookpluginssocial->send_button}}</textarea>
                    </div>

                    <div class="form-group">
                        <label>Follow_Button Plugins - IFrame</label>
                        <textarea class="form-control" name="follow_button" placeholder=" Đặt mã này ở bất cứ đâu mà bạn muốn plugin xuất hiện trên trang." >{{$facebookpluginssocial->follow_button}}</textarea>
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