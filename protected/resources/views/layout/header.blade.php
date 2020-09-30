
<div id="header">
	<div class="header-top">
		<div class="container">
			<div class="pull-left auto-width-left">
				<ul class="top-menu menu-beta l-inline">
					<li><a href=""><i class="fa fa-home"></i>{{$thongtinchung_share->address}}</a></li>
					<li><a href=""><i class="fa fa-phone"></i>{{$thongtinchung_share->phone}}</a></li>
				</ul>
			</div>
			<div class="pull-right auto-width-right">
				<ul class="top-details menu-beta l-inline">
				@if(isset($nguoidung))
					<li><a href="{{route('nguoidung')}}"><i class="fa fa-user"></i>Tài khoản</a></li>
					<li><a href="{{route('logout')}}"><i class="fa fa-user"></i>Đăng xuất</a></li>
				@else
					<li><a href="{{route('signup')}}">Đăng kí</a></li>
					<li><a href="{{route('login')}}">Đăng nhập</a></li>
				@endif

				</ul>
			</div>
			<div class="clearfix"></div>
		</div> <!-- .container -->
	</div> <!-- .header-top -->
	<div class="header-body">
		<div class="container beta-relative">
			<div class="pull-left">
				@if(count($banner)>0)
				@foreach($banner as $bn)
				<a href="index.html" id="logo"><img src="image/banner/{{$bn->image}}" width="200px" alt=""></a>
				@endforeach
				@endif

			</div>
			<div class="pull-right beta-components space-left ov">
				<div class="space10">&nbsp;</div>
				<div class="beta-comp">
					<form role="search" method="get" id="searchform" action="search">
					        <input type="text" value="" name="stringsearch" id="s" placeholder="Nhập từ khóa..." />
					        <button class="fa fa-search" type="submit" id="searchsubmit"></button>
					</form>
				</div>

				<div class="beta-comp">
					<div class="cart">
						<div class="beta-select"><i class="fa fa-shopping-cart"></i> Giỏ hàng ({{$tongsanpham}}) <i class="fa fa-chevron-down"></i></div>
						<div class="beta-dropdown cart-body">
						@if(count($item)>0)
						@foreach($item as $val)
							<div class="cart-item">

							           	<a class="cart-item-delete" href="deleteproductcart/{{$val['item']->id}}"><i class="fa fa-times"></i></a>
								<div class="media">
									<a class="pull-left" href="#"><img src="image/product/{{$val['item']->image}}" alt=""></a>
									<div class="media-body">
										<span class="cart-item-title">{{$val['item']->name}}</span>
										
										<span class="cart-item-amount">{{$val['soluong']}}*
										<span>
											@if($val['item']->promotion_price < $val['item']->unit_price && $val['item']->promotion_price  != 0)
												{{number_format($val['item']->promotion_price)}}
											@else
												{{number_format($val['item']->unit_price)}}
											@endif
										</span>
										</span>
									</div>
									
								</div>
							</div>
						@endforeach
							<div class="cart-caption">
								<div class="cart-total text-right">Tổng tiền: <span class="cart-total-value">{{number_format($tongtien)}}</span></div>
								<div class="clearfix"></div>

								<div class="center">
									<div class="space10">&nbsp;</div>
									<a href="checkout" class="beta-btn primary text-center">Đặt hàng <i class="fa fa-chevron-right"></i></a>
								</div>
							</div>
						@endif							

						</div>
					</div> <!-- .cart -->
				</div>
			</div>
			<div class="clearfix"></div>
		</div> <!-- .container -->
	</div> <!-- .header-body -->
	<div class="header-bottom" style="background-color: #0277b8;">
		<div class="container">
			<a class="visible-xs beta-menu-toggle pull-right" href="#"><span class='beta-menu-toggle-text'>Menu</span> <i class="fa fa-bars"></i></a>
			<div class="visible-xs clearfix"></div>
			<nav class="main-menu">
				<ul class="l-inline ov">
					<li><a href="trangchu">Trang chủ</a></li>
					<li><a href="#">Sản phẩm</a>
						<ul class="sub-menu">
							@foreach($type_products as $tp)
								<li><a href="product_type/{{$tp->id}}/<?php echo Common::changeTitle($tp->name).".html"?>">{{$tp->name}}</a></li>
							@endforeach
						</ul>
					</li>
					<li><a href="#">Tin tức</a>
						<ul class="sub-menu">
							@foreach($type_products as $tp)
								<li><a href="product_type/{{$tp->id}}/<?php echo Common::changeTitle($tp->name).".html"?>">{{$tp->name}}</a></li>
							@endforeach
						</ul>
					</li>
					<li><a href="about">Giới thiệu</a></li>
					<li><a href="contacts">Liên hệ</a></li>
				</ul>
				<div class="clearfix"></div>
			</nav>
		</div> <!-- .container -->
	</div> <!-- .header-bottom -->
</div> <!-- #header -->