@extends('admin.layout.index')

@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Tin tức
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
                
                <form action="admin/upload/hinhanhtintuc" method="POST" enctype = "multipart/form-data" id="formaddnew" name="formaddnew">
                <input type="hidden" name="_token" value="{{csrf_token()}}">  
                    <div class="form-group">
                        <label>Hình ảnh</label>
                        <input type="file" name="HinhAnh" id="HinhAnh">                        
                    </div> 
                <form>
                <div class="form-group"><button class="btn btn-success upload-image" type="submit">Upload Image</button>
                    </div>
                <div class="alert alert-danger print-error-msg" style="display:none">
                    <ul></ul>
                </div>
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

            $("#TheLoai").change(function(){

                var idTheLoai = $(this).val();

                $.get('admin/ajax/loaitin/'+idTheLoai, function(data){

                        $("#LoaiTin").html(data);
                });

            });
            $(".upload-image").click(function(){

              var file_data = document.getElementById('formaddnew').files[0];
                if (file_data == null) return; // chưa chọn file  
                var form_data = new FormData();
                form_data.append("HinhAnh", file_data)

            $.ajax({
                  url:'admin/upload/hinhanhtintuc',
                  data:form_data,
                 // dataType:'json',
                  async:false,
                  type:'post',
                 /* processData: false,
                  contentType: false,*/
                  success:function(response){
                    console.log(response);
                  },
                });
             });
            
            /*$("body").on("click",".upload-image",function(e){
                $(this).parents("form").ajaxForm(options);
              });

            var options = { 
                complete: function(response) 
                {
                    if($.isEmptyObject(response.responseJSON.error)){
                        $("input[name='title']").val('');
                        alert('Image Upload Successfully.');
                    }else{
                        printErrorMsg(response.responseJSON.error);
                    }
                }
            };

            function printErrorMsg (msg) {
                $(".print-error-msg").find("ul").html('');
                $(".print-error-msg").css('display','block');
                $.each( msg, function( key, value ) {
                    $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
                });
            }*/

              /*  var file_data = document.getElementById('HinhAnh').files[0];
                if (file_data == null) return; // chưa chọn file  
                var form_data = new FormData();
                form_data.append("HinhAnh", file_data)

                var _token = $("form[name='formaddnew']").find("input[name='_token']").val();
                
               $.ajax({
                       url : 'admin/upload/hinhanhtintuc',
                       type : 'POST',
                       cache:false,
                       data : {"_token":_token},
                       //processData: false,  // tell jQuery not to process the data
                       //contentType: false,  // tell jQuery not to set contentType
                       success : function(data) {
                           //console.log(data);
                           alert(data);
                       }
                });*/

               // kiểm tra các phần tử
          

 
        });      
       
    </script>
@endsection