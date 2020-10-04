@extends('layout.index')

@section('content')
<!--Hero Section-->
<div class="hero-section hero-background">
	<h1 class="page-title">Organic Fruits</h1>
</div>

<!--Navigation section-->
<div class="container">
	<nav class="biolife-nav">
		<ul>
			<li class="nav-item"><a href="trangchu" class="permal-link">Trang chủ</a></li>
			<li class="nav-item"><a href="#" class="permal-link">{{$sanpham->type_products->name}}</a></li>
			<li class="nav-item"><span class="current-page">Thông tin chi tiết sản phẩm</span></li>
		</ul>
	</nav>
</div>

<div class="page-contain single-product">
	<div class="container">

		<!-- Main content -->
		<div id="main-content" class="main-content">

			<!-- summary info -->
			<div class="sumary-product single-layout">
				<div class="media">
					<ul class="biolife-carousel slider-for slick-initialized slick-slider" data-slick="{&quot;arrows&quot;:false,&quot;dots&quot;:false,&quot;slidesMargin&quot;:30,&quot;slidesToShow&quot;:1,&quot;slidesToScroll&quot;:1,&quot;fade&quot;:true,&quot;asNavFor&quot;:&quot;.slider-nav&quot;}">
						<div class="slick-list draggable">
							<div class="slick-track" style="opacity: 1; width: 3150px;">
								<li class="slick-slide" data-slick-index="0" aria-hidden="true" tabindex="-1" style="margin-right: 0px; width: 450px; position: relative; left: 0px; top: 0px; z-index: 998; opacity: 0; transition: opacity 500ms ease 0s;"><img src="assets/biolife/images/detail_01.jpg" alt="" width="500" height="500"></li>
								<li class="slick-slide" data-slick-index="1" aria-hidden="true" tabindex="-1" style="margin-right: 0px; width: 450px; position: relative; left: -450px; top: 0px; z-index: 998; opacity: 0; transition: opacity 500ms ease 0s;"><img src="assets/biolife/images/detail_02.jpg" alt="" width="500" height="500"></li>
								<li class="slick-slide" data-slick-index="2" aria-hidden="true" tabindex="-1" style="margin-right: 0px; width: 450px; position: relative; left: -900px; top: 0px; z-index: 998; opacity: 0; transition: opacity 500ms ease 0s;"><img src="assets/biolife/images/detail_03.jpg" alt="" width="500" height="500"></li>
								<li class="slick-slide" data-slick-index="3" aria-hidden="true" tabindex="-1" style="margin-right: 0px; width: 450px; position: relative; left: -1350px; top: 0px; z-index: 998; opacity: 0; transition: opacity 500ms ease 0s;"><img src="assets/biolife/images/detail_04.jpg" alt="" width="500" height="500"></li>
								<li class="slick-slide" data-slick-index="4" aria-hidden="true" tabindex="-1" style="margin-right: 0px; width: 450px; position: relative; left: -1800px; top: 0px; z-index: 998; opacity: 0;"><img src="assets/biolife/images/detail_05.jpg" alt="" width="500" height="500"></li>
								<li class="slick-slide slick-current slick-active first-slick last-slick" data-slick-index="5" aria-hidden="false" tabindex="0" style="margin-right: 0px; width: 450px; position: relative; left: -2250px; top: 0px; z-index: 999; opacity: 1;"><img src="assets/biolife/images/detail_06.jpg" alt="" width="500" height="500"></li>
								<li class="slick-slide" data-slick-index="6" aria-hidden="true" tabindex="-1" style="margin-right: 0px; width: 450px; position: relative; left: -2700px; top: 0px; z-index: 998; opacity: 0; transition: opacity 500ms ease 0s;"><img src="assets/biolife/images/detail_07.jpg" alt="" width="500" height="500"></li>
							</div>
						</div>






					</ul>
					<ul class="biolife-carousel slider-nav slick-initialized slick-slider" data-slick="{&quot;arrows&quot;:false,&quot;dots&quot;:false,&quot;centerMode&quot;:false,&quot;focusOnSelect&quot;:true,&quot;slidesMargin&quot;:10,&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:1,&quot;asNavFor&quot;:&quot;.slider-for&quot;}">
						<div class="slick-list draggable">
							<div class="slick-track" style="opacity: 1; width: 1935px; transform: translate3d(-900px, 0px, 0px);">
								<li class="slick-slide slick-cloned" data-slick-index="-4" aria-hidden="true" tabindex="-1" style="margin-right: 10px; width: 90px;"><img src="assets/biolife/images/thumb_04.jpg" alt="" width="88" height="88"></li>
								<li class="slick-slide slick-cloned" data-slick-index="-3" aria-hidden="true" tabindex="-1" style="margin-right: 10px; width: 90px;"><img src="assets/biolife/images/thumb_05.jpg" alt="" width="88" height="88"></li>
								<li class="slick-slide slick-cloned" data-slick-index="-2" aria-hidden="true" tabindex="-1" style="margin-right: 10px; width: 90px;"><img src="assets/biolife/images/thumb_06.jpg" alt="" width="88" height="88"></li>
								<li class="slick-slide slick-cloned" data-slick-index="-1" aria-hidden="true" tabindex="-1" style="margin-right: 10px; width: 90px;"><img src="assets/biolife/images/thumb_07.jpg" alt="" width="88" height="88"></li>
								<li class="slick-slide" data-slick-index="0" aria-hidden="true" tabindex="-1" style="margin-right: 10px; width: 90px;"><img src="assets/biolife/images/thumb_01.jpg" alt="" width="88" height="88"></li>
								<li class="slick-slide" data-slick-index="1" aria-hidden="true" tabindex="-1" style="margin-right: 10px; width: 90px;"><img src="assets/biolife/images/thumb_02.jpg" alt="" width="88" height="88"></li>
								<li class="slick-slide" data-slick-index="2" aria-hidden="true" tabindex="-1" style="margin-right: 10px; width: 90px;"><img src="assets/biolife/images/thumb_03.jpg" alt="" width="88" height="88"></li>
								<li class="slick-slide" data-slick-index="3" aria-hidden="true" tabindex="-1" style="margin-right: 10px; width: 90px;"><img src="assets/biolife/images/thumb_04.jpg" alt="" width="88" height="88"></li>
								<li class="slick-slide" data-slick-index="4" aria-hidden="true" tabindex="-1" style="margin-right: 10px; width: 90px;"><img src="assets/biolife/images/thumb_05.jpg" alt="" width="88" height="88"></li>
								<li class="slick-slide slick-current slick-active first-slick" data-slick-index="5" aria-hidden="false" tabindex="0" style="margin-right: 10px; width: 90px;"><img src="assets/biolife/images/thumb_06.jpg" alt="" width="88" height="88"></li>
								<li class="slick-slide slick-active" data-slick-index="6" aria-hidden="false" tabindex="0" style="margin-right: 10px; width: 90px;"><img src="assets/biolife/images/thumb_07.jpg" alt="" width="88" height="88"></li>
								<li class="slick-slide slick-cloned slick-active" data-slick-index="7" aria-hidden="false" tabindex="-1" style="margin-right: 10px; width: 90px;"><img src="assets/biolife/images/thumb_01.jpg" alt="" width="88" height="88"></li>
								<li class="slick-slide slick-cloned slick-active last-slick" data-slick-index="8" aria-hidden="false" tabindex="-1" style="margin-right: 10px; width: 90px;"><img src="assets/biolife/images/thumb_02.jpg" alt="" width="88" height="88"></li>
								<li class="slick-slide slick-cloned" data-slick-index="9" aria-hidden="true" tabindex="-1" style="margin-right: 10px; width: 90px;"><img src="assets/biolife/images/thumb_03.jpg" alt="" width="88" height="88"></li>
								<li class="slick-slide slick-cloned" data-slick-index="10" aria-hidden="true" tabindex="-1" style="margin-right: 10px; width: 90px;"><img src="assets/biolife/images/thumb_04.jpg" alt="" width="88" height="88"></li>
								<li class="slick-slide slick-cloned" data-slick-index="11" aria-hidden="true" tabindex="-1" style="margin-right: 10px; width: 90px;"><img src="assets/biolife/images/thumb_05.jpg" alt="" width="88" height="88"></li>
								<li class="slick-slide slick-cloned" data-slick-index="12" aria-hidden="true" tabindex="-1" style="margin-right: 10px; width: 90px;"><img src="assets/biolife/images/thumb_06.jpg" alt="" width="88" height="88"></li>
								<li class="slick-slide slick-cloned" data-slick-index="13" aria-hidden="true" tabindex="-1" style="margin-right: 10px; width: 90px;"><img src="assets/biolife/images/thumb_07.jpg" alt="" width="88" height="88"></li>
							</div>
						</div>






					</ul>
				</div>
				<div class="product-attribute">
					<h3 class="title">{{$sanpham->name}}</h3>
					<div class="rating">
						<p class="star-rating"><span class="width-80percent"></span></p>
						<span class="review-count">(04 Reviews)</span>
						<span class="qa-text">Q&amp;A</span>
						<b class="category">By: Natural food</b>
					</div>
					<p class="excerpt">{{$sanpham->description}}</p>
					<div class="price">
						@if($sanpham->promotion_price < $sanpham->unit_price && $sanpham->promotion_price  != 0)
							<ins><span class="price-amount">{{number_format($sanpham->promotion_price)}}<span class="currencySymbol">VNĐ</span></span></ins>
							<del><span class="price-amount">{{number_format($sanpham->unit_price)}}<span class="currencySymbol">VNĐ</span></span></del>
						@else
							<ins><span class="price-amount">{{number_format($sanpham->unit_price)}}<span class="currencySymbol">VNĐ</span></span></ins>
						@endif
					</div>
					<div class="product-atts">
						<div class="atts-item">
							<span class="title">Color:</span>
							<ul class="color-list">
								<li class="color-item"><a href="http://kute-themes.com/html/biolife/single-product.html#" class="c-link"><span class="symbol img-color"></span>Multi</a></li>
								<li class="color-item"><a href="http://kute-themes.com/html/biolife/single-product.html#" class="c-link"><span class="symbol hex-code color-01"></span>Red</a></li>
								<li class="color-item"><a href="http://kute-themes.com/html/biolife/single-product.html#" class="c-link"><span class="symbol hex-code color-02"></span>Orrange</a></li>
								<li class="color-item"><a href="http://kute-themes.com/html/biolife/single-product.html#" class="c-link"><span class="symbol hex-code color-03"></span>Other</a></li>
							</ul>
						</div>
					</div>
					<div class="shipping-info">
						<p class="shipping-day">3-Day Shipping</p>
						<p class="for-today">Pree Pickup Today</p>
					</div>
				</div>
				<div class="action-form">
					<div class="quantity-box">
						<span class="title">Quantity:</span>
						<div class="qty-input">
							<input type="text" name="qty12554" value="1" data-max_value="20" data-min_value="1" data-step="1">
							<a href="http://kute-themes.com/html/biolife/single-product.html#" class="qty-btn btn-up"><i class="fa fa-caret-up" aria-hidden="true"></i></a>
							<a href="http://kute-themes.com/html/biolife/single-product.html#" class="qty-btn btn-down"><i class="fa fa-caret-down" aria-hidden="true"></i></a>
						</div>
					</div>
					<div class="total-price-contain">
						<span class="title">Total Price:</span>
						<p class="price">£199.99</p>
					</div>
					<div class="buttons">
						<a href="http://kute-themes.com/html/biolife/single-product.html#" class="btn add-to-cart-btn">add to cart</a>
						<p class="pull-row">
							<a href="http://kute-themes.com/html/biolife/single-product.html#" class="btn wishlist-btn">wishlist</a>
							<a href="http://kute-themes.com/html/biolife/single-product.html#" class="btn compare-btn">compare</a>
						</p>
					</div>
					<div class="location-shipping-to">
						<span class="title">Ship to:</span>
						<select name="shipping_to" class="country" style="display: none;">
							<option value="-1">Select Country</option>
							<option value="america">America</option>
							<option value="france">France</option>
							<option value="germany">Germany</option>
							<option value="japan">Japan</option>
						</select>
						<div class="nice-select country" tabindex="0"><span class="current">Select Country</span>
							<ul class="list">
								<li data-value="-1" class="option selected">Select Country</li>
								<li data-value="america" class="option">America</li>
								<li data-value="france" class="option">France</li>
								<li data-value="germany" class="option">Germany</li>
								<li data-value="japan" class="option">Japan</li>
							</ul>
						</div>
					</div>
					<div class="social-media">
						<ul class="social-list">
							<li><a href="http://kute-themes.com/html/biolife/single-product.html#" class="social-link"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="http://kute-themes.com/html/biolife/single-product.html#" class="social-link"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="http://kute-themes.com/html/biolife/single-product.html#" class="social-link"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
							<li><a href="http://kute-themes.com/html/biolife/single-product.html#" class="social-link"><i class="fa fa-share-alt" aria-hidden="true"></i></a></li>
							<li><a href="http://kute-themes.com/html/biolife/single-product.html#" class="social-link"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
						</ul>
					</div>
					<div class="acepted-payment-methods">
						<ul class="payment-methods">
							<li><img src="assets/biolife/images/card1.jpg" alt="" width="51" height="36"></li>
							<li><img src="assets/biolife/images/card2.jpg" alt="" width="51" height="36"></li>
							<li><img src="assets/biolife/images/card3.jpg" alt="" width="51" height="36"></li>
							<li><img src="assets/biolife/images/card4.jpg" alt="" width="51" height="36"></li>
						</ul>
					</div>
				</div>
			</div>

			<!-- Tab info -->
			<div class="product-tabs single-layout biolife-tab-contain">
				<div class="tab-head">
					<ul class="tabs">
						<li class="tab-element active"><a href="http://kute-themes.com/html/biolife/single-product.html#tab_1st" class="tab-link">Mô tả chi tiết</a></li>
						<li class="tab-element"><a href="http://kute-themes.com/html/biolife/single-product.html#tab_2nd" class="tab-link">Bình luận</a></li>
					</ul>
				</div>
				<div class="tab-content">
					<div id="tab_1st" class="tab-contain desc-tab active">
						<p>{!!$sanpham->description!!}</p>
					</div>
					<div id="tab_2nd" class="tab-contain addtional-info-tab">
						{!!$facebookpluginssocial->comments!!}
					</div>
				</div>
			</div>

			<!-- related products -->
			<div class="product-related-box single-layout">
				<div class="biolife-title-box lg-margin-bottom-26px-im">
					<span class="biolife-icon icon-organic"></span>
					<span class="subtitle">All the best item for You</span>
					<h3 class="main-title">Related Products</h3>
				</div>
				<ul class="products-list biolife-carousel nav-center-02 nav-none-on-mobile slick-initialized slick-slider" data-slick="{&quot;rows&quot;:1,&quot;arrows&quot;:true,&quot;dots&quot;:false,&quot;infinite&quot;:false,&quot;speed&quot;:400,&quot;slidesMargin&quot;:0,&quot;slidesToShow&quot;:5, &quot;responsive&quot;:[{&quot;breakpoint&quot;:1200, &quot;settings&quot;:{ &quot;slidesToShow&quot;: 4}},{&quot;breakpoint&quot;:992, &quot;settings&quot;:{ &quot;slidesToShow&quot;: 3, &quot;slidesMargin&quot;:20 }},{&quot;breakpoint&quot;:768, &quot;settings&quot;:{ &quot;slidesToShow&quot;: 2, &quot;slidesMargin&quot;:10}}]}"><span class="biolife-icon icon-left-arrow prev slick-arrow slick-disabled" aria-disabled="true" style=""></span>

					<div class="slick-list draggable">
						<div class="slick-track" style="opacity: 1; width: 1666px; transform: translate3d(0px, 0px, 0px);">
							<li class="product-item slick-slide slick-current slick-active first-slick" data-slick-index="0" aria-hidden="false" tabindex="0" style="margin-right: 0px; width: 238px;">
								<div class="contain-product layout-default">
									<div class="product-thumb">
										<a href="http://kute-themes.com/html/biolife/single-product.html#" class="link-to-product" tabindex="0">
											<img src="assets/biolife/images/p-13.jpg" alt="dd" width="270" height="270" class="product-thumnail">
										</a>
									</div>
									<div class="info">
										<b class="categories">Fresh Fruit</b>
										<h4 class="product-title"><a href="http://kute-themes.com/html/biolife/single-product.html#" class="pr-name" tabindex="0">National Fresh Fruit</a></h4>
										<div class="price">
											<ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
											<del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
										</div>
										<div class="slide-down-box">
											<p class="message">All products are carefully selected to ensure food safety.</p>
											<div class="buttons">
												<a href="http://kute-themes.com/html/biolife/single-product.html#" class="btn wishlist-btn" tabindex="0"><i class="fa fa-heart" aria-hidden="true"></i></a>
												<a href="http://kute-themes.com/html/biolife/single-product.html#" class="btn add-to-cart-btn" tabindex="0"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
												<a href="http://kute-themes.com/html/biolife/single-product.html#" class="btn compare-btn" tabindex="0"><i class="fa fa-random" aria-hidden="true"></i></a>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="product-item slick-slide slick-active" data-slick-index="1" aria-hidden="false" tabindex="0" style="margin-right: 0px; width: 238px;">
								<div class="contain-product layout-default">
									<div class="product-thumb">
										<a href="http://kute-themes.com/html/biolife/single-product.html#" class="link-to-product" tabindex="0">
											<img src="assets/biolife/images/p-14.jpg" alt="dd" width="270" height="270" class="product-thumnail">
										</a>
									</div>
									<div class="info">
										<b class="categories">Fresh Fruit</b>
										<h4 class="product-title"><a href="http://kute-themes.com/html/biolife/single-product.html#" class="pr-name" tabindex="0">National Fresh Fruit</a></h4>
										<div class="price">
											<ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
											<del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
										</div>
										<div class="slide-down-box">
											<p class="message">All products are carefully selected to ensure food safety.</p>
											<div class="buttons">
												<a href="http://kute-themes.com/html/biolife/single-product.html#" class="btn wishlist-btn" tabindex="0"><i class="fa fa-heart" aria-hidden="true"></i></a>
												<a href="http://kute-themes.com/html/biolife/single-product.html#" class="btn add-to-cart-btn" tabindex="0"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
												<a href="http://kute-themes.com/html/biolife/single-product.html#" class="btn compare-btn" tabindex="0"><i class="fa fa-random" aria-hidden="true"></i></a>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="product-item slick-slide slick-active" data-slick-index="2" aria-hidden="false" tabindex="0" style="margin-right: 0px; width: 238px;">
								<div class="contain-product layout-default">
									<div class="product-thumb">
										<a href="http://kute-themes.com/html/biolife/single-product.html#" class="link-to-product" tabindex="0">
											<img src="assets/biolife/images/p-15.jpg" alt="dd" width="270" height="270" class="product-thumnail">
										</a>
									</div>
									<div class="info">
										<b class="categories">Fresh Fruit</b>
										<h4 class="product-title"><a href="http://kute-themes.com/html/biolife/single-product.html#" class="pr-name" tabindex="0">National Fresh Fruit</a></h4>
										<div class="price">
											<ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
											<del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
										</div>
										<div class="slide-down-box">
											<p class="message">All products are carefully selected to ensure food safety.</p>
											<div class="buttons">
												<a href="http://kute-themes.com/html/biolife/single-product.html#" class="btn wishlist-btn" tabindex="0"><i class="fa fa-heart" aria-hidden="true"></i></a>
												<a href="http://kute-themes.com/html/biolife/single-product.html#" class="btn add-to-cart-btn" tabindex="0"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
												<a href="http://kute-themes.com/html/biolife/single-product.html#" class="btn compare-btn" tabindex="0"><i class="fa fa-random" aria-hidden="true"></i></a>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="product-item slick-slide slick-active" data-slick-index="3" aria-hidden="false" tabindex="0" style="margin-right: 0px; width: 238px;">
								<div class="contain-product layout-default">
									<div class="product-thumb">
										<a href="http://kute-themes.com/html/biolife/single-product.html#" class="link-to-product" tabindex="0">
											<img src="assets/biolife/images/p-10.jpg" alt="dd" width="270" height="270" class="product-thumnail">
										</a>
									</div>
									<div class="info">
										<b class="categories">Fresh Fruit</b>
										<h4 class="product-title"><a href="http://kute-themes.com/html/biolife/single-product.html#" class="pr-name" tabindex="0">National Fresh Fruit</a></h4>
										<div class="price">
											<ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
											<del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
										</div>
										<div class="slide-down-box">
											<p class="message">All products are carefully selected to ensure food safety.</p>
											<div class="buttons">
												<a href="http://kute-themes.com/html/biolife/single-product.html#" class="btn wishlist-btn" tabindex="0"><i class="fa fa-heart" aria-hidden="true"></i></a>
												<a href="http://kute-themes.com/html/biolife/single-product.html#" class="btn add-to-cart-btn" tabindex="0"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
												<a href="http://kute-themes.com/html/biolife/single-product.html#" class="btn compare-btn" tabindex="0"><i class="fa fa-random" aria-hidden="true"></i></a>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="product-item slick-slide slick-active last-slick" data-slick-index="4" aria-hidden="false" tabindex="0" style="margin-right: 0px; width: 238px;">
								<div class="contain-product layout-default">
									<div class="product-thumb">
										<a href="http://kute-themes.com/html/biolife/single-product.html#" class="link-to-product" tabindex="0">
											<img src="assets/biolife/images/p-08.jpg" alt="dd" width="270" height="270" class="product-thumnail">
										</a>
									</div>
									<div class="info">
										<b class="categories">Fresh Fruit</b>
										<h4 class="product-title"><a href="http://kute-themes.com/html/biolife/single-product.html#" class="pr-name" tabindex="0">National Fresh Fruit</a></h4>
										<div class="price">
											<ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
											<del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
										</div>
										<div class="slide-down-box">
											<p class="message">All products are carefully selected to ensure food safety.</p>
											<div class="buttons">
												<a href="http://kute-themes.com/html/biolife/single-product.html#" class="btn wishlist-btn" tabindex="0"><i class="fa fa-heart" aria-hidden="true"></i></a>
												<a href="http://kute-themes.com/html/biolife/single-product.html#" class="btn add-to-cart-btn" tabindex="0"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
												<a href="http://kute-themes.com/html/biolife/single-product.html#" class="btn compare-btn" tabindex="0"><i class="fa fa-random" aria-hidden="true"></i></a>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="product-item slick-slide" data-slick-index="5" aria-hidden="true" tabindex="-1" style="margin-right: 0px; width: 238px;">
								<div class="contain-product layout-default">
									<div class="product-thumb">
										<a href="http://kute-themes.com/html/biolife/single-product.html#" class="link-to-product" tabindex="-1">
											<img src="assets/biolife/images/p-21.jpg" alt="dd" width="270" height="270" class="product-thumnail">
										</a>
									</div>
									<div class="info">
										<b class="categories">Fresh Fruit</b>
										<h4 class="product-title"><a href="http://kute-themes.com/html/biolife/single-product.html#" class="pr-name" tabindex="-1">National Fresh Fruit</a></h4>
										<div class="price">
											<ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
											<del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
										</div>
										<div class="slide-down-box">
											<p class="message">All products are carefully selected to ensure food safety.</p>
											<div class="buttons">
												<a href="http://kute-themes.com/html/biolife/single-product.html#" class="btn wishlist-btn" tabindex="-1"><i class="fa fa-heart" aria-hidden="true"></i></a>
												<a href="http://kute-themes.com/html/biolife/single-product.html#" class="btn add-to-cart-btn" tabindex="-1"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
												<a href="http://kute-themes.com/html/biolife/single-product.html#" class="btn compare-btn" tabindex="-1"><i class="fa fa-random" aria-hidden="true"></i></a>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="product-item slick-slide" data-slick-index="6" aria-hidden="true" tabindex="-1" style="margin-right: 0px; width: 238px;">
								<div class="contain-product layout-default">
									<div class="product-thumb">
										<a href="http://kute-themes.com/html/biolife/single-product.html#" class="link-to-product" tabindex="-1">
											<img src="assets/biolife/images/p-18.jpg" alt="dd" width="270" height="270" class="product-thumnail">
										</a>
									</div>
									<div class="info">
										<b class="categories">Fresh Fruit</b>
										<h4 class="product-title"><a href="http://kute-themes.com/html/biolife/single-product.html#" class="pr-name" tabindex="-1">National Fresh Fruit</a></h4>
										<div class="price">
											<ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
											<del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
										</div>
										<div class="slide-down-box">
											<p class="message">All products are carefully selected to ensure food safety.</p>
											<div class="buttons">
												<a href="http://kute-themes.com/html/biolife/single-product.html#" class="btn wishlist-btn" tabindex="-1"><i class="fa fa-heart" aria-hidden="true"></i></a>
												<a href="http://kute-themes.com/html/biolife/single-product.html#" class="btn add-to-cart-btn" tabindex="-1"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
												<a href="http://kute-themes.com/html/biolife/single-product.html#" class="btn compare-btn" tabindex="-1"><i class="fa fa-random" aria-hidden="true"></i></a>
											</div>
										</div>
									</div>
								</div>
							</li>
						</div>
					</div>







					<span class="biolife-icon icon-arrow-right next slick-arrow" style="" aria-disabled="false"></span>
				</ul>
			</div>

		</div>
	</div>
</div>

@endsection
@section('title')
{{$sanpham->type_products->name}}|{{$sanpham->name}}
@endsection