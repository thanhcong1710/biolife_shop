@extends('layout.index')
@section('content')
<?php
        function doimau($str, $tukhoa)
        {
            return str_replace($tukhoa, "<span style = 'color:red;''>$tukhoa</span>", $str);
        }
?>
<div class="container">
	<div id="content" class="space-top-none">
		<div class="main-content">
			<div class="space60">&nbsp;</div>
			<div class="row">
				<div class="col-sm-3">
					<ul class="aside-menu">
					@foreach($type_products as $tp)
						<li><a href="product_type/{{$tp->id}}/<?php echo Common::changeTitle($tp->name).".html"?>">{{$tp->name}}</a></li>
					@endforeach
					</ul>
				</div>
				<div class="col-sm-9">
					<div class="beta-products-list">
						
						@if(isset($products))
							<h4>Tìm thấy {{$products->total()}} sản phẩm: {!!doimau($tukhoa,$tukhoa)!!}</h4>
							<div class="row">						
							@foreach($products as $pr)
								<div class="col-sm-4">
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
											<p class="single-item-title">{!!doimau($pr->name,$tukhoa)!!}</p>
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
							 <div style="text-align:center">{{$products->appends(['stringsearch' => $tukhoa])->links()}}</div>
						 @else
						 <div class="row"><h3>Không tìm thấy sản phẩm nào với từ khóa: <b>{!!doimau($tukhoa,$tukhoa)!!}</b></h3></div>
						 @endif

					</div> <!-- .beta-products-list -->

					<div class="space50">&nbsp;</div>

					
				</div>
			</div> <!-- end section with sidebar and main content -->


		</div> <!-- .main-content -->
	</div> <!-- #content -->
</div> <!-- .container -->

@endsection

@section('title')
{{'Kết quả tìm kiếm'}}
@endsection