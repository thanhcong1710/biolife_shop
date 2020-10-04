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
                <li class="nav-item"><span class="current-page">{{$loai_products->name}}</span></li>
            </ul>
        </nav>
    </div>

    <div class="page-contain category-page left-sidebar">
        <div class="container">
            <div class="row">
                <!-- Main content -->
                <div id="main-content" class="main-content col-lg-9 col-md-8 col-sm-12 col-xs-12">

                    <div class="product-category grid-style">

                        <div id="top-functions-area" class="top-functions-area">
                            <div class="flt-item to-left group-on-mobile">
                                <span class="flt-title">Refine</span>
                                <a href="http://kute-themes.com/html/biolife/category-grid-left-sidebar.html#" class="icon-for-mobile">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </a>
                                <div class="wrap-selectors">
                                    <form action="http://kute-themes.com/html/biolife/category-grid-left-sidebar.html#" name="frm-refine" method="get">
                                        <span class="title-for-mobile">Refine Products By</span>
                                        <div data-title="Price:" class="selector-item">
                                            <select name="price" class="selector" style="display: none;">
                                                <option value="all">Price</option>
                                                <option value="class-1st">Less than 5$</option>
                                                <option value="class-2nd">$5-10$</option>
                                                <option value="class-3rd">$10-20$</option>
                                                <option value="class-4th">$20-45$</option>
                                                <option value="class-5th">$45-100$</option>
                                                <option value="class-6th">$100-150$</option>
                                                <option value="class-7th">More than 150$</option>
                                            </select>
                                            <div class="nice-select selector" tabindex="0"><span class="current">Price</span>
                                                <ul class="list">
                                                    <li data-value="all" class="option selected">Price</li>
                                                    <li data-value="class-1st" class="option">Less than 5$</li>
                                                    <li data-value="class-2nd" class="option">$5-10$</li>
                                                    <li data-value="class-3rd" class="option">$10-20$</li>
                                                    <li data-value="class-4th" class="option">$20-45$</li>
                                                    <li data-value="class-5th" class="option">$45-100$</li>
                                                    <li data-value="class-6th" class="option">$100-150$</li>
                                                    <li data-value="class-7th" class="option">More than 150$</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div data-title="Brand:" class="selector-item">
                                            <select name="brad" class="selector" style="display: none;">
                                                <option value="all">Top brands</option>
                                                <option value="br2">Brand first</option>
                                                <option value="br3">Brand second</option>
                                                <option value="br4">Brand third</option>
                                                <option value="br5">Brand fourth</option>
                                                <option value="br6">Brand fiveth</option>
                                            </select>
                                            <div class="nice-select selector" tabindex="0"><span class="current">Top brands</span>
                                                <ul class="list">
                                                    <li data-value="all" class="option selected">Top brands</li>
                                                    <li data-value="br2" class="option">Brand first</li>
                                                    <li data-value="br3" class="option">Brand second</li>
                                                    <li data-value="br4" class="option">Brand third</li>
                                                    <li data-value="br5" class="option">Brand fourth</li>
                                                    <li data-value="br6" class="option">Brand fiveth</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div data-title="Avalability:" class="selector-item">
                                            <select name="ability" class="selector" style="display: none;">
                                                <option value="all">Availability</option>
                                                <option value="vl2">Availability 1</option>
                                                <option value="vl3">Availability 2</option>
                                                <option value="vl4">Availability 3</option>
                                                <option value="vl5">Availability 4</option>
                                                <option value="vl6">Availability 5</option>
                                            </select>
                                            <div class="nice-select selector" tabindex="0"><span class="current">Availability</span>
                                                <ul class="list">
                                                    <li data-value="all" class="option selected">Availability</li>
                                                    <li data-value="vl2" class="option">Availability 1</li>
                                                    <li data-value="vl3" class="option">Availability 2</li>
                                                    <li data-value="vl4" class="option">Availability 3</li>
                                                    <li data-value="vl5" class="option">Availability 4</li>
                                                    <li data-value="vl6" class="option">Availability 5</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <p class="btn-for-mobile"><button type="submit" class="btn-submit">Go</button></p>
                                    </form>
                                </div>
                            </div>
                            <div class="flt-item to-right">
                                <span class="flt-title">Sort</span>
                                <div class="wrap-selectors">
                                    <div class="selector-item orderby-selector">
                                        <select name="orderby" class="orderby" aria-label="Shop order" style="display: none;">
                                            <option value="menu_order" selected="selected">Default sorting</option>
                                            <option value="popularity">popularity</option>
                                            <option value="rating">average rating</option>
                                            <option value="date">newness</option>
                                            <option value="price">price: low to high</option>
                                            <option value="price-desc">price: high to low</option>
                                        </select>
                                        <div class="nice-select orderby" tabindex="0"><span class="current">Default sorting</span>
                                            <ul class="list">
                                                <li data-value="menu_order" class="option selected">Default sorting</li>
                                                <li data-value="popularity" class="option">popularity</li>
                                                <li data-value="rating" class="option">average rating</li>
                                                <li data-value="date" class="option">newness</li>
                                                <li data-value="price" class="option">price: low to high</li>
                                                <li data-value="price-desc" class="option">price: high to low</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <ul class="products-list">
                            @foreach($products_top as $k=> $prt)
                            <li class="product-item col-lg-4 col-md-4 col-sm-4 col-xs-6">
                                <div class="contain-product layout-default">
                                    <div class="product-thumb">
                                        <a href="product/{{$prt->id}}/<?php echo Common::changeTitle($prt->name).".html"?>" class="link-to-product">
                                            <img src="image/product/{{$prt->image}}" alt="dd" style="height:200px" class="product-thumnail">
                                        </a>
                                    </div>
                                    <div class="info">
                                        <h4 class="product-title"><a href="product/{{$prt->id}}/<?php echo Common::changeTitle($prt->name).".html"?>" class="pr-name">{{$prt->name}}</a></h4>
                                        <div class="price">
                                            @if($prt->promotion_price < $prt->unit_price && $prt->promotion_price  != 0)
                                            <ins><span class="price-amount">{{number_format($prt->promotion_price)}}<span class="currencySymbol">VNĐ</span></span></ins>
                                            <del><span class="price-amount">{{number_format($prt->unit_price)}}<span class="currencySymbol">VNĐ</span></span></del>
                                            @else
                                            <ins><span class="price-amount">{{number_format($prt->unit_price)}}</span><span class="currencySymbol">VNĐ</span></ins>
                                            @endif
                                            
                                        </div>
                                        <div class="shipping-info">
                                            <p class="shipping-day">3-Day Shipping</p>
                                            <p class="for-today">Pree Pickup Today</p>
                                        </div>
                                        <div class="slide-down-box">
                                            <p class="message">All products are carefully selected to ensure food safety.</p>
                                            <div class="buttons">
                                                <a href="http://kute-themes.com/html/biolife/category-grid-left-sidebar.html#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                <a href="add_product/{{$prt->id}}" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>Thêm vào giỏ hàng</a>
                                                <a href="http://kute-themes.com/html/biolife/category-grid-left-sidebar.html#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <?php if($k%3==2):?>
                                <div style="clear: both;"></div>
                            <?php endif?>    
						    @endforeach
                            </ul>
                        </div>

                        <div class="biolife-panigations-block">
                            {{$products_top->links()}}
                        </div>

                    </div>

                </div>
                <!-- Sidebar -->
                <aside id="sidebar" class="sidebar col-lg-3 col-md-4 col-sm-12 col-xs-12">
                    <div class="biolife-mobile-panels">
                        <span class="biolife-current-panel-title">Sidebar</span>
                        <a class="biolife-close-btn" href="http://kute-themes.com/html/biolife/category-grid-left-sidebar.html#" data-object="open-mobile-filter">×</a>
                    </div>
                    <div class="sidebar-contain">
                        <div class="widget biolife-filter">
                            <h4 class="wgt-title">Danh mục sản phẩm</h4>
                            <div class="wgt-content">
                                <ul class="cat-list">
                                @foreach($type_products as $tp)
                                    <li class="cat-list-item"><a href="product_type/{{$tp->id}}/<?php echo Common::changeTitle($tp->name).".html"?>"  class="cat-link">{{$tp->name}}</a></li>
                                @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="widget price-filter biolife-filter">
                            <h4 class="wgt-title">Price</h4>
                            <div class="wgt-content">
                                <div class="frm-contain">
                                    <form action="http://kute-themes.com/html/biolife/category-grid-left-sidebar.html#" name="price-filter" id="price-filter" method="get">
                                        <p class="f-item">
                                            <label for="pr-from">$</label>
                                            <input class="input-number" type="number" id="pr-from" value="" name="price-from">
                                        </p>
                                        <p class="f-item">
                                            <label for="pr-to">to $</label>
                                            <input class="input-number" type="number" id="pr-to" value="" name="price-from">
                                        </p>
                                        <p class="f-item"><button class="btn-submit" type="submit">go</button></p>
                                    </form>
                                </div>
                                <ul class="check-list bold single">
                                    <li class="check-list-item"><a href="http://kute-themes.com/html/biolife/category-grid-left-sidebar.html#" class="check-link">$0 - $5</a></li>
                                    <li class="check-list-item"><a href="http://kute-themes.com/html/biolife/category-grid-left-sidebar.html#" class="check-link">$5 - $10</a></li>
                                    <li class="check-list-item"><a href="http://kute-themes.com/html/biolife/category-grid-left-sidebar.html#" class="check-link">$15 - $20</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="widget biolife-filter">
                            <h4 class="wgt-title">Brand</h4>
                            <div class="wgt-content">
                                <ul class="check-list multiple">
                                    <li class="check-list-item"><a href="http://kute-themes.com/html/biolife/category-grid-left-sidebar.html#" class="check-link">Great Value Organic</a></li>
                                    <li class="check-list-item"><a href="http://kute-themes.com/html/biolife/category-grid-left-sidebar.html#" class="check-link">Plum Organic</a></li>
                                    <li class="check-list-item"><a href="http://kute-themes.com/html/biolife/category-grid-left-sidebar.html#" class="check-link">Shop to Home</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="widget biolife-filter">
                            <h4 class="wgt-title">Color</h4>
                            <div class="wgt-content">
                                <ul class="color-list">
                                    <li class="color-item"><a href="http://kute-themes.com/html/biolife/category-grid-left-sidebar.html#" class="c-link"><span class="symbol img-color"></span>Multi</a></li>
                                    <li class="color-item"><a href="http://kute-themes.com/html/biolife/category-grid-left-sidebar.html#" class="c-link"><span class="symbol hex-code color-01"></span>Red</a></li>
                                    <li class="color-item"><a href="http://kute-themes.com/html/biolife/category-grid-left-sidebar.html#" class="c-link"><span class="symbol hex-code color-02"></span>Orrange</a></li>
                                    <li class="color-item"><a href="http://kute-themes.com/html/biolife/category-grid-left-sidebar.html#" class="c-link"><span class="symbol hex-code color-03"></span>Other</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="widget biolife-filter">
                            <h4 class="wgt-title">Popular Size</h4>
                            <div class="wgt-content">
                                <ul class="check-list bold multiple">
                                    <li class="check-list-item"><a href="http://kute-themes.com/html/biolife/category-grid-left-sidebar.html#" class="check-link">8oz</a></li>
                                    <li class="check-list-item"><a href="http://kute-themes.com/html/biolife/category-grid-left-sidebar.html#" class="check-link">15oz</a></li>
                                    <li class="check-list-item"><a href="http://kute-themes.com/html/biolife/category-grid-left-sidebar.html#" class="check-link">6oz</a></li>
                                    <li class="check-list-item"><a href="http://kute-themes.com/html/biolife/category-grid-left-sidebar.html#" class="check-link">30oz</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="widget biolife-filter">
                            <h4 class="wgt-title">Number of Pieces</h4>
                            <div class="wgt-content">
                                <ul class="check-list bold">
                                    <li class="check-list-item"><a href="http://kute-themes.com/html/biolife/category-grid-left-sidebar.html#" class="check-link">1 to 9</a></li>
                                    <li class="check-list-item"><a href="http://kute-themes.com/html/biolife/category-grid-left-sidebar.html#" class="check-link">10 to 15</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="widget biolife-filter">
                            <h4 class="wgt-title">Recently Viewed</h4>
                            <div class="wgt-content">
                                <ul class="products">
                                    <li class="pr-item">
                                        <div class="contain-product style-widget">
                                            <div class="product-thumb">
                                                <a href="http://kute-themes.com/html/biolife/category-grid-left-sidebar.html#" class="link-to-product" tabindex="0">
                                                    <img src="assets/biolife/images/p-13.jpg" alt="dd" width="270" height="270" class="product-thumnail">
                                                </a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Fresh Fruit</b>
                                                <h4 class="product-title"><a href="http://kute-themes.com/html/biolife/category-grid-left-sidebar.html#" class="pr-name" tabindex="0">National Fresh Fruit</a></h4>
                                                <div class="price">
                                                    <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                    <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="pr-item">
                                        <div class="contain-product style-widget">
                                            <div class="product-thumb">
                                                <a href="http://kute-themes.com/html/biolife/category-grid-left-sidebar.html#" class="link-to-product" tabindex="0">
                                                    <img src="assets/biolife/images/p-14.jpg" alt="dd" width="270" height="270" class="product-thumnail">
                                                </a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Fresh Fruit</b>
                                                <h4 class="product-title"><a href="http://kute-themes.com/html/biolife/category-grid-left-sidebar.html#" class="pr-name" tabindex="0">National Fresh Fruit</a></h4>
                                                <div class="price">
                                                    <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                    <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="pr-item">
                                        <div class="contain-product style-widget">
                                            <div class="product-thumb">
                                                <a href="http://kute-themes.com/html/biolife/category-grid-left-sidebar.html#" class="link-to-product" tabindex="0">
                                                    <img src="assets/biolife/images/p-10.jpg" alt="dd" width="270" height="270" class="product-thumnail">
                                                </a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Fresh Fruit</b>
                                                <h4 class="product-title"><a href="http://kute-themes.com/html/biolife/category-grid-left-sidebar.html#" class="pr-name" tabindex="0">National Fresh Fruit</a></h4>
                                                <div class="price">
                                                    <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                    <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="widget biolife-filter">
                            <h4 class="wgt-title">Product Tags</h4>
                            <div class="wgt-content">
                                <ul class="tag-cloud">
                                    <li class="tag-item"><a href="http://kute-themes.com/html/biolife/category-grid-left-sidebar.html#" class="tag-link">Fresh Fruit</a></li>
                                    <li class="tag-item"><a href="http://kute-themes.com/html/biolife/category-grid-left-sidebar.html#" class="tag-link">Natural Food</a></li>
                                    <li class="tag-item"><a href="http://kute-themes.com/html/biolife/category-grid-left-sidebar.html#" class="tag-link">Hot</a></li>
                                    <li class="tag-item"><a href="http://kute-themes.com/html/biolife/category-grid-left-sidebar.html#" class="tag-link">Organics</a></li>
                                    <li class="tag-item"><a href="http://kute-themes.com/html/biolife/category-grid-left-sidebar.html#" class="tag-link">Dried Organic</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </aside>
            </div>
        </div>
    </div>
@endsection

@section('title')
{{$loai_products->name}}
@endsection