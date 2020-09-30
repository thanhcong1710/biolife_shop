@extends('layout.index')

@section('content')

<div id="content">			
	<form action="login" method="post" class="beta-form-checkout">
	<input type="hidden" name="_token" value="{{csrf_token()}}">
		<div class="row">
			<div class="col-sm-3"></div>
			<div class="col-sm-6">
				<h4>Đăng nhập</h4>
				<div class="space20">&nbsp;</div>
				
				<div class="form-block">
					<label for="email">Email *</label>
					<input type="email" id="email" required name="email">
				</div>
				<div class="form-block">
					<label for="phone">Mật khẩu*</label>
					<input type="password" id="password" required name="password">
				</div>
				<div class="form-block">
					<button type="submit" class="btn btn-primary">Đăng nhập</button>
				</div>
			</div>
			<div class="col-sm-3"></div>
		</div>
	</form>
</div> <!-- #content -->

@endsection

@section('title')
{{'Đăng nhập'}}
@endsection