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
				<!-- Container for the image gallery -->
				<div class="media container">

					<!-- Full-width images with number text -->
					<div class="mySlides">
						<div class="numbertext">1 / 6</div>
						<img src="assets/biolife/images/detail_01.jpg" style="width:100%">
					</div>

					<div class="mySlides">
						<div class="numbertext">2 / 6</div>
						<img src="assets/biolife/images/detail_02.jpg" style="width:100%">
					</div>

					<div class="mySlides">
						<div class="numbertext">3 / 6</div>
						<img src="assets/biolife/images/detail_03.jpg" style="width:100%">
					</div>

					<div class="mySlides">
						<div class="numbertext">4 / 6</div>
						<img src="assets/biolife/images/detail_04.jpg" style="width:100%">
					</div>
					<!-- Next and previous buttons -->
					<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
					<a class="next" onclick="plusSlides(1)">&#10095;</a>

					<!-- Image text -->
					<div class="caption-container">
						<p id="caption"></p>
					</div>

					<!-- Thumbnail images -->
					<div class="row">
						<div class="column">
							<img class="demo cursor" src="assets/biolife/images/thumb_01.jpg" style="width:100%" onclick="currentSlide(1)" alt="The Woods">
						</div>
						<div class="column">
							<img class="demo cursor" src="assets/biolife/images/thumb_02.jpg" style="width:100%" onclick="currentSlide(2)" alt="Cinque Terre">
						</div>
						<div class="column">
							<img class="demo cursor" src="assets/biolife/images/thumb_03.jpg" style="width:100%" onclick="currentSlide(3)" alt="Mountains and fjords">
						</div>
						<div class="column">
							<img class="demo cursor" src="assets/biolife/images/thumb_04.jpg" style="width:100%" onclick="currentSlide(4)" alt="Northern Lights">
						</div>
					</div>
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
						@if($sanpham->promotion_price < $sanpham->unit_price && $sanpham->promotion_price != 0)
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
				<div class="container">
					<div class="row">
						<div class="MultiCarousel" data-items="1,3,5,6" data-slide="1" id="MultiCarousel" data-interval="1000">
							<div class="MultiCarousel-inner">
								<div class="item">
									<div class="pad15">
										<p class="lead">Multi Item Carousel</p>
										<p>₹ 1</p>
										<p>₹ 6000</p>
										<p>50% off</p>
									</div>
								</div>
								<div class="item">
									<div class="pad15">
										<p class="lead">Multi Item Carousel</p>
										<p>₹ 1</p>
										<p>₹ 6000</p>
										<p>50% off</p>
									</div>
								</div>
								<div class="item">
									<div class="pad15">
										<p class="lead">Multi Item Carousel</p>
										<p>₹ 1</p>
										<p>₹ 6000</p>
										<p>50% off</p>
									</div>
								</div>
								<div class="item">
									<div class="pad15">
										<p class="lead">Multi Item Carousel</p>
										<p>₹ 1</p>
										<p>₹ 6000</p>
										<p>50% off</p>
									</div>
								</div>
								<div class="item">
									<div class="pad15">
										<p class="lead">Multi Item Carousel</p>
										<p>₹ 1</p>
										<p>₹ 6000</p>
										<p>50% off</p>
									</div>
								</div>
								<div class="item">
									<div class="pad15">
										<p class="lead">Multi Item Carousel</p>
										<p>₹ 1</p>
										<p>₹ 6000</p>
										<p>50% off</p>
									</div>
								</div>
								<div class="item">
									<div class="pad15">
										<p class="lead">Multi Item Carousel</p>
										<p>₹ 1</p>
										<p>₹ 6000</p>
										<p>50% off</p>
									</div>
								</div>
								<div class="item">
									<div class="pad15">
										<p class="lead">Multi Item Carousel</p>
										<p>₹ 1</p>
										<p>₹ 6000</p>
										<p>50% off</p>
									</div>
								</div>
								<div class="item">
									<div class="pad15">
										<p class="lead">Multi Item Carousel</p>
										<p>₹ 1</p>
										<p>₹ 6000</p>
										<p>50% off</p>
									</div>
								</div>
								<div class="item">
									<div class="pad15">
										<p class="lead">Multi Item Carousel</p>
										<p>₹ 1</p>
										<p>₹ 6000</p>
										<p>50% off</p>
									</div>
								</div>
								<div class="item">
									<div class="pad15">
										<p class="lead">Multi Item Carousel</p>
										<p>₹ 1</p>
										<p>₹ 6000</p>
										<p>50% off</p>
									</div>
								</div>
								<div class="item">
									<div class="pad15">
										<p class="lead">Multi Item Carousel</p>
										<p>₹ 1</p>
										<p>₹ 6000</p>
										<p>50% off</p>
									</div>
								</div>
								<div class="item">
									<div class="pad15">
										<p class="lead">Multi Item Carousel</p>
										<p>₹ 1</p>
										<p>₹ 6000</p>
										<p>50% off</p>
									</div>
								</div>
								<div class="item">
									<div class="pad15">
										<p class="lead">Multi Item Carousel</p>
										<p>₹ 1</p>
										<p>₹ 6000</p>
										<p>50% off</p>
									</div>
								</div>
								<div class="item">
									<div class="pad15">
										<p class="lead">Multi Item Carousel</p>
										<p>₹ 1</p>
										<p>₹ 6000</p>
										<p>50% off</p>
									</div>
								</div>
								<div class="item">
									<div class="pad15">
										<p class="lead">Multi Item Carousel</p>
										<p>₹ 1</p>
										<p>₹ 6000</p>
										<p>50% off</p>
									</div>
								</div>
							</div>
							<button class="btn btn-primary leftLst">
								<</button> <button class="btn btn-primary rightLst">>
							</button>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 text-center">
							<br /><br /><br />
							<hr />
							<p>Settings</p>
							<p>Change data items for xs,sm,md and lg display items respectively. Ex:data-items="1,3,5,6"</p>
							<p>Change data slide for slides per click Ex:data-slide="1"</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<style>
	* {
		box-sizing: border-box;
	}

	/* Position the image container (needed to position the left and right arrows) */
	.container {
		position: relative;
	}

	/* Hide the images by default */
	.mySlides {
		display: none;
	}

	/* Add a pointer when hovering over the thumbnail images */
	.cursor {
		cursor: pointer;
	}

	/* Next & previous buttons */
	.prev,
	.next {
		cursor: pointer;
		position: absolute;
		top: 40%;
		width: auto;
		padding: 16px;
		margin-top: -50px;
		color: white;
		font-weight: bold;
		font-size: 20px;
		border-radius: 0 3px 3px 0;
		user-select: none;
		-webkit-user-select: none;
	}

	/* Position the "next button" to the right */
	.next {
		right: 0;
		border-radius: 3px 0 0 3px;
	}

	/* On hover, add a black background color with a little bit see-through */
	.prev:hover,
	.next:hover {
		background-color: rgba(0, 0, 0, 0.8);
	}

	/* Number text (1/3 etc) */
	.numbertext {
		color: #f2f2f2;
		font-size: 12px;
		padding: 8px 12px;
		position: absolute;
		top: 0;
	}

	/* Container for image text */
	.caption-container {
		text-align: center;
		background-color: #222;
		padding: 2px 16px;
		color: white;
	}

	.row:after {
		content: "";
		display: table;
		clear: both;
	}

	/* Six columns side by side */
	.column {
		float: left;
		width: 16.66%;
	}

	/* Add a transparency effect for thumnbail images */
	.demo {
		opacity: 0.6;
	}

	.active,
	.demo:hover {
		opacity: 1;
	}

	.MultiCarousel {
		float: left;
		overflow: hidden;
		padding: 15px;
		width: 100%;
		position: relative;
	}

	.MultiCarousel .MultiCarousel-inner {
		transition: 1s ease all;
		float: left;
	}

	.MultiCarousel .MultiCarousel-inner .item {
		float: left;
	}

	.MultiCarousel .MultiCarousel-inner .item>div {
		text-align: center;
		padding: 10px;
		margin: 10px;
		background: #f1f1f1;
		color: #666;
	}

	.MultiCarousel .leftLst,
	.MultiCarousel .rightLst {
		position: absolute;
		border-radius: 50%;
		top: calc(50% - 20px);
	}

	.MultiCarousel .leftLst {
		left: 0;
	}

	.MultiCarousel .rightLst {
		right: 0;
	}

	.MultiCarousel .leftLst.over,
	.MultiCarousel .rightLst.over {
		pointer-events: none;
		background: #ccc;
	}
