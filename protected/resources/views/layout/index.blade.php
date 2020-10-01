<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<title>@yield('title')</title>
	<!-- Base URL for CSS -->
	<base href="{{asset('')}}">
	<link href="assets/biolife/css/css" rel="stylesheet">
    <link href="assets/biolife/css/css(1)" rel="stylesheet">
    <link href="assets/biolife/css/css(2)" rel="stylesheet">
    <link href="assets/biolife/css/css(3)" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="http://kute-themes.com/html/biolife/assets/images/favicon.png">
    <link rel="stylesheet" href="assets/biolife/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/biolife/css/animate.min.css">
    <link rel="stylesheet" href="assets/biolife/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/biolife/css/nice-select.css">
    <link rel="stylesheet" href="assets/biolife/css/slick.min.css">
    <link rel="stylesheet" href="assets/biolife/css/style.css">
    <link rel="stylesheet" href="assets/biolife/css/main-color01.css">
    <link rel="stylesheet" type="text/css" href="assets/biolife/css/prm-style.min.css">
    <link rel="stylesheet" href="assets/biolife/css/custom.css">
</head>
<body class="biolife-body @yield('class_page')">
	@include('layout.header')
	@yield('content')
	@include('layout.footer')
	<script src="assets/biolife/js/jquery-3.4.1.min.js"></script>
    <script src="assets/biolife/js/bootstrap.min.js"></script>
    <script src="assets/biolife/js/jquery.countdown.min.js"></script>
    <script src="assets/biolife/js/jquery.nice-select.min.js"></script>
    <script src="assets/biolife/js/jquery.nicescroll.min.js"></script>
    <script src="assets/biolife/js/slick.min.js"></script>
    <script src="assets/biolife/js/biolife.framework.js"></script>
    <script src="assets/biolife/js/functions.js"></script>
    <div id="overlay"></div>
</body>
</html>
