<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
                  
            @foreach($danhmucmenu_share as $dm)
                
                 @if($nguoidung->lavel != 3 )    
                    <li>
                        <a href="admin"><i class="fa fa-dashboard fa-fw"></i> <b>{{$dm->name}}</b></a>
                    </li>                   
                @endif
                @foreach($dm->theloaimenu as $tlmn)
                    @if($nguoidung->lavel == 3 && in_array($tlmn->id,explode(',', $nguoidung->id_theloaimenu )))                  
                        <li>
                        <a href=""><i class="fa fa-bar-chart-o fa-fw"></i> {{$tlmn->name}}<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            @foreach($menu_share->getMenu($tlmn->id) as $mn)
                                <li>
                                    <a href="{{route($mn->route)}}">{{$mn->name}}</a>
                                </li>
                            @endforeach
                        </ul>
                        <!-- /.nav-second-level -->
                        </li>                  
                    @endif    
                    @if($nguoidung->lavel != 3)    
                        <li>
                        <a href=""><i class="fa fa-bar-chart-o fa-fw"></i> {{$tlmn->name}}<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            @foreach($menu_share->getMenu($tlmn->id) as $mn)
                                <li>
                                    <a href="{{route($mn->route)}}">{{$mn->name}}</a>
                                </li>
                            @endforeach
                        </ul>
                        <!-- /.nav-second-level -->
                        </li>
                    @endif
                @endforeach
            @endforeach
        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>