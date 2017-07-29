@extends('layout.main')


@section('content')


<section>
		<div class="container">
			<div class="row">

			@include('layout.slider')
			
				@include('layout.manu')
				
				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Features Items</h2>


						@forelse($products->chunk(4) as $chunk)
           				 @foreach($chunk as $product)
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											  <a href="#">
				                                <img src="{{url('images', $product->image)}}"/>
				                            
										
				                           {{--   <a href="{{route('shirt')}}">
												<p href="{{url('/shirt')}}">Easy Polo Black Edition </p>
											</a> --}}
											<a href="{{route('shop', $product->id) }}">
												<p>{{$product->pro_name}} </p>
											</a>

											<h2>{{$product->price}}</h2>
											
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
<!-- 
											<a href="{{ url('/shop') }}">
					                            <h6>
					                                Shirts
					                            </h6>
					                        </a> -->

										</div>
										<!-- <div class="product-overlay">
											<div class="overlay-content">
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
										</div> -->
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
										<li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
									</ul>
								</div>
							</div>
						</div>
						   @endforeach
				        @empty
				            <h3>No shirts</h3>
				        @endforelse

						

					</div><!--features_items-->
				
					
					
					
				</div>
			</div>
		</div>
	</section>


@endsection