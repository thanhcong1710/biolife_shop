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
	<form action="{{route('nguoidung')}}" method="post" class="beta-form-checkout">
	<input type="hidden" name="_token" value="{{csrf_token()}}">
		<div class="row">
			<div class="col-sm-3"></div>
			<div class="col-sm-6">
				<h4>Người dùng</h4>
				<div class="space20">&nbsp;</div>
				
				<div class="form-block">
					<label for="email">Email *</label>
					<input type="email" id="email" name = "email" value="{{$nguoidung->email}} "disabled>
				</div>

				<div class="form-block">
					<label for="your_last_name">Họ tên *</label>
					<input type="text" id="your_last_name" name="name" required value="{{$nguoidung->name}}">
				</div>

				<div class="form-block">
					<label for="adress">Địa chỉ *</label>
					<input type="text" id="adress"  name="address" required value="{{$nguoidung->address}}">
				</div>


				<div class="form-block">
					<label for="phone">Điện thoại *</label>
					<input type="text" id="phone" required name="phone" required value="{{$nguoidung->phone}}">
				</div>
				<div class="form-block">
					<label for="phone">Đổi mật khẩu </label>					
					<input id="changepass" name = "changepass" style="display: block;margin-left: -158px;" type="checkbox">
				</div>
				<div class="form-block">
					<label for="phone">Mật khẩu mới *</label>					
					<input type="password" class="password" required name="password" disabled="">
				</div>
				<div class="form-block">
					<label for="phone">Nhập lại mật khẩu *</label>
					<input type="password" class="password" required name="passwordAgain" disabled="">
				</div>
				<div class="form-block">
					<button type="submit" class="btn btn-primary">Lưu lại</button>
				</div>
			</div>
			<div class="col-sm-3"></div>
		</div>
	</form>
</div> <!-- #content -->

@endsection

@section('script')
	<script>
		$(document).ready(function($){
			
			$("#changepass").change(function(){

				if ($(this).is(":checked")) 
				{
					$(".password").removeAttr('disabled');
				}
				else 
					$(".password").attr('disabled','');

			});
		});
	</script>
@endsection

@section('title')
{{'Tài khoản'}}
@endsection