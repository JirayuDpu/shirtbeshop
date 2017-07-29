@extends('layout.main')


@section('content')


<section>
		<div class="container">
			<div class="row">

			@include('layout.slider')
			
			@include('layout.manu')

			@include('front.newproduct')

				<div class="col-sm-9 padding-right">
					<h2 class="title text-center">สินค้าใหม่</h2>
					<div class="features_items"><!--features_items-->
						
						
						
 						@forelse($products->chunk(4) as $chunk)
           				 @foreach($chunk as $product)

           				 @if($product->promotion_id == '1')

           				 <div class="col-sm-3 padding-right">
           				
							<div class="product-image-wrapper">
								<div class="single-products">
								<div class="productinfo text-center">
									<h4 style="color: red"><strong>สินค้าใหม่</strong></h4>
								</div>
										<div class="productinfo text-center">
											  <a href="{{route('shop', $product->id) }}">
				                                <img src="{{url('images', $product->image)}}"/>
				                            
									
				                     
											<a href="{{route('shop', $product->id) }}">
												<p><strong>{{$product->pro_name}} </strong></p>
											</a>

											
											
											{{-- <del>$ {{$product->price}}</del> --}}
											<h2>$ {{$product->price-$product->price=$product->price*$product->discount/100}}</h2>

											<p><strong>ไซส์</strong> : {{$product->sizes->size_name}}</p>
										{{-- 	<p>{{$product->pro_name}}</p>
											<del>$ {{$product->price}}</del>
											<h6>$ {{$product->price-$product->price=$product->price*$product->discount/100}}</h6> --}}


											{{-- <a href="{{ route('cart.addItems', $product->id) }}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a> --}}

										@if($product->quantity == '0')
												<del href="" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</del>
											@else
												<a href="{{ route('cart.addItems', $product->id) }}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
										@endif
											
										

										</div>
										@if($product->quantity == '0')
											<img src="{{asset('images/home/Sale_New/outstock.png')}}" class="new" alt="" />
										@elseif($product->promotion_id == '1' && $product->discount == '5' )
											<img src="{{asset('images/home/Sale_New/new_sale5.png')}}" class="new" alt="" />
										@elseif($product->promotion_id == '1' && $product->discount == '10')
											<img src="{{asset('images/home/Sale_New/new_sale10.png')}}" class="new" alt="" />
										@elseif($product->promotion_id == '1' && $product->discount == '15')
											<img src="{{asset('images/home/Sale_New/new_sale15.png')}}" class="new" alt="" />
										@elseif($product->promotion_id == '1' && $product->discount == '20')
											<img src="{{asset('images/home/Sale_New/new_sale20.png')}}" class="new" alt="" />
										@elseif($product->promotion_id == '1' && $product->discount == '25')
											<img src="{{asset('images/home/Sale_New/new_sale25.png')}}" class="new" alt="" />
										@elseif($product->promotion_id == '1' && $product->discount == '30')
											<img src="{{asset('images/home/Sale_New/new_sale30.png')}}" class="new" alt="" />
										@elseif($product->promotion_id == '1' && $product->discount == '35')
											<img src="{{asset('images/home/Sale_New/new_sale35.png')}}" class="new" alt="" />
										@elseif($product->promotion_id == '1' && $product->discount == '40')
											<img src="{{asset('images/home/Sale_New/new_sale40.png')}}" class="new" alt="" />
										@elseif($product->promotion_id == '1' && $product->discount == '45')
											<img src="{{asset('images/home/Sale_New/new_sale45.png')}}" class="new" alt="" />
										@elseif($product->promotion_id == '1' && $product->discount == '50')
											<img src="{{asset('images/home/Sale_New/new_sale50.png')}}" class="new" alt="" />
										@elseif($product->promotion_id == '1' && $product->discount == '55')
											<img src="{{asset('images/home/Sale_New/new_sale55.png')}}" class="new" alt="" />
										@elseif($product->promotion_id == '1' && $product->discount == '60')
											<img src="{{asset('images/home/Sale_New/new_sale60.png')}}" class="new" alt="" />
										@elseif($product->promotion_id == '1' && $product->discount == '65')
											<img src="{{asset('images/home/Sale_New/new_sale65.png')}}" class="new" alt="" />
										@elseif($product->promotion_id == '1' && $product->discount == '70')
											<img src="{{asset('images/home/Sale_New/new_sale70.png')}}" class="new" alt="" />
										@elseif($product->promotion_id == '1' && $product->discount == '75')
											<img src="{{asset('images/home/Sale_New/new_sale75.png')}}" class="new" alt="" />

		
										@elseif($product->promotion_id == '1')
											<img src="{{asset('images/home/Sale_New/new.png')}}" class="new" alt="" />

										@endif
										{{-- <img src="images/home/new.png" class="new" alt="" /> --}}
								</div>
							</div>
							</div>
							@endif
	
						   @endforeach
				        @empty
				            <h3>ไม่มีสินค้า</h3>
				        @endforelse		
					</div><!--features_items-->

									
					
			

			
			 <div class="productinfo text-center">
				{{ $products->links() }}
				</div>	

			{{-- @include('front.category')	 --}}
		</div>
		
		</div>
	</div>
	</section>


@endsection