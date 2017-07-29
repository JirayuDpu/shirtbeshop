@extends('layout.main')

@section('content')

<section>
		<div class="container">
			<div class="row">
				@include('layout.manu')

				

				<div class="col-sm-9 padding-right"><!--brands_products-->

							<h2 class="title text-center">SELECT items</h2>
							<h2>ค้นหา สินค้า</h2>
							<div class="brands-name">

							{!! Form::open(['action' => 'FrontController@index']) !!}
							{{-- {!! Form::model($product, ['route' => ['products.update', $product->id] ,'method' => 'patch', 'files' => true]) !!} --}}

							
							{{-- <div class="col-md-2">
								<p>หมวดหมู่ 
									{{ Form::select('sizes_id', $categories, null, 
									['class' => 'form-control','placeholder'=>'Select'])}}
								</p>
							</div> --}}

								<div class="col-md-2">
								<p>หมวดหมู่ 
									{{ Form::select('size', ['L' => 'Large', 'S' => 'Small'])}}
								</p>
							</div>
									

							{{ Form::submit('ค้าหา', array('class' => 'btn btn-default')) }}
        					{!! Form::close() !!}
								{{-- <ul class="nav nav-pills nav-stacked">
									<li><a href="#"> <span class="pull-right">(50)</span>Acne</a></li>
									<li><a href="#"> <span class="pull-right">(56)</span>Grüne Erde</a></li>
									<li><a href="#"> <span class="pull-right">(27)</span>Albiro</a></li>
									<li><a href="#"> <span class="pull-right">(32)</span>Ronhill</a></li>
									<li><a href="#"> <span class="pull-right">(5)</span>Oddmolly</a></li>
									<li><a href="#"> <span class="pull-right">(9)</span>Boudestijn</a></li>
									<li><a href="#"> <span class="pull-right">(4)</span>Rösch creative culture</a></li>
								</ul> --}}
						</div><!--/brands_products-->

				


					<div class="col-sm-12 padding-right">
					<h2 class="title text-center">recommended items</h2>
					{{-- <div class="col-sm-9"> --}}
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Shirts01 Items</h2>

						@forelse($shirts as $shirt)
						<div class="col-sm-3">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
										<a href="{{route('shop', $shirt->id) }}">
											<img src="{{ url('images', $shirt->image)}}"/>
											{{-- <img src="{{ url('images', $product->image)}}"/> --}}
											<p>{{$shirt->pro_name}}</p>
											<h2>${{$shirt->price}}</h2>
											{{-- <p>{{$shirt->size->size_name}}</p> --}}
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
										</div>
							
								</div>
								
							</div>

						

						</div>
						@empty

							<h3>No Items</h3>

							@endforelse
						
					</div><!--features_items-->

					

					

					</div>
				

			</div>
				
			</div>



@endsection