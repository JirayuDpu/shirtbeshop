@extends('layout.main')

@section('content')

<section>
		<div class="container">
			<div class="row">
				@include('layout.manu')

				

				<div class="col-sm-9 padding-right"><!--brands_products-->

					<div class="col-sm-12 padding-right">
					
					{{-- <div class="col-sm-9"> --}}
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">คลังสินค้าแนะนำ</h2>

						@forelse($shirts as $shirt)
						<div class="col-sm-3">

						<div class="productinfo text-center">
							<h4 style="color: green"><strong>สินค้าแนะนำ</strong></h4>
						</div>

							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
										<a href="{{route('shop', $shirt->id) }}">
											<img src="{{ url('images', $shirt->image)}}"/>
											{{-- <img src="{{ url('images', $product->image)}}"/> --}}
											<a href="{{route('shop', $shirt->id) }}">
												<p><strong>{{$shirt->pro_name}} </strong></p>
											</a>

											{{-- <p>{{$shirt->pro_name}}</p> --}}
											<h2>$ {{$shirt->price}}</h2>

											<p><strong>ไซส์</strong> : {{$shirt->sizes->size_name}}</p>
											{{-- <p>{{$shirt->size->size_name}}</p> --}}
											{{-- <a href="{{ route('cart.addItems', $shirt->id) }}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a> --}}

											@if($shirt->quantity == '0')
												<del href="" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</del>
											@else
												<a href="{{ route('cart.addItems', $shirt->id) }}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											@endif
										</div>

										

										@if($shirt->quantity == '0')
											<img src="{{asset('images/home/Sale_New/outstock.png')}}" class="new" alt="" />

										@elseif($shirt->promotion_id == '1' && $shirt->discount == '5' )
											<img src="{{asset('images/home/Sale_New/new_sale5.png')}}" class="new" alt="" />
										@elseif($shirt->promotion_id == '1' && $shirt->discount == '10')
											<img src="{{asset('images/home/Sale_New/new_sale10.png')}}" class="new" alt="" />
										@elseif($shirt->promotion_id == '1' && $shirt->discount == '15')
											<img src="{{asset('images/home/Sale_New/new_sale15.png')}}" class="new" alt="" />
										@elseif($shirt->promotion_id == '1' && $shirt->discount == '20')
											<img src="{{asset('images/home/Sale_New/new_sale20.png')}}" class="new" alt="" />
										@elseif($shirt->promotion_id == '1' && $shirt->discount == '25')
											<img src="{{asset('images/home/Sale_New/new_sale25.png')}}" class="new" alt="" />
										@elseif($shirt->promotion_id == '1' && $shirt->discount == '30')
											<img src="{{asset('images/home/Sale_New/new_sale30.png')}}" class="new" alt="" />
										@elseif($shirt->promotion_id == '1' && $shirt->discount == '35')
											<img src="{{asset('images/home/Sale_New/new_sale35.png')}}" class="new" alt="" />
										@elseif($shirt->promotion_id == '1' && $shirt->discount == '40')
											<img src="{{asset('images/home/Sale_New/new_sale40.png')}}" class="new" alt="" />
										@elseif($shirt->promotion_id == '1' && $shirt->discount == '45')
											<img src="{{asset('images/home/Sale_New/new_sale45.png')}}" class="new" alt="" />
										@elseif($shirt->promotion_id == '1' && $shirt->discount == '50')
											<img src="{{asset('images/home/Sale_New/new_sale50.png')}}" class="new" alt="" />
										@elseif($shirt->promotion_id == '1' && $shirt->discount == '55')
											<img src="{{asset('images/home/Sale_New/new_sale55.png')}}" class="new" alt="" />
										@elseif($shirt->promotion_id == '1' && $shirt->discount == '60')
											<img src="{{asset('images/home/Sale_New/new_sale60.png')}}" class="new" alt="" />
										@elseif($shirt->promotion_id == '1' && $shirt->discount == '65')
											<img src="{{asset('images/home/Sale_New/new_sale65.png')}}" class="new" alt="" />
										@elseif($shirt->promotion_id == '1' && $shirt->discount == '70')
											<img src="{{asset('images/home/Sale_New/new_sale70.png')}}" class="new" alt="" />
										@elseif($shirt->promotion_id == '1' && $shirt->discount == '75')
											<img src="{{asset('images/home/Sale_New/new_sale75.png')}}" class="new" alt="" />

										{{-- @elseif($shirt->quantity == '0')
											<img src="{{asset('images/home/Sale_New/outstock.png')}}" class="new" alt="" />
 --}}
										@elseif($shirt->promotion_id == '1')
											<img src="{{asset('images/home/Sale_New/new.png')}}" class="new" alt="" />

										@endif
							
								</div>
								
							</div>

						

						</div>
						@empty

							<h3>No Items</h3>

							@endforelse
						
					</div>

					

					

					</div>
				

			</div>

			</div>
				
			</div>



@endsection