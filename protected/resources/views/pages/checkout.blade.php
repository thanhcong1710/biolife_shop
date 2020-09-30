@extends('layout.index')

@section('content')
<div id="content">
	@if(count($errors) > 0)
		@foreach($errors->all() as $er)
			<div class="alert alert-danger">
				{{$er}}<br>
			</div>
		@endforeach
	@endif	

	@if(session('thongbao'))
		<div class="alert alert-success">{{session('thongbao')}}</div>
	@endif	
	<form action="{{route('checkout')}}" method="post" class="beta-form-checkout">
	<input type="hidden" name="_token" value="{{csrf_token()}}">
		<div class="row">
			<div class="col-sm-6">
				<h4>Đặt hàng</h4>
				<div class="space20">&nbsp;</div>

				<div class="form-block">
					<label for="name">Họ tên*</label>
					<input type="text" id="name" placeholder="Họ tên" name="name" required>
				</div>
				<div class="form-block">
					<label>Giới tính </label>
					<input id="gender" type="radio" class="input-radio" name="gender" value="nam" checked="checked" style="width: 10%"><span style="margin-right: 10%">Nam</span>
					<input id="gender" type="radio" class="input-radio" name="gender" value="nữ" style="width: 10%"><span>Nữ</span>
								
				</div>

				<div class="form-block">
					<label for="email">Email*</label>
					<input type="email" id="email" name = "email" required placeholder="expample@gmail.com">
				</div>

				<div class="form-block">
					<label for="adress">Địa chỉ*</label>
					<input type="text" id="adress" name = "address" placeholder="Nhập địa chỉ" required>
				</div>
				

				<div class="form-block">
					<label for="phone">Điện thoại*</label>
					<input type="text" id="phone" name="phone" required>
				</div>
				
				<div class="form-block">
					<label for="notes">Ghi chú</label>
					<textarea id="note" name = "note"></textarea>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="your-order">
					<div class="your-order-head"><h5>Đơn hàng của bạn</h5></div>
					<div class="your-order-body" style="padding: 0px 10px">
						<div class="your-order-item">
							<div>
							<!--  one item	 -->
							@if(count($item) >0)
								@foreach($item as $product)
									<div class="media">
										<img width="25%" width="80" height="80" src="image/product/{{$product['item']->image}}" alt="" class="pull-left">
										<div class="media-body">
											<p class="font-large">{{$product['item']->name}}</p>
											
											<span class="color-gray your-order-info">Số lượng: {{$product['soluong']}}</span>
											<span class="color-gray your-order-info">
											đơn giá: 
											@if($product['item']->promotion_price < $product['item']->unit_price && $product['item']->promotion_price  != 0)
												{{number_format($product['item']->promotion_price)}}
											@else
												{{number_format($product['item']->unit_price)}}
											@endif
											</span>
										</div>
									</div>
								@endforeach
							@endif
							<!-- end one item -->
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="your-order-item">
							<div class="pull-left"><p class="your-order-f18">Tổng tiền:</p></div>
							<div class="pull-right"><h5 class="color-black">{{number_format($tongtien)}}</h5></div>
							<div class="clearfix"></div>
						</div>
					</div>
					<div class="your-order-head"><h5>Hình thức thanh toán</h5></div>
					
					<div class="your-order-body">
						<ul class="payment_methods methods">
							<li class="payment_method_bacs">
								<input id="payment_method_bacs" type="radio" class="input-radio" name="payment_method" value="COD" checked="checked" data-order_button_text="">
								<label for="payment_method_bacs">Thanh toán khi nhận hàng </label>
								<div class="payment_box payment_method_bacs" style="display: block;">
									Cửa hàng sẽ gửi hàng đến địa chỉ của bạn, bạn xem hàng rồi thanh toán tiền cho nhân viên giao hàng
								</div>						
							</li>

							<li class="payment_method_cheque">
								<input id="payment_method_cheque" type="radio" class="input-radio" name="payment_method" value="ATM" data-order_button_text="">
								<label for="payment_method_cheque">Chuyển khoản </label>
								<div class="payment_box payment_method_cheque" style="display: none;">
									Chuyển tiền đến tài khoản sau:
									<br>- Số tài khoản: 109004769067
									<br>- Chủ TK: Bùi Văn Hiếu
									<br>- Ngân hàng VietinBank, Chi nhánh tây Hà Nội
								</div>						
							</li>
							
						</ul>
					</div>
					<button type="submit" class="text-center beta-btn primary">Đặt hàng<i class="fa fa-chevron-right"></i></button>
					
				</div> <!-- .your-order -->
			</div>
		</div>
	</form>
</div> <!-- #content -->

@endsection

@section('title')
{{'Đặt hàng'}}
@endsection