@extends('layout.main')


@section('content')


<section>
		<div class="container">
			<div class="row">

			

		

				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">สินค้าใหม่</h2>
						
 						@forelse($shirts->chunk(4) as $chunk)
           				 @foreach($chunk as $shirt)

           				 

           				
           				 <div class="col-sm-3 padding-right">
           				
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											  <a href="{{route('shop', $shirt->id) }}">
				                                <img src="{{url('images', $shirt->image)}}"/>
				                            
										
				                     
											<a href="{{route('shop', $shirt->id) }}">
												<p>{{$shirt->pro_name}} </p>
											</a>

											
											<h2>{{$shirt->price-$shirt->price=$shirt->price*$shirt->discount/100}}</h2>
											
											<a href="{{ route('cart.addItems', $shirt->id) }}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											
										

										</div>
										
								</div>
							</div>
					</div><!--features_items-->

						
	
						   @endforeach
				        @empty
				            <h3>No shirts</h3>
				        @endforelse					
					
				{{-- @include('front.sale') --}}

			</div>	
			
		</div>
		
		</div>
		</div>
	</section>


@endsection