<h2 class="title text-center">สินค้าแนะนำ</h2>
<div class="recommended_items"><!--recommended_items-->
						
					
						<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner">
						<div class="item active">	
							<h2 class="title text-center">หน้า 1</h2>
								@foreach($rns as $rn)


								 @if($rn->recommend_id == '1')

									<div class="col-sm-3">
										@if($rn->promotion_id == '1')
										<div class="product-image-wrapper">
											<div class="single-products">
											{{-- <h4>{{$rn->pro_name}}</h4> --}}
											<div class="productinfo text-center">
												<h4 style="color: green"><strong>สินค้าแนะนำ</strong></h4>
											</div>

												<div class="productinfo text-center">
												
												<a href="{{route('shop', $rn->id) }}">
													  <img src="{{url('images', $rn->image)}}"/>

												<a href="{{route('shop', $rn->id) }}">
													<p><strong>{{$rn->pro_name}} </strong></p>
												</a>

											<h2>$ {{$rn->price-$rn->price=$rn->price*$rn->discount/100}}</h2>

											<p><strong>ไซส์</strong> : {{$rn->sizes->size_name}}</p>
													{{-- <p>{{$rn->description}}</p> --}}
													{{-- <a href="{{ route('cart.addItems', $rn->id) }}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a> --}}
											@if($rn->quantity == '0')
												<del href="" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</del>
											@else
												<a href="{{ route('cart.addItems', $rn->id) }}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											@endif

												</div>
											</div>
										</div>


										@if($rn->quantity == '0')
											<img src="{{asset('images/home/Sale_New/outstock.png')}}" class="new" alt="" />
										@elseif($rn->promotion_id == '1' && $rn->discount == '5' )
											<img src="{{asset('images/home/Sale_New/new_sale5.png')}}" class="new" alt="" />
										@elseif($rn->promotion_id == '1' && $rn->discount == '10')
											<img src="{{asset('images/home/Sale_New/new_sale10.png')}}" class="new" alt="" />
										@elseif($rn->promotion_id == '1' && $rn->discount == '15')
											<img src="{{asset('images/home/Sale_New/new_sale15.png')}}" class="new" alt="" />
										@elseif($rn->promotion_id == '1' && $rn->discount == '20')
											<img src="{{asset('images/home/Sale_New/new_sale20.png')}}" class="new" alt="" />
										@elseif($rn->promotion_id == '1' && $rn->discount == '25')
											<img src="{{asset('images/home/Sale_New/new_sale25.png')}}" class="new" alt="" />
										@elseif($rn->promotion_id == '1' && $rn->discount == '30')
											<img src="{{asset('images/home/Sale_New/new_sale30.png')}}" class="new" alt="" />
										@elseif($rn->promotion_id == '1' && $rn->discount == '35')
											<img src="{{asset('images/home/Sale_New/new_sale35.png')}}" class="new" alt="" />
										@elseif($rn->promotion_id == '1' && $rn->discount == '40')
											<img srcrnasset('images/home/Sale_New/new_sale40.png')}}" class="new" alt="" />
										@elseif($rn->promotion_id == '1' && $rn->discount == '45')
											<img src="{{asset('images/home/Sale_New/new_sale45.png')}}" class="new" alt="" />
										@elseif($rn->promotion_id == '1' && $rn->discount == '50')
											<img src="{{asset('images/home/Sale_New/new_sale50.png')}}" class="new" alt="" />
										@elseif($rn->promotion_id == '1' && $rn->discount == '55')
											<img src="{{asset('images/home/Sale_New/new_sale55.png')}}" class="new" alt="" />
										@elseif($rn->promotion_id == '1' && $rn->discount == '60')
											<img src="{{asset('images/home/Sale_New/new_sale60.png')}}" class="new" alt="" />
										@elseif($rn->promotion_id == '1' && $rn->discount == '65')
											<img src="{{asset('images/home/Sale_New/new_sale65.png')}}" class="new" alt="" />
										@elseif($rn->promotion_id == '1' && $rn->discount == '70')
											<img src="{{asset('images/home/Sale_New/new_sale70.png')}}" class="new" alt="" />
										@elseif($rn->promotion_id == '1' && $rn->discount == '75')
											<img src="{{asset('images/home/Sale_New/new_sale75.png')}}" class="new" alt="" />
{{-- 
										@elseif($rn->quantity <= '0')
											<img src="{{asset('images/home/Sale_New/outstock.png')}}" class="new" alt="" /> --}}
											
										@elseif($rn->promotion_id == '1')
											<img src="{{asset('images/home/Sale_New/new.png')}}" class="new" alt="" />



							@endif

										{{-- <img src="{{asset('dist/images/home/new.png')}}" class="new" alt="" /> --}}
										@elseif($rn->discount > 0)
										<div class="product-image-wrapper">
											<div class="single-products">
											<h4>{{$rn->pro_name}}</h4>
												<div class="productinfo text-center">
													  <img src="{{url('images', $rn->image)}}"/>
											<h2>$ {{$rn->price-$rn->price=$rn->price*$rn->discount/100}}</h2>
													<p>{{$rn->description}}</p>

											@if($rn->quantity == '0')
												<del href="" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</del>
											@else
												<a href="{{ route('cart.addItems', $rn->id) }}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											@endif
													{{-- <a href="{{ route('cart.addItems', $rn->id) }}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a> --}}
												</div>
											</div>
										</div>


										@if($rn->quantity == '0')
											<img src="{{asset('images/home/Sale_New/outstock.png')}}" class="new" alt="" />
										@elseif($rn->promotion_id == '1' && $rn->discount == '5' )
											<img src="{{asset('images/home/Sale_New/new_sale5.png')}}" class="new" alt="" />
										@elseif($rn->promotion_id == '1' && $rn->discount == '10')
											<img src="{{asset('images/home/Sale_New/new_sale10.png')}}" class="new" alt="" />
										@elseif($rn->promotion_id == '1' && $rn->discount == '15')
											<img src="{{asset('images/home/Sale_New/new_sale15.png')}}" class="new" alt="" />
										@elseif($rn->promotion_id == '1' && $rn->discount == '20')
											<img src="{{asset('images/home/Sale_New/new_sale20.png')}}" class="new" alt="" />
										@elseif($rn->promotion_id == '1' && $rn->discount == '25')
											<img src="{{asset('images/home/Sale_New/new_sale25.png')}}" class="new" alt="" />
										@elseif($rn->promotion_id == '1' && $rn->discount == '30')
											<img src="{{asset('images/home/Sale_New/new_sale30.png')}}" class="new" alt="" />
										@elseif($rn->promotion_id == '1' && $rn->discount == '35')
											<img src="{{asset('images/home/Sale_New/new_sale35.png')}}" class="new" alt="" />
										@elseif($rn->promotion_id == '1' && $rn->discount == '40')
											<img srcrnasset('images/home/Sale_New/new_sale40.png')}}" class="new" alt="" />
										@elseif($rn->promotion_id == '1' && $rn->discount == '45')
											<img src="{{asset('images/home/Sale_New/new_sale45.png')}}" class="new" alt="" />
										@elseif($rn->promotion_id == '1' && $rn->discount == '50')
											<img src="{{asset('images/home/Sale_New/new_sale50.png')}}" class="new" alt="" />
										@elseif($rn->promotion_id == '1' && $rn->discount == '55')
											<img src="{{asset('images/home/Sale_New/new_sale55.png')}}" class="new" alt="" />
										@elseif($rn->promotion_id == '1' && $rn->discount == '60')
											<img src="{{asset('images/home/Sale_New/new_sale60.png')}}" class="new" alt="" />
										@elseif($rn->promotion_id == '1' && $rn->discount == '65')
											<img src="{{asset('images/home/Sale_New/new_sale65.png')}}" class="new" alt="" />
										@elseif($rn->promotion_id == '1' && $rn->discount == '70')
											<img src="{{asset('images/home/Sale_New/new_sale70.png')}}" class="new" alt="" />
										@elseif($rn->promotion_id == '1' && $rn->discount == '75')
											<img src="{{asset('images/home/Sale_New/new_sale75.png')}}" class="new" alt="" />

										{{-- @elseif($rn->quantity <= '0')
											<img src="{{asset('images/home/Sale_New/outstock.png')}}" class="new" alt="" /> --}}
											

											
										@elseif($rn->promotion_id == '1')
											<img src="{{asset('images/home/Sale_New/new.png')}}" class="new" alt="" />
										@endif


										{{-- <img src="{{asset('dist/images/home/sale.png')}}" class="sale" alt="" /> --}}
										{{-- @if($rn->promotion_id == '1')
											<img src="{{asset('dist/images/home/new.png')}}" class="new" alt="" />
									
										@elseif($rn->discount > 0)
											<img src="{{asset('dist/images/home/sale.png')}}" class="sale" alt="" /> --}}
										@endif
									</div>
									@endif
									
									@endforeach
									</div>



