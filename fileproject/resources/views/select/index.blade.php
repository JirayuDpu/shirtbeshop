@extends('layout.main')



@section('content')


<section>
		<div class="container">
			<div class="row">

			@include('layout.slider')
			
			@include('layout.manu')

				<div class="col-sm-9 padding-right"><!--brands_products-->


						
				<div class="productinfo text-center">
					<h2>ค้นหา สินค้า</h2>
				</div>	

					{!! Form::open(['url' => 'search' ,'method' => 'get']) !!}

						<div class="search_box pull-right">
							<input type="text" name="search" class ="form-control" placeholder="ค้าหาชื่อสินค้า"/>

						{!! Form::close() !!}

						</div><br><br>




							<div class="brands-name">
							{!! Form::open(['url' => 'select' ,'method' => 'get']) !!}

							<div>
							</div><br>
							
							<div>


								<div>

								<div class="col-md-2">
						        	สี
						        	<select name="color" class ="form-control" placeholder = "Select">
						        	  <option value="">ทั้งหมด</option>
						        	   @foreach($colors as $color)
						        	 	 <option value="{{$color->id}}">{{$color->color_name}}</option>
									 @endforeach

									  {{-- <option value="1">แดง</option>
									  <option value="2">ขาว</option>
									  <option value="3">ดำ</option>
									  <option value="4">น้ำเงิน</option>
									  <option value="5">เหลือง</option>
									  <option value="6">ส้ม</option>
									  <option value="7">เขียว</option>
									  <option value="8">เทา</option>
									  <option value="9">น้ำตาล</option>
									  <option value="10">ขาว/ดำ</option>
									  <option value="11">ฟ้า</option>
									  <option value="12">ชมพู</option> --}}
									</select>
						        </div>



						        	{{-- <div id="sportswear" class="panel-collapse collapse">
									<div class="panel-body">
									@foreach($categories as $categorie)
										<ul>
											<li><a href="{{url('manu', $categorie->id) }}">{{$categorie->category_name}}</a></li>
											<li><a href="#">เสื้อเชิ้ด</a></li>
											<li><a href="#">ขาว</a></li>
											<li><a href="#">แดง</a></li>
											<li><a href="#">น้ำเงิน</a></li>
											<li><a href="">ที่งหมด</a></li>
										</ul>
										 @endforeach
									</div>
								</div>
 --}}

						        <div class="col-md-2">
						        ไซส์
						        	<select name="size" class ="form-control" placeholder = "Select">
						        	  <option value="">ทั้งหมด</option>
						        	  @foreach($sizes as $size)
						        	 	 <option value="{{$size->id}}">{{$size->size_name}}</option>
						        	  
						        	  {{-- <option value="1">S</option>
									  <option value="2">M</option>
									  <option value="3">XL</option> --}}
									 @endforeach
									</select>

						        </div>	

						         </div>

						          
						        <div class="col-md-2">
						        	ราคาต่ำสุด<input type="number" name="price1" min="1" max="3000" class ="form-control">
						        </div>
						        <div class="col-md-1">ถึง</div>
						        <div class="col-md-2">
						        	ราคาสูงสุด<input type="number" name="price2" min="1" max="3000" class ="form-control">
						        </div>


						        <br>
							{{ Form::submit('ค้าหา', array('class' => 'btn btn-default')) }}
	        				{!! Form::close() !!}
	        				<br><br>

        				</div><!--/brands_products-->


					<div class="col-sm-12 padding-right">
					<h2 class="title text-center">recommended items</h2>
					
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Shirts01 Items</h2>


						@forelse($shirts->chunk(4) as $chunk)
           				 @foreach($chunk as $shirt)
						

						<div class="col-sm-3">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
										<a href="{{route('shop', $shirt->id) }}">
											<img src="{{ url('images', $shirt->image)}}"/>
											
											<a href="{{route('shop', $shirt->id) }}">
												<p><strong>{{$shirt->pro_name}} </strong></p>
											</a>

											<h2>${{$shirt->price-$shirt->price=$shirt->price*$shirt->discount/100}}</h2>

											<p><strong>ไซส์</strong> : {{$shirt->sizes->size_name}}</p>


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
											<img src="{{asset('images/home/Sale_New/outstock.png')}}" class="new" alt="" /> --}}

										@elseif($shirt->promotion_id == '1')
											<img src="{{asset('images/home/Sale_New/new.png')}}" class="new" alt="" />

										@endif

										{{-- @if($shirt->promotion_id == '1')
										<img src="images/home/new.png" class="new" alt="" />
										@endif --}}
								</div>
								
							</div>

						</div>
						
						
						@empty

							<h3>No Items</h3>

							@endforelse
						@endforeach
						
				
						
					</div><!--features_items-->

				{{-- 	 <div class="productinfo text-center">
						{{ $shirts->links() }}
						</div> --}}	
				</div>
				</div>
				</div>
			</div>
		</div>

@endsection