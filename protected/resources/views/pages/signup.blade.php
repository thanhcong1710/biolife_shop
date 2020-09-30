@extends('layout.index')

@section('content')

<div id="content">
	@if(count($errors) >0)
		<div class="alert alert-danger">
			@foreach($errors->all() as $er)
				{{$er}}<br>
			@endforeach
		</div>

	@endif	
	@if(session('thongbao'))
		<div class="alert alert-success">{{session('thongbao')}}</div>
	@endif
	<form action="{{route('signup')}}" method="post" class="beta-form-checkout">
	<input type="hidden" name="_token" value="{{csrf_token()}}">
		<div class="row">
			<div class="col-sm-3"></div>
			<div class="col-sm-6">
				<h4>Đăng kí</h4>
				<div class="space20">&nbsp;</div>
				
				<div class="form-block">
					<label for="email">Email *</label>
					<input type="email" id="email" name = "email" required placeholder="expample@gmail.com">
				</div>

				<div class="form-block">
					<label for="your_last_name">Họ tên *</label>
					<input type="text" id="your_last_name" name="name" required placeholder="Nhập họ tên">
				</div>

				<div class="form-block">
					<label for="adress">Địa chỉ *</label>
					<input type="text" id="adress"  name="address" required placeholder="Nhập địa chỉ">
				</div>


				<div class="form-block">
					<label for="phone">Điện thoại *</label>
					<input type="text" id="phone" required name="phone" placeholder="Nhập số điện thoại">
				</div>
				<div class="form-block">
					<label for="phone">Mật khẩu *</label>
					<input type="password" id="phone" required name="password">
				</div>
				<div class="form-block">
					<label for="phone">Nhập lại mật khẩu *</label>
					<input type="password" id="phone" required name="passwordAgain">
				</div>
				<div class="form-block">
					<button type="submit" class="btn btn-primary">Đăng ký</button>
				</div>
			</div>
			<div class="col-sm-3"></div>
		</div>
	</form>
</div> <!-- #content -->

@endsection

@section('title')
{{'Đăng ký'}}
@endsection