{{-- 00000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000 --}}

								<div class="item">	
								<h2 class="title text-center">หน้า 2</h2>
								@foreach($rns2 as $rn)
								 @if($rn->recommend_id == '1')

									<div class="col-sm-3">
										@if($rn->promotion_id == '1')
										<div class="product-image-wrapper">
											<div class="single-products">
											{{-- <h4>{{$rn->pro_name}}</h4> --}}

											<div class="productinfo text-center">
												<h4 style="color: green"><strong>สินค้าแนะนำ</strong></h4>
											</div>

												<div class="productinfo text-center">
												
													<a href="{{route('shop', $rn->id) }}">
													  <img src="{{url('images', $rn->image)}}"/>

												<a href="{{route('shop', $rn->id) }}">
													<p><strong>{{$rn->pro_name}} </strong></p>
												</a>

											<h2>$ {{$rn->price-$rn->price=$rn->price*$rn->discount/100}}</h2>
													{{-- <p>{{$rn->description}}</p> --}}
												{{-- <p><strong>ไซส์</strong> : {{$rn->sizes->size_name}}</p> --}}
												<p><strong>ไซส์</strong> : {{$rn->sizes->size_name}}</p>

													{{-- <a href="{{ route('cart.addItems', $rn->id) }}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a> --}}

												@if($rn->quantity == '0')
													<del href="" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</del>
												@else
													<a href="{{ route('cart.addItems', $rn->id) }}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
												@endif
												</div>
											</div>
										</div>

										@if($rn->quantity == '0')
											<img src="{{asset('images/home/Sale_New/outstock.png')}}" class="new" alt="" />

										@elseif($rn->promotion_id == '1' && $rn->discount == '5' )
											<img src="{{asset('images/home/Sale_New/new_sale5.png')}}" class="new" alt="" />
										@elseif($rn->promotion_id == '1' && $rn->discount == '10')
											<img src="{{asset('images/home/Sale_New/new_sale10.png')}}" class="new" alt="" />
										@elseif($rn->promotion_id == '1' && $rn->discount == '15')
											<img src="{{asset('images/home/Sale_New/new_sale15.png')}}" class="new" alt="" />
										@elseif($rn->promotion_id == '1' && $rn->discount == '20')
											<img src="{{asset('images/home/Sale_New/new_sale20.png')}}" class="new" alt="" />
										@elseif($rn->promotion_id == '1' && $rn->discount == '25')
											<img src="{{asset('images/home/Sale_New/new_sale25.png')}}" class="new" alt="" />
										@elseif($rn->promotion_id == '1' && $rn->discount == '30')
											<img src="{{asset('images/home/Sale_New/new_sale30.png')}}" class="new" alt="" />
										@elseif($rn->promotion_id == '1' && $rn->discount == '35')
											<img src="{{asset('images/home/Sale_New/new_sale35.png')}}" class="new" alt="" />
										@elseif($rn->promotion_id == '1' && $rn->discount == '40')
											<img srcrnasset('images/home/Sale_New/new_sale40.png')}}" class="new" alt="" />
										@elseif($rn->promotion_id == '1' && $rn->discount == '45')
											<img src="{{asset('images/home/Sale_New/new_sale45.png')}}" class="new" alt="" />
										@elseif($rn->promotion_id == '1' && $rn->discount == '50')
											<img src="{{asset('images/home/Sale_New/new_sale50.png')}}" class="new" alt="" />
										@elseif($rn->promotion_id == '1' && $rn->discount == '55')
											<img src="{{asset('images/home/Sale_New/new_sale55.png')}}" class="new" alt="" />
										@elseif($rn->promotion_id == '1' && $rn->discount == '60')
											<img src="{{asset('images/home/Sale_New/new_sale60.png')}}" class="new" alt="" />
										@elseif($rn->promotion_id == '1' && $rn->discount == '65')
											<img src="{{asset('images/home/Sale_New/new_sale65.png')}}" class="new" alt="" />
										@elseif($rn->promotion_id == '1' && $rn->discount == '70')
											<img src="{{asset('images/home/Sale_New/new_sale70.png')}}" class="new" alt="" />
										@elseif($rn->promotion_id == '1' && $rn->discount == '75')
											<img src="{{asset('images/home/Sale_New/new_sale75.png')}}" class="new" alt="" />

										
											
										@elseif($rn->promotion_id == '1')
											<img src="{{asset('images/home/Sale_New/new.png')}}" class="new" alt="" />
										@endif
										{{-- <img src="{{asset('dist/images/home/new.png')}}" class="new" alt="" /> --}}
										@elseif($rn->discount > 0)
										<div class="product-image-wrapper">
											<div class="single-products">
											<h4>{{$rn->pro_name}}</h4>
												<div class="productinfo text-center">
													  <img src="{{url('images', $rn->image)}}"/>
											<h2>$ {{$rn->price-$rn->price=$rn->price*$rn->discount/100}}</h2>
													<p>{{$rn->description}}</p>
												{{-- 	<a href="{{ route('cart.addItems', $rn->id) }}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a> --}}

											@if($rn->quantity == '0')
												<del href="" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</del>
												<img src="{{asset('images/home/Sale_New/outstock.png')}}" class="new" alt="" />

											@else
												<a href="{{ route('cart.addItems', $rn->id) }}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											@endif
												</div>
											</div>
										</div>

										@if($rn->promotion_id == '1' && $rn->discount == '5' )
											<img src="{{asset('images/home/Sale_New/new_sale5.png')}}" class="new" alt="" />
										@elseif($rn->promotion_id == '1' && $rn->discount == '10')
											<img src="{{asset('images/home/Sale_New/new_sale10.png')}}" class="new" alt="" />
										@elseif($rn->promotion_id == '1' && $rn->discount == '15')
											<img src="{{asset('images/home/Sale_New/new_sale15.png')}}" class="new" alt="" />
										@elseif($rn->promotion_id == '1' && $rn->discount == '20')
											<img src="{{asset('images/home/Sale_New/new_sale20.png')}}" class="new" alt="" />
										@elseif($rn->promotion_id == '1' && $rn->discount == '25')
											<img src="{{asset('images/home/Sale_New/new_sale25.png')}}" class="new" alt="" />
										@elseif($rn->promotion_id == '1' && $rn->discount == '30')
											<img src="{{asset('images/home/Sale_New/new_sale30.png')}}" class="new" alt="" />
										@elseif($rn->promotion_id == '1' && $rn->discount == '35')
											<img src="{{asset('images/home/Sale_New/new_sale35.png')}}" class="new" alt="" />
										@elseif($rn->promotion_id == '1' && $rn->discount == '40')
											<img srcrnasset('images/home/Sale_New/new_sale40.png')}}" class="new" alt="" />
										@elseif($rn->promotion_id == '1' && $rn->discount == '45')
											<img src="{{asset('images/home/Sale_New/new_sale45.png')}}" class="new" alt="" />
										@elseif($rn->promotion_id == '1' && $rn->discount == '50')
											<img src="{{asset('images/home/Sale_New/new_sale50.png')}}" class="new" alt="" />
										@elseif($rn->promotion_id == '1' && $rn->discount == '55')
											<img src="{{asset('images/home/Sale_New/new_sale55.png')}}" class="new" alt="" />
										@elseif($rn->promotion_id == '1' && $rn->discount == '60')
											<img src="{{asset('images/home/Sale_New/new_sale60.png')}}" class="new" alt="" />
										@elseif($rn->promotion_id == '1' && $rn->discount == '65')
											<img src="{{asset('images/home/Sale_New/new_sale65.png')}}" class="new" alt="" />
										@elseif($rn->promotion_id == '1' && $rn->discount == '70')
											<img src="{{asset('images/home/Sale_New/new_sale70.png')}}" class="new" alt="" />
										@elseif($rn->promotion_id == '1' && $rn->discount == '75')
											<img src="{{asset('images/home/Sale_New/new_sale75.png')}}" class="new" alt="" />

										@elseif($rn->quantity == '0')
											<img src="{{asset('images/home/Sale_New/outstock.png')}}" class="new" alt="" />
											
										@elseif($rn->promotion_id == '1')
											<img src="{{asset('images/home/Sale_New/new.png')}}" class="new" alt="" />

										@endif
										{{-- <img src="{{asset('dist/images/home/sale.png')}}" class="sale" alt="" /> --}}
										{{-- @if($rn->promotion_id == '1')
											<img src="{{asset('dist/images/home/new.png')}}" class="new" alt="" />
									
										@elseif($rn->discount > 0)
											<img src="{{asset('dist/images/home/sale.png')}}" class="sale" alt="" /> --}}
										@endif
									</div>
									@endif
									
									@endforeach
								</div>


									</div>
									 <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
								<i class="fa fa-angle-left"></i>
							  </a>
							  <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
								<i class="fa fa-angle-right"></i>
							  </a>	
									</div>
									{{-- {{ $rns->links() }} --}}
</div><!--/recommended_items-->
									
									 
									
						

						
						