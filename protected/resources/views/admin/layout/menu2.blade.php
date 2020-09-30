<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li class="sidebar-search">
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button">
                            <i class="fa fa-search"></i>
                        </button>
                    </span>
                </div>
                <!-- /input-group -->
            </li>
          
            @foreach($danhmucmenu as $dm)
                <li>
                    <a href=""><i class="fa fa-dashboard fa-fw"></i> <b>{{$dm->name}}</b></a>
                </li>                
                @foreach($dm->theloaimenu as $tlmn)
                <li>
                    <a href=""><i class="fa fa-bar-chart-o fa-fw"></i> {{$tlmn->name}}<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        @foreach($menu->getMenu($tlmn->id) as $mn)
                            <li>
                                <a href="{{route($mn->route)}}">{{$mn->name}}</a>
                            </li>
                        @endforeach
                    </ul>
                <!-- /.nav-second-level -->
                </li>

                @endforeach
            @endforeach



















            <li>
                <a href=""><i class="fa fa-dashboard fa-fw"></i> <b>Bán hàng</b></a>
            </li>
             <!-- danh sách loại sản phẩm-->
            <li>
                <a href=""><i class="fa fa-bar-chart-o fa-fw"></i> Loại sản phẩm<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{route('getDanhSachType_Products')}}">Danh sách</a>
                    </li>
                    <li>
                        <a href="{{route('getThemType_Products')}}">Thêm mới</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <!-- END - danh sách loại sản pẩm-->
             <!-- danh sách  nhà cung cấp -->
            <li>
                <a href=""><i class="fa fa-bar-chart-o fa-fw"></i> Nhà cùng cấp<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{route('getDanhSachProvider')}}">Danh sách</a>
                    </li>
                    <li>
                        <a href="{{route('getThemProvider')}}">Thêm mới</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <!-- END - danh sách nhà cung cấp-->
            <!-- danh sách  sản phẩm -->
            <li>
                <a href=""><i class="fa fa-bar-chart-o fa-fw"></i> Sản phẩm<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{route('getDanhSachProducts')}}">Danh sách</a>
                    </li>
                    <li>
                        <a href="{{route('getThemProducts')}}">Thêm mới</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <!-- END - danh sách sản phẩm-->

            <!-- danh sách  đơn hàng, khách hàng -->
            <li>
                <a href=""><i class="fa fa-bar-chart-o fa-fw"></i> Đơn hàng, khách hàng<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{route('getDanhSachBills')}}">Hóa đơn</a>
                    </li>
                    <li>
                        <a href="{{route('getDanhSachCustomer')}}">Khách hàng</a>
                    </li>
                    <li>
                        <a href="{{route('getDanhSachContacts')}}">Liên hệ khách</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <!-- END - danh sách đơn hàng, khách hàng-->

            <li>
                <a href=""><i class="fa fa-dashboard fa-fw"></i> <b>Tin tức</b></a>
            </li>
            <!-- danh sách  thể loại tin -->
            <li>
                <a href=""><i class="fa fa-bar-chart-o fa-fw"></i> Thể loại tin<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{route('getDanhSachTheLoai')}}">Danh sách</a>
                    </li>
                    <li>
                        <a href="{{route('getThemTheLoai')}}">Thêm mới</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <!-- END - danh sách thể loại tin-->
            <!-- danh sách  loại tinp -->
            <li>
                <a href=""><i class="fa fa-bar-chart-o fa-fw"></i> Loại tin<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{route('getDanhSachLoaiTin')}}">Danh sách</a>
                    </li>
                    <li>
                        <a href="{{route('getThemLoaiTin')}}">Thêm mới</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <!-- END - danh sách loại tin-->

            <li>
                <a href=""><i class="fa fa-bar-chart-o fa-fw"></i> Tin tức<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{route('getDanhSachNews')}}">Danh sách</a>
                    </li>
                    <li>
                        <a href="{{route('getThemNews')}}">Thêm mới</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <!-- END - danh sách tin tức-->

            <!-- danh sách slide-->
            <li>
                <a href=""><i class="fa fa-bar-chart-o fa-fw"></i> Slide<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{route('getDanhSachSlide')}}">Danh sách</a>
                    </li>
                    <li>
                        <a href="{{route('getThemSlide')}}">Thêm mới</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <!-- END - danh sách slide-->

            <li>
                <a href=""><i class="fa fa-dashboard fa-fw"></i> <b>Danh mục, hệ thống</b></a>
            </li>

            <!-- danh sách  đơn vị sản phẩm -->
            <li>
                <a href=""><i class="fa fa-bar-chart-o fa-fw"></i> Đơn vị tính<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{route('getDanhSachUnit')}}">Danh sách</a>
                    </li>
                    <li>
                        <a href="{{route('getThemUnit')}}">Thêm mới</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <!-- END - danh sách đơn vị sản phẩm-->
            
           <!-- danh sách use-->
            <li>
                <a href=""><i class="fa fa-bar-chart-o fa-fw"></i> User<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{route('getDanhSachUser')}}">Danh sách</a>
                    </li>
                    <li>
                        <a href="{{route('getThemUser')}}">Thêm mới</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <!-- END - danh sách use-->        
            <li>
                <a href=""><i class="fa fa-bar-chart-o fa-fw"></i> Cấu hình<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{route('getDanhSachThongtinchung')}}">Thông tin</a>
                    </li>                    
                </ul>
                <!-- /.nav-second-level -->
            </li>

            <li>
                <a href=""><i class="fa fa-bar-chart-o fa-fw"></i> Banner<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{route('getDanhSachBanner')}}">Danh sách</a>
                    </li>
                    <li>
                        <a href="{{route('getThemBanner')}}">Thêm mới</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
             <li>
                <a href=""><i class="fa fa-bar-chart-o fa-fw"></i> Giới thiệu<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{route('getDanhSachAbout')}}">Danh sách</a>
                    </li>
                    <li>
                        <a href="{{route('getThemAbout')}}">Thêm mới</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href=""><i class="fa fa-dashboard fa-fw"></i> <b>Quản lý menu</b></a>
            </li>
            <li>
                <a href=""><i class="fa fa-bar-chart-o fa-fw"></i>Danh mục menu<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{route('getDanhSachDanhMucMenu')}}">Danh sách</a>
                    </li>
                    <li>
                        <a href="{{route('getThemDanhMucMenu')}}">Thêm mới</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href=""><i class="fa fa-bar-chart-o fa-fw"></i>Thể loại menu<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{route('getDanhSachTheLoaiMenu')}}">Danh sách</a>
                    </li>
                    <li>
                        <a href="{{route('getThemTheLoaiMenu')}}">Thêm mới</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href=""><i class="fa fa-bar-chart-o fa-fw"></i> Menu<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{route('getDanhSachMenu')}}">Danh sách</a>
                    </li>
                    <li>
                        <a href="{{route('getThemMenu')}}">Thêm mới</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>