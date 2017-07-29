@extends('layout.main')


@section('content')

<div class="container">
<div class="row">
@include('layout.manu')
<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Features Items</h2>

						<div class="col-sm-6">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
										 
				                                <img src="{{url('images', $shirt->image)}}"/>
				                                
										</div>

									</div>
									</div>
									</div>

									  <div class="product-image-wrapper">
								                    <p1>
								                        Size : {{$shirt->size_name}}<br>
								                        Color  : 00
								                    </p1>
								                    <br>
								                    <p> 
								                   		 Name : {{$shirt->pro_name}}
								                    </p>
								                    {{-- <br> --}}
								                     <p>${{$shirt->price}}</p>
											<p href="#">
												<p>{{$shirt->description}}</p>
											</p>
								                </div>
											<br>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>

									</div>
									</div>
									</div>
									</div>



@endsection