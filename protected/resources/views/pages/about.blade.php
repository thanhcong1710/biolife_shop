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
			<li class="nav-item"><span class="current-page">About us</span></li>
		</ul>
	</nav>
</div>

<div class="page-contain about-us">

	<!-- Main content -->
	<div id="main-content" class="main-content">

		<div class="welcome-us-block">
			<div class="container">
				<h4 class="title">Welcome to Biolife store!</h4>
				<div class="text-wraper">
					<p class="text-info">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur,</p>
					<p class="qt-text">“There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.”</p>
				</div>
			</div>
		</div>

		<div class="why-choose-us-block">
			<div class="container">
				<h4 class="box-title">Why Choose us</h4>
				<b class="subtitle">Natural food is taken from the world's most modern farms with strict safety cycles</b>
				<div class="showcase">
					<div class="sc-child sc-left-position">
						<ul class="sc-list">
							<li>
								<div class="sc-element color-01">
									<span class="biolife-icon icon-fresh-drink"></span>
									<div class="txt-content">
										<span class="number">01</span>
										<b class="title">Always Fresh</b>
										<p class="desc">Natural products are kept in the best condition to ensure always fresh</p>
									</div>
								</div>
							</li>
							<li>
								<div class="sc-element color-02">
									<span class="biolife-icon icon-healthy-about"></span>
									<div class="txt-content">
										<span class="number">02</span>
										<b class="title">Overall Healthy</b>
										<p class="desc">Natural products are kept in the best condition to ensure always fresh</p>
									</div>
								</div>
							</li>
							<li>
								<div class="sc-element color-03">
									<span class="biolife-icon icon-green-safety"></span>
									<div class="txt-content">
										<span class="number">03</span>
										<b class="title">Encironmental Safety</b>
										<p class="desc">Natural products are kept in the best condition to ensure always fresh</p>
									</div>
								</div>
							</li>
						</ul>
					</div>
					<div class="sc-child sc-center-position">
						<figure><img src="assets/biolife/images/about-us/bn04.jpg" alt="" width="622" height="656"></figure>
					</div>
					<div class="sc-child sc-right-position">
						<ul class="sc-list">
							<li>
								<div class="sc-element color-04">
									<span class="biolife-icon icon-capacity-about"></span>
									<div class="txt-content">
										<span class="number">04</span>
										<b class="title">Antioxidant Capacity</b>
										<p class="desc">Natural products are kept in the best condition to ensure always fresh</p>
									</div>
								</div>
							</li>
							<li>
								<div class="sc-element color-05">
									<span class="biolife-icon icon-arteries-about"></span>
									<div class="txt-content">
										<span class="number">05</span>
										<b class="title">Good For Arteries</b>
										<p class="desc">Natural products are kept in the best condition to ensure always fresh</p>
									</div>
								</div>
							</li>
							<li>
								<div class="sc-element color-06">
									<span class="biolife-icon icon-title"></span>
									<div class="txt-content">
										<span class="number">06</span>
										<b class="title">Quality Standards</b>
										<p class="desc">Natural products are kept in the best condition to ensure always fresh</p>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<div class="testimonial-block">
			<div class="container">
				<h4 class="box-title">Testimonial</h4>
				<ul class="testimonial-list biolife-carousel slick-initialized slick-slider slick-dotted" data-slick="{&quot;arrows&quot;:false,&quot;dots&quot;:true,&quot;infinite&quot;:false,&quot;speed&quot;:400,&quot;slidesMargin&quot;:30,&quot;slidesToShow&quot;:3, &quot;responsive&quot;:[{&quot;breakpoint&quot;:1200, &quot;settings&quot;:{ &quot;slidesToShow&quot;: 3}},{&quot;breakpoint&quot;:992, &quot;settings&quot;:{ &quot;slidesToShow&quot;: 2}},{&quot;breakpoint&quot;:768, &quot;settings&quot;:{ &quot;slidesToShow&quot;: 2}},{&quot;breakpoint&quot;:500, &quot;settings&quot;:{ &quot;slidesToShow&quot;: 1}}]}">
					<div class="slick-list draggable">
						<div class="slick-track" style="opacity: 1; width: 2520px; transform: translate3d(-800px, 0px, 0px);">
							<li class="slick-slide" data-slick-index="0" aria-hidden="true" tabindex="-1" role="tabpanel" id="slick-slide10" aria-describedby="slick-slide-control10" style="margin-right: 30px; width: 370px;">
								<div class="testml-elem">
									<div class="avata">
										<figure><img src="assets/biolife/images/author-01.png" alt="" width="217" height="217"></figure>
									</div>
									<p class="desc">The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text.</p>
									<b class="name">Ms. Jay Doe</b>
									<b class="title">Manager, Mycrosoft co.</b>
									<div class="rating">
										<p class="star-rating"><span class="width-80percent"></span></p>
									</div>
								</div>
							</li>
							<li class="slick-slide" data-slick-index="1" aria-hidden="true" tabindex="-1" role="tabpanel" id="slick-slide11" aria-describedby="slick-slide-control11" style="margin-right: 30px; width: 370px;">
								<div class="testml-elem">
									<div class="avata">
										<figure><img src="assets/biolife/images/author-02.png" alt="" width="217" height="217"></figure>
									</div>
									<p class="desc">The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text.</p>
									<b class="name">Mr. Braun</b>
									<b class="title">Sales Manager</b>
									<div class="rating">
										<p class="star-rating"><span class="width-90percent"></span></p>
									</div>
								</div>
							</li>
							<li class="slick-slide slick-current slick-active first-slick" data-slick-index="2" aria-hidden="false" tabindex="0" role="tabpanel" id="slick-slide12" aria-describedby="slick-slide-control12" style="margin-right: 30px; width: 370px;">
								<div class="testml-elem">
									<div class="avata">
										<figure><img src="assets/biolife/images/about-us/author-03.png" alt="" width="217" height="217"></figure>
									</div>
									<p class="desc">The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text.</p>
									<b class="name">Ms. Danien</b>
									<b class="title">Marketing</b>
									<div class="rating">
										<p class="star-rating"><span class="width-100percent"></span></p>
									</div>
								</div>
							</li>
							<li class="slick-slide slick-active" data-slick-index="3" aria-hidden="false" tabindex="0" role="tabpanel" id="slick-slide13" aria-describedby="slick-slide-control13" style="margin-right: 30px; width: 370px;">
								<div class="testml-elem">
									<div class="avata">
										<figure><img src="assets/biolife/images/about-us/author-01.png" alt="" width="217" height="217"></figure>
									</div>
									<p class="desc">The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text.</p>
									<b class="name">Ms. Jay Doe</b>
									<b class="title">Manager, Mycrosoft co.</b>
									<div class="rating">
										<p class="star-rating"><span class="width-80percent"></span></p>
									</div>
								</div>
							</li>
							<li class="slick-slide slick-active" data-slick-index="4" aria-hidden="false" tabindex="0" role="tabpanel" id="slick-slide14" aria-describedby="slick-slide-control14" style="margin-right: 30px; width: 370px;">
								<div class="testml-elem">
									<div class="avata">
										<figure><img src="assets/biolife/images/about-us/author-02.png" alt="" width="217" height="217"></figure>
									</div>
									<p class="desc">The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text.</p>
									<b class="name">Mr. Braun</b>
									<b class="title">Sales Manager</b>
									<div class="rating">
										<p class="star-rating"><span class="width-90percent"></span></p>
									</div>
								</div>
							</li>
							<li class="slick-slide" data-slick-index="5" aria-hidden="true" tabindex="-1" role="tabpanel" id="slick-slide15" aria-describedby="slick-slide-control15" style="margin-right: 30px; width: 370px;">
								<div class="testml-elem">
									<div class="avata">
										<figure><img src="assets/biolife/images/author-03.png" alt="" width="217" height="217"></figure>
									</div>
									<p class="desc">The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text.</p>
									<b class="name">Ms. Danien</b>
									<b class="title">Marketing</b>
									<div class="rating">
										<p class="star-rating"><span class="width-100percent"></span></p>
									</div>
								</div>
							</li>
						</div>
					</div>





					<ul class="slick-dots" style="" role="tablist">
						<li class="" role="presentation"><button type="button" role="tab" id="slick-slide-control10" aria-controls="slick-slide10" aria-label="1 of 2" tabindex="-1">1</button></li>
						<li role="presentation" class="last-slick"><button type="button" role="tab" id="slick-slide-control11" aria-controls="slick-slide11" aria-label="2 of 2" tabindex="-1">2</button></li>
						<li role="presentation" class="slick-active"><button type="button" role="tab" id="slick-slide-control12" aria-controls="slick-slide12" aria-label="3 of 2" tabindex="0" aria-selected="true">3</button></li>
						<li role="presentation"><button type="button" role="tab" id="slick-slide-control13" aria-controls="slick-slide13" aria-label="4 of 2" tabindex="-1">4</button></li>
					</ul>
				</ul>
			</div>
		</div>
	</div>

</div>

@endsection

@section('title')
{{'Giới thiệu'}}
@endsection