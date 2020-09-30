@extends('layout.index')


@section('content')
@include('layout.slide')
<div id="content" class="space-top-none">
	<div class="main-content">
		<div class="space60">&nbsp;</div>
		<div class="row">
			<div class="col-sm-12">
				<div class="beta-products-list">
					<h4>Sản phẩm mới</h4>
					<div class="beta-products-details">
						<p class="pull-left">Tìm thấy {{$products->total()}} sản phẩm</p>
						<div class="clearfix"></div>
					</div>
					<div class="row">						
					@foreach($products as $pr)
						<div class="col-sm-3">
							<div class="single-item">
								@if($pr->promotion_price < $pr->unit_price && $pr->promotion_price  != 0)
									<div class="ribbon-wrapper">
										<div class="ribbon sale">Sale</div>
									</div>
								@endif

								<div class="single-item-header">
									<a href="product/{{$pr->id}}/<?php echo Common::changeTitle($pr->name).".html"?>"><img width="270" height="320" src="image/product/{{$pr->image}}" alt=""></a>
								</div>
								<div class="single-item-body">
									<p class="single-item-title">{{$pr->name}}</p>
									<p class="single-item-price">
									@if($pr->promotion_price < $pr->unit_price && $pr->promotion_price  != 0)
										<span class="flash-del">{{number_format($pr->unit_price)}}</span>
										<span class="flash-sale">{{number_format($pr->promotion_price)}}</span>
									@else
										<span class="flash-sale">{{number_format($pr->unit_price)}}</span>
									@endif
									</p>
								</div>
								<div class="single-item-caption">
									<a class="add-to-cart pull-left" href="add_product/{{$pr->id}}"><i class="fa fa-shopping-cart"></i></a>
									<a class="beta-btn primary" href="product/{{$pr->id}}/<?php echo Common::changeTitle($pr->name).".html"?>">Chi tiết <i class="fa fa-chevron-right"></i></a>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
					@endforeach	
					</div>
					<div >{{$products->links()}}</div>
				</div> <!-- .beta-products-list -->

				<div class="space50">&nbsp;</div>

				<div class="beta-products-list">
					<h4>Sản phẩm khuyến mãi</h4>
					<div class="beta-products-details">
						<p class="pull-left">Tìm thấy {{$products_top->total()}} sản phẩm</p>
						<div class="clearfix"></div>
					</div>

					<div class="row">
					@foreach($products_top as $prt)
						<div class="col-sm-3">
							<div class="single-item">
								<div class="single-item-header">
									<a href="product/{{$prt->id}}/<?php echo Common::changeTitle($prt->name).".html"?>"><img width="270" height="320" src="image/product/{{$prt->image}}" alt=""></a>
								</div>
								<div class="single-item-body">
									<p class="single-item-title">{{$prt->name}}</p>
									<p class="flash-sale">
										<span>{{number_format($prt->promotion_price)}}</span>
									</p>
								</div>
								<div class="single-item-caption">
									<a class="add-to-cart pull-left" href="add_product/{{$prt->id}}"><i class="fa fa-shopping-cart"></i></a>
									<a class="beta-btn primary" href="product/{{$prt->id}}/<?php echo Common::changeTitle($prt->name).".html"?>">Chi tiết <i class="fa fa-chevron-right"></i></a>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
					@endforeach
					<div>{{$products_top->links()}}</div>
					</div>
					<div class="space40">&nbsp;</div>
					
				</div> <!-- .beta-products-list -->
			</div>
		</div> <!-- end section with sidebar and main content -->


	</div> <!-- .main-content -->
</div> <!-- #content -->
@endsection

@section('title')
{{'Trang chủ'}}
@endsection

