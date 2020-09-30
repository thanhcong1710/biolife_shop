@extends('layout.index')

@section('content')
<div class="inner-header">
	<div class="container">
		<div class="pull-left">
			<h6 class="inner-title">{{$sanpham->type_products->name}}</h6>
		</div>
		<div class="pull-right">
			<div class="beta-breadcrumb font-large">
				<a href="trangchu">Trang chủ</a> / <span>Thông tin chi tiết sản phẩm</span>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<div id="content">
	<div class="row">
		<div class="col-sm-9">

			<div class="row">
				<div class="col-sm-4">
					<img src="image/product/{{$sanpham->image}}" alt="">
				</div>
				<div class="col-sm-8">
					<div class="single-item-body">
						<p class="single-item-title"><h2>{{$sanpham->name}}</h2></p>
						<input type="hidden" name="" id="idProduct" value="{{$sanpham->id}}">
						<p class="single-item-price">
							@if($sanpham->promotion_price < $sanpham->unit_price && $sanpham->promotion_price  != 0)
								<span class="flash-del">{{number_format($sanpham->unit_price)}}</span>
								<span class="flash-sale">{{number_format($sanpham->promotion_price)}}</span>
							@else
								<span class="flash-sale">{{number_format($sanpham->unit_price)}}</span>
							@endif
						</p>
					</div>

					<div class="clearfix"></div>
					<div class="space20">&nbsp;</div>

					<div class="single-item-desc">
						<p>{!!$sanpham->description!!}</p>
					</div>
					<div class="space20">&nbsp;</div>

					<p>Tùy chọn:</p>
					<div class="single-item-options">
						
						<select class="wc-select" name="color" id="soluong">
							<option value="0">Số lượng</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>

						</select>
						<a class="add-to-cart" id="add_product_multi" ><i class="fa fa-shopping-cart"></i></a>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>

			<div class="space40">&nbsp;</div>
			{!!$facebookpluginssocial->send_button!!}{!!$facebookpluginssocial->follow_button!!}{!!$facebookpluginssocial->like_button!!}
			<div class="woocommerce-tabs">
				<ul class="tabs">
					<li><a href="#tab-description">Mô tả chi tiết</a></li>
					<li><a href="#tab-reviews">Đánh giá (0)</a></li>
					<li><a href="#tab-comment">Bình luận</a></li>
				</ul>

				<div class="panel" id="tab-description">
					<p>{!!$sanpham->description!!}</p>
				</div>
				<div class="panel" id="tab-reviews">
					<p>No Reviews</p>
				</div>
				<div class="panel" id="tab-comment">
					{!!$facebookpluginssocial->comments!!}
				</div>
			</div>
			<div class="space50">&nbsp;</div>
			<div class="beta-products-list">
				<h4>Sản phẩm cùng loại</h4>

				<div class="row">
				@foreach($sanphamcungloai as $splc)
					<div class="col-sm-4">
						<div class="single-item">
							@if($splc->promotion_price < $splc->unit_price && $splc->promotion_price  != 0)
								<div class="ribbon-wrapper">
									<div class="ribbon sale">Sale</div>
								</div>
							@endif
							<div class="single-item-header">
								<a href="product/{{$splc->id}}/<?php echo Common::changeTitle($splc->name).".html"?>"><img width="270" height="300" src="image/product/{{$splc->image}}" alt=""></a>
							</div>
							<div class="single-item-body">
								<p class="single-item-title">{{$splc->name}}</p>
								<p class="single-item-price">
									@if($splc->promotion_price < $splc->unit_price && $splc->promotion_price  != 0)
										<span class="flash-del">{{number_format($splc->unit_price)}}</span>
										<span class="flash-sale">{{number_format($splc->promotion_price)}}</span>
									@else
										<span class="flash-sale">{{number_format($splc->unit_price)}}</span>
									@endif
								</p>
							</div>
							<div class="single-item-caption">
								<a class="add-to-cart pull-left" href="add_product/{{$splc->id}}"><i class="fa fa-shopping-cart"></i></a>
								<a class="beta-btn primary" href="product/{{$splc->id}}/<?php echo Common::changeTitle($splc->name).".html"?>">Chi tiết <i class="fa fa-chevron-right"></i></a>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>
				@endforeach	
				</div>
				<div>{{$sanphamcungloai->links()}}</div>
			</div> <!-- .beta-products-list -->
		</div>
		<div class="col-sm-3 aside">
			<div class="widget">
				<h3 class="widget-title">Sản phẩm bán chạy</h3>
				<div class="widget-body">
					<div class="beta-sales beta-lists">
						@foreach($products_banchay as $banchay)
						<div class="media beta-sales-item">
							<a class="pull-left" href="product/{{$banchay->products->id}}/<?php echo Common::changeTitle($banchay->products->name).".html"?>"><img width="55" height="58" src="image/product/{{$banchay->products->image}}" alt=""></a>
							<div class="media-body">
								{{$banchay->products->name}}
								<p class="single-item-price">
								@if($banchay->products->promotion_price < $banchay->products->unit_price && $banchay->products->promotion_price  != 0)
									<span class="flash-del">{{number_format($banchay->products->unit_price)}}</span>
									<span class="flash-sale">{{number_format($banchay->products->promotion_price)}}</span>
								@else
									<span class="flash-sale">{{number_format($banchay->products->unit_price)}}</span>
								@endif
								</p>
							</div>
						</div>
						@endforeach
					</div>
				</div>
			</div> <!-- best sellers widget -->
			<div class="widget">
				<h3 class="widget-title">Sản phẩm mới</h3>
				<div class="widget-body">
					<div class="beta-sales beta-lists">
					@foreach($products_new as $new)
						<div class="media beta-sales-item">
							<a class="pull-left" href="product/{{$new->id}}/<?php echo Common::changeTitle($new->name).".html"?>"><img width="55" height="58" src="image/product/{{$new->image}}" alt=""></a>
							<div class="media-body">
								{{$new->name}}
								<p class="single-item-price">
								@if($new->promotion_price < $new->unit_price && $new->promotion_price  != 0)
									<span class="flash-del">{{number_format($new->unit_price)}}</span>
									<span class="flash-sale">{{number_format($new->promotion_price)}}</span>
								@else
									<span class="flash-sale">{{number_format($new->unit_price)}}</span>
								@endif
								</p>
							</div>
						</div>
					@endforeach	
					</div>
				</div>
			</div> <!-- best sellers widget -->
		</div>
	</div>
</div> <!-- #content -->

@endsection

@section('script')
	<script>
		$(document).ready(function($){			
			$("#add_product_multi").click(function(){
				$.get( "add_product_multi", {soluong:$("#soluong").val(),id:$("#idProduct").val()},function(data){
					location.reload();
				} );		

			});
		});
	</script>
@endsection

@section('title')
{{$sanpham->type_products->name}}|{{$sanpham->name}}
@endsection
@section('sdk_javascript')
	{!!$facebookpluginssocial->sdk_javascript!!}
@endsection