</style>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script>
	var slideIndex = 1;
	showSlides(slideIndex);

	// Next/previous controls
	function plusSlides(n) {
		showSlides(slideIndex += n);
	}

	// Thumbnail image controls
	function currentSlide(n) {
		showSlides(slideIndex = n);
	}

	function showSlides(n) {
		var i;
		var slides = document.getElementsByClassName("mySlides");
		var dots = document.getElementsByClassName("demo");
		var captionText = document.getElementById("caption");
		if (n > slides.length) {
			slideIndex = 1
		}
		if (n < 1) {
			slideIndex = slides.length
		}
		for (i = 0; i < slides.length; i++) {
			slides[i].style.display = "none";
		}
		for (i = 0; i < dots.length; i++) {
			dots[i].className = dots[i].className.replace(" active", "");
		}
		slides[slideIndex - 1].style.display = "block";
		dots[slideIndex - 1].className += " active";
		captionText.innerHTML = dots[slideIndex - 1].alt;
	}
	$(document).ready(function() {
		var itemsMainDiv = ('.MultiCarousel');
		var itemsDiv = ('.MultiCarousel-inner');
		var itemWidth = "";

		$('.leftLst, .rightLst').click(function() {
			var condition = $(this).hasClass("leftLst");
			if (condition)
				click(0, this);
			else
				click(1, this)
		});

		ResCarouselSize();




		$(window).resize(function() {
			ResCarouselSize();
		});

		//this function define the size of the items
		function ResCarouselSize() {
			var incno = 0;
			var dataItems = ("data-items");
			var itemClass = ('.item');
			var id = 0;
			var btnParentSb = '';
			var itemsSplit = '';
			var sampwidth = $(itemsMainDiv).width();
			var bodyWidth = $('body').width();
			$(itemsDiv).each(function() {
				id = id + 1;
				var itemNumbers = $(this).find(itemClass).length;
				btnParentSb = $(this).parent().attr(dataItems);
				itemsSplit = btnParentSb.split(',');
				$(this).parent().attr("id", "MultiCarousel" + id);


				if (bodyWidth >= 1200) {
					incno = itemsSplit[3];
					itemWidth = sampwidth / incno;
				} else if (bodyWidth >= 992) {
					incno = itemsSplit[2];
					itemWidth = sampwidth / incno;
				} else if (bodyWidth >= 768) {
					incno = itemsSplit[1];
					itemWidth = sampwidth / incno;
				} else {
					incno = itemsSplit[0];
					itemWidth = sampwidth / incno;
				}
				$(this).css({
					'transform': 'translateX(0px)',
					'width': itemWidth * itemNumbers
				});
				$(this).find(itemClass).each(function() {
					$(this).outerWidth(itemWidth);
				});

				$(".leftLst").addClass("over");
				$(".rightLst").removeClass("over");

			});
		}


		//this function used to move the items
		function ResCarousel(e, el, s) {
			var leftBtn = ('.leftLst');
			var rightBtn = ('.rightLst');
			var translateXval = '';
			var divStyle = $(el + ' ' + itemsDiv).css('transform');
			var values = divStyle.match(/-?[\d\.]+/g);
			var xds = Math.abs(values[4]);
			if (e == 0) {
				translateXval = parseInt(xds) - parseInt(itemWidth * s);
				$(el + ' ' + rightBtn).removeClass("over");

				if (translateXval <= itemWidth / 2) {
					translateXval = 0;
					$(el + ' ' + leftBtn).addClass("over");
				}
			} else if (e == 1) {
				var itemsCondition = $(el).find(itemsDiv).width() - $(el).width();
				translateXval = parseInt(xds) + parseInt(itemWidth * s);
				$(el + ' ' + leftBtn).removeClass("over");

				if (translateXval >= itemsCondition - itemWidth / 2) {
					translateXval = itemsCondition;
					$(el + ' ' + rightBtn).addClass("over");
				}
			}
			$(el + ' ' + itemsDiv).css('transform', 'translateX(' + -translateXval + 'px)');
		}

		//It is used to get some elements from btn
		function click(ell, ee) {
			var Parent = "#" + $(ee).parent().attr("id");
			var slide = $(Parent).attr("data-slide");
			ResCarousel(ell, Parent, slide);
		}

	});
</script>
@endsection
@section('title')
{{$sanpham->name}}
@endsection