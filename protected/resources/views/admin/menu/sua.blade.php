@extends('admin.layout.index')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Menu
                    <small>sửa</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
            <!-- alert info insert model-->
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
                <form action="{{route('postSuaMenu',$menu->id)}}" method="POST">
                    <input type="hidden" name="_token" value="{{csrf_token()}}"> 
                    <div class="form-group">
                        <label>Tên</label>
                        <input required class="form-control" name="name" placeholder="Nhập tên menu" value="{{$menu->name}}" />
                    </div>

                     <div class="form-group">
                        <label>Danh mục menu</label>
                        <select class="form-control" name="id_danhmucmenu" id="id_danhmucmenu">
                        @foreach($danhmucmenu as $dm)
                            <option 
                            @if(isset($menu->theloaimenu->danhmucmenu->id) and  $menu->theloaimenu->danhmucmenu->id == $dm->id)
                                {{"selected"}}
                            @endif
                            value="{{$dm->id}}">{{$dm->name}}
                            </option>
                        @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Thể loại menu</label>
                        <select class="form-control" name="id_theloaimenu" id="id_theloaimenu">
                        @if(isset($theloaimenu))
                        {
                            @foreach($theloaimenu as $tlmn)
                                <option 
                                 @if($menu->theloaimenu->id == $tlmn->id)
                                    {{"selected"}}
                                @endif
                                value="{{$tlmn->id}}">{{$tlmn->name}}</option>
                            @endforeach
                        }
                        @endif
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Route</label>
                        <input required class="form-control" name="route" placeholder="Nhập tên route" value="{{$menu->route}}" disabled="" />
                    </div> 
                    <div class="form-group">
                        <label>Path</label>
                        <input required class="form-control" name="path" placeholder="Nhập tên path" value="{{$menu->path}}" />
                    </div>
                    <div class="form-group">
                        <label>Action</label>
                        <input required class="form-control" name="action" placeholder="Nhập tên action" value="{{$menu->action}}" />
                    </div>    
                    <div class="form-group">
                        <label>Hiển thị</label>                        
                        <label class="radio-inline">
                            <input name="show" value="1" type="radio" 
                                 @if($menu->show == 1)
                                    {{'checked'}}
                                    @endif                                    
                            >có
                        </label>
                        <label class="radio-inline">
                            <input name="show" value="0"  type="radio"
                                @if($menu->show == 0)
                                    {{'checked'}}
                                    @endif
                                    
                            >không
                        </label>
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

            $("#id_danhmucmenu").change(function(){

                var id_danhmucmenu = $(this).val();

                $.get('admin/ajax/theloaimenu/'+id_danhmucmenu, function(data){

                        $("#id_theloaimenu").html(data);
                });

            });           
           
        });
    </script>
@endsection