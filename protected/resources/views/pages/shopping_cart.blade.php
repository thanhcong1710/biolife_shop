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
			<li class="nav-item"><a href="http://kute-themes.com/html/biolife/index.html" class="permal-link">Home</a></li>
			<li class="nav-item"><span class="current-page">ShoppingCart</span></li>
		</ul>
	</nav>
</div>

<div class="page-contain shopping-cart">

	<!-- Main content -->
	<div id="main-content" class="main-content">
		<div class="container">

			<!--Top banner-->
			<div class="top-banner background-top-banner-for-shopping min-height-346px">
				<h3 class="title">Save $50!*</h3>
				<p class="subtitle">Save $50 when you open an account online &amp; spen $50 on your first online purchase to day</p>
				<ul class="list">
					<li>
						<div class="price-less">
							<span class="desc">Purchase amount</span>
							<span class="cost">$0.00</span>
						</div>
					</li>
					<li>
						<div class="price-less">
							<span class="desc">Credit on billing statement</span>
							<span class="cost">$0.00</span>
						</div>
					</li>
					<li>
						<div class="price-less sum">
							<span class="desc">Cost affter statemen credit</span>
							<span class="cost">$0.00</span>
						</div>
					</li>
				</ul>
				<p class="btns">
					<a href="http://kute-themes.com/html/biolife/shopping-cart.html#" class="btn">Open Account</a>
					<a href="http://kute-themes.com/html/biolife/shopping-cart.html#" class="btn">Learn more</a>
				</p>
			</div>

			<!--Cart Table-->
			<div class="shopping-cart-container">
				<div class="row">
					<div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
						<h3 class="box-title">Your cart items</h3>
						<form class="shopping-cart-form" action="http://kute-themes.com/html/biolife/shopping-cart.html#" method="post">
							<table class="shop_table cart-form">
								<thead>
									<tr>
										<th class="product-name">Product Name</th>
										<th class="product-price">Price</th>
										<th class="product-quantity">Quantity</th>
										<th class="product-subtotal">Total</th>
									</tr>
								</thead>
								<tbody>
									<tr class="cart_item">
										<td class="product-thumbnail" data-title="Product Name">
											<a class="prd-thumb" href="http://kute-themes.com/html/biolife/shopping-cart.html#">
												<figure><img width="113" height="113" src="assets/biolife/images/pr-01.jpg" alt="shipping cart"></figure>
											</a>
											<a class="prd-name" href="http://kute-themes.com/html/biolife/shopping-cart.html#">National Fresh Fruit</a>
											<div class="action">
												<a href="http://kute-themes.com/html/biolife/shopping-cart.html#" class="edit"><i class="fa fa-pencil" aria-hidden="true"></i></a>
												<a href="http://kute-themes.com/html/biolife/shopping-cart.html#" class="remove"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
											</div>
										</td>
										<td class="product-price" data-title="Price">
											<div class="price price-contain">
												<ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
												<del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
											</div>
										</td>
										<td class="product-quantity" data-title="Quantity">
											<div class="quantity-box type1">
												<div class="qty-input">
													<input type="text" name="qty12554" value="1" data-max_value="20" data-min_value="1" data-step="1">
													<a href="http://kute-themes.com/html/biolife/shopping-cart.html#" class="qty-btn btn-up"><i class="fa fa-caret-up" aria-hidden="true"></i></a>
													<a href="http://kute-themes.com/html/biolife/shopping-cart.html#" class="qty-btn btn-down"><i class="fa fa-caret-down" aria-hidden="true"></i></a>
												</div>
											</div>
										</td>
										<td class="product-subtotal" data-title="Total">
											<div class="price price-contain">
												<ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
												<del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
											</div>
										</td>
									</tr>
									<tr class="cart_item">
										<td class="product-thumbnail" data-title="Product Name">
											<a class="prd-thumb" href="http://kute-themes.com/html/biolife/shopping-cart.html#">
												<figure><img width="113" height="113" src="assets/biolife/images/pr-02.jpg" alt="shipping cart"></figure>
											</a>
											<a class="prd-name" href="http://kute-themes.com/html/biolife/shopping-cart.html#">National Fresh Fruit</a>
											<div class="action">
												<a href="http://kute-themes.com/html/biolife/shopping-cart.html#" class="edit"><i class="fa fa-pencil" aria-hidden="true"></i></a>
												<a href="http://kute-themes.com/html/biolife/shopping-cart.html#" class="remove"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
											</div>
										</td>
										<td class="product-price" data-title="Price">
											<div class="price price-contain">
												<ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
												<del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
											</div>
										</td>
										<td class="product-quantity" data-title="Quantity">
											<div class="quantity-box type1">
												<div class="qty-input">
													<input type="text" name="qty12554" value="1" data-max_value="20" data-min_value="1" data-step="1">
													<a href="http://kute-themes.com/html/biolife/shopping-cart.html#" class="qty-btn btn-up"><i class="fa fa-caret-up" aria-hidden="true"></i></a>
													<a href="http://kute-themes.com/html/biolife/shopping-cart.html#" class="qty-btn btn-down"><i class="fa fa-caret-down" aria-hidden="true"></i></a>
												</div>
											</div>
										</td>
										<td class="product-subtotal" data-title="Total">
											<div class="price price-contain">
												<ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
												<del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
											</div>
										</td>
									</tr>
									<tr class="cart_item wrap-buttons">
										<td class="wrap-btn-control" colspan="4">
											<a class="btn back-to-shop">Back to Shop</a>
											<button class="btn btn-update" type="submit" disabled="">update</button>
											<button class="btn btn-clear" type="reset">clear all</button>
										</td>
									</tr>
								</tbody>
							</table>
						</form>
					</div>
					<div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
						<div class="shpcart-subtotal-block">
							<div class="subtotal-line">
								<b class="stt-name">Subtotal <span class="sub">(2ittems)</span></b>
								<span class="stt-price">£170.00</span>
							</div>
							<div class="subtotal-line">
								<b class="stt-name">Shipping</b>
								<span class="stt-price">£0.00</span>
							</div>
							<div class="tax-fee">
								<p class="title">Est. Taxes &amp; Fees</p>
								<p class="desc">Based on 56789</p>
							</div>
							<div class="btn-checkout">
								<a href="http://kute-themes.com/html/biolife/shopping-cart.html#" class="btn checkout">Check out</a>
							</div>
							<div class="biolife-progress-bar">
								<table>
									<tbody>
										<tr>
											<td class="first-position">
												<span class="index">$0</span>
											</td>
											<td class="mid-position">
												<div class="progress">
													<div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</td>
											<td class="last-position">
												<span class="index">$99</span>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
							<p class="pickup-info"><b>Free Pickup</b> is available as soon as today More about shipping and pickup</p>
						</div>
					</div>
				</div>
			</div>

			<!--Related Product-->
			<div class="product-related-box single-layout">
				<div class="biolife-title-box lg-margin-bottom-26px-im">
					<span class="biolife-icon icon-organic"></span>
					<span class="subtitle">All the best item for You</span>
					<h3 class="main-title">Related Products</h3>
				</div>
				<ul class="products-list biolife-carousel nav-center-02 nav-none-on-mobile slick-initialized slick-slider" data-slick="{&quot;rows&quot;:1,&quot;arrows&quot;:true,&quot;dots&quot;:false,&quot;infinite&quot;:false,&quot;speed&quot;:400,&quot;slidesMargin&quot;:0,&quot;slidesToShow&quot;:5, &quot;responsive&quot;:[{&quot;breakpoint&quot;:1200, &quot;settings&quot;:{ &quot;slidesToShow&quot;: 4}},{&quot;breakpoint&quot;:992, &quot;settings&quot;:{ &quot;slidesToShow&quot;: 3, &quot;slidesMargin&quot;:20}},{&quot;breakpoint&quot;:768, &quot;settings&quot;:{ &quot;slidesToShow&quot;: 2, &quot;slidesMargin&quot;:10}}]}"><span class="biolife-icon icon-left-arrow prev slick-arrow slick-disabled" aria-disabled="true" style=""></span>







					<div class="slick-list draggable">
						<div class="slick-track" style="opacity: 1; width: 1666px; transform: translate3d(0px, 0px, 0px);">
							<li class="product-item first-slick slick-slide slick-current slick-active" tabindex="0" style="margin-right: 0px; width: 238px;" data-slick-index="0" aria-hidden="false">
								<div class="contain-product layout-default">
									<div class="product-thumb">
										<a href="http://kute-themes.com/html/biolife/shopping-cart.html#" class="link-to-product" tabindex="0">
											<img src="assets/biolife/images/p-13.jpg" alt="dd" width="270" height="270" class="product-thumnail">
										</a>
									</div>
									<div class="info">
										<b class="categories">Fresh Fruit</b>
										<h4 class="product-title"><a href="http://kute-themes.com/html/biolife/shopping-cart.html#" class="pr-name" tabindex="0">National Fresh Fruit</a></h4>
										<div class="price ">
											<ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
											<del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
										</div>
										<div class="slide-down-box">
											<p class="message">All products are carefully selected to ensure food safety.</p>
											<div class="buttons">
												<a href="http://kute-themes.com/html/biolife/shopping-cart.html#" class="btn wishlist-btn" tabindex="0"><i class="fa fa-heart" aria-hidden="true"></i></a>
												<a href="http://kute-themes.com/html/biolife/shopping-cart.html#" class="btn add-to-cart-btn" tabindex="0"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
												<a href="http://kute-themes.com/html/biolife/shopping-cart.html#" class="btn compare-btn" tabindex="0"><i class="fa fa-random" aria-hidden="true"></i></a>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="product-item slick-slide slick-active" tabindex="0" style="margin-right: 0px; width: 238px;" data-slick-index="1" aria-hidden="false">
								<div class="contain-product layout-default">
									<div class="product-thumb">
										<a href="http://kute-themes.com/html/biolife/shopping-cart.html#" class="link-to-product" tabindex="0">
											<img src="assets/biolife/images/p-14.jpg" alt="dd" width="270" height="270" class="product-thumnail">
										</a>
									</div>
									<div class="info">
										<b class="categories">Fresh Fruit</b>
										<h4 class="product-title"><a href="http://kute-themes.com/html/biolife/shopping-cart.html#" class="pr-name" tabindex="0">National Fresh Fruit</a></h4>
										<div class="price">
											<ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
											<del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
										</div>
										<div class="slide-down-box">
											<p class="message">All products are carefully selected to ensure food safety.</p>
											<div class="buttons">
												<a href="http://kute-themes.com/html/biolife/shopping-cart.html#" class="btn wishlist-btn" tabindex="0"><i class="fa fa-heart" aria-hidden="true"></i></a>
												<a href="http://kute-themes.com/html/biolife/shopping-cart.html#" class="btn add-to-cart-btn" tabindex="0"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
												<a href="http://kute-themes.com/html/biolife/shopping-cart.html#" class="btn compare-btn" tabindex="0"><i class="fa fa-random" aria-hidden="true"></i></a>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="product-item slick-slide slick-active" tabindex="0" style="margin-right: 0px; width: 238px;" data-slick-index="2" aria-hidden="false">
								<div class="contain-product layout-default">
									<div class="product-thumb">
										<a href="http://kute-themes.com/html/biolife/shopping-cart.html#" class="link-to-product" tabindex="0">
											<img src="assets/biolife/images/p-15.jpg" alt="dd" width="270" height="270" class="product-thumnail">
										</a>
									</div>
									<div class="info">
										<b class="categories">Fresh Fruit</b>
										<h4 class="product-title"><a href="http://kute-themes.com/html/biolife/shopping-cart.html#" class="pr-name" tabindex="0">National Fresh Fruit</a></h4>
										<div class="price">
											<ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
											<del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
										</div>
										<div class="slide-down-box">
											<p class="message">All products are carefully selected to ensure food safety.</p>
											<div class="buttons">
												<a href="http://kute-themes.com/html/biolife/shopping-cart.html#" class="btn wishlist-btn" tabindex="0"><i class="fa fa-heart" aria-hidden="true"></i></a>
												<a href="http://kute-themes.com/html/biolife/shopping-cart.html#" class="btn add-to-cart-btn" tabindex="0"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
												<a href="http://kute-themes.com/html/biolife/shopping-cart.html#" class="btn compare-btn" tabindex="0"><i class="fa fa-random" aria-hidden="true"></i></a>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="product-item slick-slide slick-active" tabindex="0" style="margin-right: 0px; width: 238px;" data-slick-index="3" aria-hidden="false">
								<div class="contain-product layout-default">
									<div class="product-thumb">
										<a href="http://kute-themes.com/html/biolife/shopping-cart.html#" class="link-to-product" tabindex="0">
											<img src="assets/biolife/images/p-10.jpg" alt="dd" width="270" height="270" class="product-thumnail">
										</a>
									</div>
									<div class="info">
										<b class="categories">Fresh Fruit</b>
										<h4 class="product-title"><a href="http://kute-themes.com/html/biolife/shopping-cart.html#" class="pr-name" tabindex="0">National Fresh Fruit</a></h4>
										<div class="price">
											<ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
											<del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
										</div>
										<div class="slide-down-box">
											<p class="message">All products are carefully selected to ensure food safety.</p>
											<div class="buttons">
												<a href="http://kute-themes.com/html/biolife/shopping-cart.html#" class="btn wishlist-btn" tabindex="0"><i class="fa fa-heart" aria-hidden="true"></i></a>
												<a href="http://kute-themes.com/html/biolife/shopping-cart.html#" class="btn add-to-cart-btn" tabindex="0"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
												<a href="http://kute-themes.com/html/biolife/shopping-cart.html#" class="btn compare-btn" tabindex="0"><i class="fa fa-random" aria-hidden="true"></i></a>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="product-item slick-slide last-slick slick-active" tabindex="0" style="margin-right: 0px; width: 238px;" data-slick-index="4" aria-hidden="false">
								<div class="contain-product layout-default">
									<div class="product-thumb">
										<a href="http://kute-themes.com/html/biolife/shopping-cart.html#" class="link-to-product" tabindex="0">
											<img src="assets/biolife/images/p-08.jpg" alt="dd" width="270" height="270" class="product-thumnail">
										</a>
									</div>
									<div class="info">
										<b class="categories">Fresh Fruit</b>
										<h4 class="product-title"><a href="http://kute-themes.com/html/biolife/shopping-cart.html#" class="pr-name" tabindex="0">National Fresh Fruit</a></h4>
										<div class="price">
											<ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
											<del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
										</div>
										<div class="slide-down-box">
											<p class="message">All products are carefully selected to ensure food safety.</p>
											<div class="buttons">
												<a href="http://kute-themes.com/html/biolife/shopping-cart.html#" class="btn wishlist-btn" tabindex="0"><i class="fa fa-heart" aria-hidden="true"></i></a>
												<a href="http://kute-themes.com/html/biolife/shopping-cart.html#" class="btn add-to-cart-btn" tabindex="0"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
												<a href="http://kute-themes.com/html/biolife/shopping-cart.html#" class="btn compare-btn" tabindex="0"><i class="fa fa-random" aria-hidden="true"></i></a>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="product-item slick-slide" tabindex="-1" style="margin-right: 0px; width: 238px;" data-slick-index="5" aria-hidden="true">
								<div class="contain-product layout-default">
									<div class="product-thumb">
										<a href="http://kute-themes.com/html/biolife/shopping-cart.html#" class="link-to-product" tabindex="-1">
											<img src="assets/biolife/images/p-21.jpg" alt="dd" width="270" height="270" class="product-thumnail">
										</a>
									</div>
									<div class="info">
										<b class="categories">Fresh Fruit</b>
										<h4 class="product-title"><a href="http://kute-themes.com/html/biolife/shopping-cart.html#" class="pr-name" tabindex="-1">National Fresh Fruit</a></h4>
										<div class="price">
											<ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
											<del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
										</div>
										<div class="slide-down-box">
											<p class="message">All products are carefully selected to ensure food safety.</p>
											<div class="buttons">
												<a href="http://kute-themes.com/html/biolife/shopping-cart.html#" class="btn wishlist-btn" tabindex="-1"><i class="fa fa-heart" aria-hidden="true"></i></a>
												<a href="http://kute-themes.com/html/biolife/shopping-cart.html#" class="btn add-to-cart-btn" tabindex="-1"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
												<a href="http://kute-themes.com/html/biolife/shopping-cart.html#" class="btn compare-btn" tabindex="-1"><i class="fa fa-random" aria-hidden="true"></i></a>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="product-item slick-slide" tabindex="-1" style="margin-right: 0px; width: 238px;" data-slick-index="6" aria-hidden="true">
								<div class="contain-product layout-default">
									<div class="product-thumb">
										<a href="http://kute-themes.com/html/biolife/shopping-cart.html#" class="link-to-product" tabindex="-1">
											<img src="assets/biolife/images/p-18.jpg" alt="dd" width="270" height="270" class="product-thumnail">
										</a>
									</div>
									<div class="info">
										<b class="categories">Fresh Fruit</b>
										<h4 class="product-title"><a href="http://kute-themes.com/html/biolife/shopping-cart.html#" class="pr-name" tabindex="-1">National Fresh Fruit</a></h4>
										<div class="price">
											<ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
											<del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
										</div>
										<div class="slide-down-box">
											<p class="message">All products are carefully selected to ensure food safety.</p>
											<div class="buttons">
												<a href="http://kute-themes.com/html/biolife/shopping-cart.html#" class="btn wishlist-btn" tabindex="-1"><i class="fa fa-heart" aria-hidden="true"></i></a>
												<a href="http://kute-themes.com/html/biolife/shopping-cart.html#" class="btn add-to-cart-btn" tabindex="-1"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
												<a href="http://kute-themes.com/html/biolife/shopping-cart.html#" class="btn compare-btn" tabindex="-1"><i class="fa fa-random" aria-hidden="true"></i></a>
											</div>
										</div>
									</div>
								</div>
							</li>
						</div>
					</div><span class="biolife-icon icon-arrow-right next slick-arrow" style="" aria-disabled="false"></span>
				</ul>
			</div>

		</div>
	</div>
</div>

@endsection