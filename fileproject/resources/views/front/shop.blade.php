@extends('layout.main')

@section('title', 'Shirts')

@section('content')


<section>
		<div class="container">
			<div class="row">

			{{-- 	@include('layout.manu')
 --}}
 				@include('layout.slider')
			
				@include('layout.manu')

			{{-- 	@include('front.newproduct') --}}


					<div class="col-sm-9 padding-right">
					<div class="product-details"><!--product-details-->
						<div class="col-sm-5">
							{{-- <div class="view-product"> --}}
							<div class="productinfo text-center">
								<img src="{{url('images', $shop->image)}}"/>
								<h3>{{$shop->pro_name}}</h3>
							</div>
							<div id="similar-product" class="carousel slide" data-ride="carousel">
								
								  <!-- Controls -->
								
							</div>

						</div>
						@if($shop->discount)
						<div class="col-sm-7">
							<div class="product-information"><!--/product-information-->
								{{-- <img src="images/product-details/new.jpg" class="newarrival" alt="" /> --}}
								<h2>สินค้า: {{$shop->pro_name}}</h2>
									<p><strong>รหัสสินค้า</strong> : {{$shop->id}}</p>
								{{-- <img src="images/product-details/rating.png" alt="" /> --}}
								<span>
									<h2><del>{{$shop->price}}</del></h2>

									<span>$ : {{$shop->price-$shop->price=$shop->price*$shop->discount/100}}</span>
								</span>
								<p><b>สินค้าลด: </b>{{$shop->discount}} %</p>


								<p><b>Condition: </b>{{count($shop->promotion)?$shop->promotion->promotions_name:"N/A"}}</p>
								<p><b>ประเภท: </b>{{count($shop->category)?$shop->category->category_name:"N/A"}}</p>
								<p><strong>ไซส์</strong> : {{count($shop->sizes)?$shop->sizes->size_name:"N/A"}}</p>
               					<p><strong>สี</strong> : {{count($shop->colors)?$shop->colors->color_name:"N/A"}}</p>
               					<p><strong>จำนวนสินค้า</strong> : {{$shop->quantity}} ตัว</p>
               					<p><strong>ช่วงสินค้า</strong> : {{count($shop->recommend)?$shop->recommend->recommend_name  :"N/A"}}</p>
               					<p><b>คำอธิบาย:</b> {{$shop->description}}</p>
								{{--  <p>ประเภท : {{count($product->promotion)?$product->promotion->promotions_name:"N/A"}}</p> --}}
								{{-- <p><b>Brand:</b> E-SHOPPER</p> --}}

								{{-- <a href="{{ route('cart.addItems', $shop->id) }}" 
									class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>
										Add to cart</a> --}}

									@if($shop->quantity == '0')
												<del href="" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</del>
									@else
												<a href="{{ route('cart.addItems', $shop->id) }}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
									@endif

								{{-- <a href=""><img src="images/product-details/share.png" class="share img-responsive"  alt="" /></a> --}}
							</div><!--/product-information-->
						</div>
						
						@else
							<div class="col-sm-7">
							<div class="product-information"><!--/product-information-->
								<h2>สินค้า: {{$shop->pro_name}}</h2>
								<p><strong>รหัสสินค้า</strong> : {{$shop->id}}</p>
								{{-- <img src="images/product-details/rating.png" alt="" /> --}}
								<span>
									{{-- <h2><del>{{$shop->price}}</del></h2> --}}

									<span>$ : {{$shop->price-$shop->price=$shop->price*$shop->discount/100}}</span>
								</span>
								{{-- <p><b>คำอธิบาย:</b> {{$shop->description}}</p> --}}
								<p><b>สินค้าลด: </b>{{$shop->discount}} %</p>
								<p><b>Condition: </b>{{count($shop->promotion)?$shop->promotion->promotions_name:"N/A"}}</p>
								<p><b>ประเภท: </b>{{count($shop->category)?$shop->category->category_name:"N/A"}}</p>
								<p><strong>ไซส์</strong> : {{count($shop->sizes)?$shop->sizes->size_name:"N/A"}}</p>
               					<p><strong>สี</strong> : {{count($shop->colors)?$shop->colors->color_name:"N/A"}}</p>
               					<p><strong>จำนวนสินค้า</strong> : {{$shop->quantity}} ตัว</p>
               					<p><strong>ช่วงสินค้า</strong> : {{count($shop->recommend)?$shop->recommend->recommend_name  :"N/A"}}</p>
               					<p><b>คำอธิบาย:</b> {{$shop->description}}</p>
								{{--  <p>ประเภท : {{count($product->promotion)?$product->promotion->promotions_name:"N/A"}}</p> --}}
								{{-- <p><b>Brand:</b> E-SHOPPER</p> --}}

								{{--<a href="{{ route('cart.addItems', $shop->id) }}" 
									class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>
										Add to cart</a> --}}

								@if($shop->quantity == '0')
												<del href="" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</del>
											@else
												<a href="{{ route('cart.addItems', $shop->id) }}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											@endif
											

								{{-- <a href=""><img src="images/product-details/share.png" class="share img-responsive"  alt="" /></a> --}}
							</div><!--/product-information-->
						</div>

						@endif
					</div><!--/product-details-->		

			</div>
		</div>
	</section>

@endsection

