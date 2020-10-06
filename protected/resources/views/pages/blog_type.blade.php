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
            <li class="nav-item"><span class="current-page">{{$category_info->Ten}}</span></li>
		</ul>
	</nav>
</div>
<!-- Page Contain -->
<div class="page-contain blog-page left-sidebar">
    <div class="container">
        <div class="row">

            <!-- Main content -->
            <div id="main-content" class="main-content col-lg-9 col-md-8 col-sm-12 col-xs-12">

                <ul class="posts-list main-post-list">
                    <?php foreach($news AS $new):?>
                    <li class="post-elem">
                        <div class="post-item style-left-info">
                            <div class="thumbnail">
                                <a href="blog/{{$new->id}}/<?php echo $new->TieuDeKhongDau.".html"?>" class="link-to-post"><img src="image/news/{{$new->Hinh}}" width="370" height="270" alt=""></a>
                            </div>
                            <div class="post-content">
                                <h4 class="post-name"><a href="blog/{{$new->id}}/<?php echo $new->TieuDeKhongDau.".html"?>" class="linktopost">{{$new->TieuDe}}</a></h4>
                                <p class="excerpt"><?php echo strip_tags($new->TomTat)?></p>
                                <div class="group-buttons">
                                    <a href="blog/{{$new->id}}/<?php echo $new->TieuDeKhongDau.".html"?>" class="btn readmore">Xem thêm</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <?php endforeach;?>
                </ul>

                <div class="biolife-panigations-block ">
                    {{$news->links()}}
                </div>

            </div>

            <!-- Sidebar -->
            <aside id="sidebar" class="sidebar blog-sidebar col-lg-3 col-md-4 col-sm-12 col-xs-12">

                <div class="sidebar-contain">
                    <!--Categories Widget-->
                    <div class="widget biolife-filter">
                        <h4 class="wgt-title">Danh mục</h4>
                        <div class="wgt-content">
                            <ul class="cat-list">
                                <?php foreach($categories AS $cat):?>
                                <li class="cat-list-item"><a href="blog_type/{{$cat->id}}/<?php echo Common::changeTitle($cat->Ten).".html"?>" class="cat-link">{{$cat->Ten}} ({{$cat->count_new}})</a></li>
                                <?php endforeach;?>
                            </ul>
                        </div>
                    </div>

                    <!--Posts Widget-->
                    <div class="widget posts-widget">
                        <h4 class="wgt-title">Tin nổi bật</h4>
                        <div class="wgt-content">
                            <ul class="posts">
                            <?php foreach($new_noibat AS $noibat):?>
                                <li>
                                    <div class="wgt-post-item">
                                        <div class="thumb">
                                            <a href="blog/{{$noibat->id}}/<?php echo $noibat->TieuDeKhongDau.".html"?>"><img src="image/news/{{$noibat->Hinh}}" width="80" height="58" alt=""></a>
                                        </div>
                                        <div class="detail">
                                            <h4 class="post-name"><a href="blog/{{$noibat->id}}/<?php echo $noibat->TieuDeKhongDau.".html"?>">{{$noibat->TieuDe}}</a></h4>
                                        </div>
                                    </div>
                                </li>
                            <?php endforeach;?>
                                
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