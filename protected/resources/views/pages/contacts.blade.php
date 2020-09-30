@extends('layout.index')
@section('content')
<div class="beta-map">		
	<div class="abs-fullwidth beta-map wow flipInX">
		{!!$thongtinchung_share->googlemap!!}
	</div>
</div>
<div id="content" class="space-top-none">
			
	<div class="space50">&nbsp;</div>
	<div class="row">
		<div class="col-sm-8">
			<h2>Liên hệ</h2>
			<div class="space20">&nbsp;</div>
			<p>Mời bạn nhập thông tin liên hệ chúng tôi sẽ liên hệ lại ngay</p>
			<div class="space20">&nbsp;</div>
			@if(session('thongbao'))
				<div class="alert alert-success">{{session('thongbao')}}</div>
			@endif
			<form action="{{route('postContacts')}}" method="post" class="contact-form">
				<input type="hidden" name="_token" value="{{csrf_token()}}">

				<div class="form-block">
					<input required name="name" type="text" placeholder="Tên của bạn" value="{{old('name')}}">
				</div>
				<div class="form-block">
					<input required name="email" type="email" placeholder="Email của bạn" value="{{old('email')}}">
				</div>
				<div class="form-block">
					<input required name="phone" type="number" placeholder="Phone của bạn" value="{{old('phone')}}">
				</div>
				<div class="form-block">
					<input required name="subject" type="text" placeholder="Chủ đề" value="{{old('subject')}}">
				</div>
				<div class="form-block">
					<textarea required name="message" placeholder="Lời nhắn">{{old('message')}}</textarea>
				</div>
				<div class="form-block">
					<button type="submit" class="beta-btn primary">Gửi <i class="fa fa-chevron-right"></i></button>
				</div>
			</form>
		</div>
		<div class="col-sm-4">
			<h2>Thông tin</h2>
			<div class="space20">&nbsp;</div>

			<h6 class="contact-title"><b>Địa chỉ</b></h6>
			<p>
				{!!$thongtinchung_share->address!!}
			</p>
			<div class="space20">&nbsp;</div>
			<h6 class="contact-title"><b>Điện thoại</b></h6>
			<p>
				{!!$thongtinchung_share->phone!!}<br>				
				
			</p>
			<h6 class="contact-title"><b>Email</b></h6>
			<p>
				{!!$thongtinchung_share->email!!}<br>				
				
			</p>
			
		</div>
	</div>
</div> <!-- #content -->

@endsection

@section('title')
{{'Liên hệ'}}
@endsection