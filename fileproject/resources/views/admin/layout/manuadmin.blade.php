<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>หมวดหมู่</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							{{-- <div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#sportswear">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											ข้อมูลสินค้า
										</a>
									</h4>
								</div>
								<div id="sportswear" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li>
											<a href="{{ route('products.create') }}">Add Products </a>
											</li>
											<li><a href="{{ route('products.index') }}">Products</a></li>
										</ul>
									</div>
								</div>
							</div> --}}

							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#mens">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											หมวดหมู่
										</a>
									</h4>
								</div>
								<div id="mens" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>			
											<li><a href="{{ route('category.index') }}">หมวดหมูสินค้า</a>
											</li>
											<li><a href="{{ route('colors.index') }}">สี</a></li>
											<li><a href="{{ route('sizes.index') }}">ไซส์</a></li>
											<li><a href="{{ route('promotions.index') }}">
											ระดับสินค้า</a></li>
											<li><a href="{{ route('recommend.index') }}">สินค้าแนะนำ</a></li>
											
										</ul>
									</div>
								</div>
							</div>

							{{-- <div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#promotion">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Promotions
										</a>
									</h4>
								</div>
								<div id="promotion" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>			
											<li><a href="{{ route('promotion_new.index') }}">
											Promotion</a></li>
										</ul>
										<ul>			
											<li><a href="{{ route('promotion_new.create') }}">
											CreatePromotion</a></li>
										</ul>
									</div>
								</div>
							</div> --}}


							{{-- <div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#order">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											รายการสั่งซื้อ
										</a>
									</h4>
								</div>
								<div id="order" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>			
											<li><a href="{{ url('admin/orders/pending') }}">
											รอดำเนินการ</a></li>
										</ul>
										<ul>			
											<li><a href="{{ url('admin/orders/sending') }}">
											sending</a></li>
										</ul>
										<ul>			
											<li><a href="{{ url('admin/orders/delivered') }}">
											ดำเนินการเรียบร้อยแล้ว</a></li>
										</ul>
										<ul>			
											<li><a href="{{ url('admin/orders') }}">
											รายการทั้งหมด</a></li>
										</ul>
									</div>
								</div>
							</div> --}}

							{{-- 	<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#payment">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											รายการชำระเงิน
										</a>
									</h4>
								</div>
								<div id="payment" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>			
											<li><a href="{{ url('admin/payment/pending') }}">
											รอดำเนินการ</a></li>
										</ul>
										<ul>			
											<li><a href="{{ url('admin/payment/delivered') }}">
											ดำเนินการเรียบร้อยแล้ว</a></li>
										</ul>
										<ul>			
											<li><a href="{{ url('admin/payment') }}">
											รายการทั้งหมด</a></li>
										</ul>
									</div>
								</div>
							</div> --}}
							
							
							{{-- <div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#womens">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Womens
										</a>
									</h4>
								</div>
								<div id="womens" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="#">Fendi</a></li>
											<li><a href="#">Guess</a></li>
											<li><a href="#">Valentino</a></li>
											<li><a href="#">Dior</a></li>
											<li><a href="#">Versace</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Kids</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Fashion</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Households</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Interiors</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Clothing</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Bags</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Shoes</a></h4>
								</div>
							</div> --}}
						</div><!--/category-products-->

						<h2>สินค้า</h2>
						<div class="panel-group category-products" id="product"><!--category-Product-->
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#product" href="#product1">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											ข้อมูลสินค้า
										</a>
									</h4>
								</div>
								
							<div id="product1" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li>
											<a href="{{ route('products.create') }}">เพิ่มสินค้า</a>
											</li>
											<li><a href="{{ route('products.index') }}">ข้อมูลสินค้า</a></li>
										</ul>
									</div>
								</div>
							</div>

						</div><!--/category-Omise-->

						<h2>Order</h2>
						<div class="panel-group category-products" id="order1"><!--category-Product-->
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#order1" href="#order2">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											ข้อมูลสินค้า
										</a>
									</h4>
								</div>
								<div id="order2" class="panel-collapse collapse">
									<div class="panel-body">
									<ul>			
											<li><a href="{{ url('admin/orders/pending') }}">
											รอดำเนินการ</a></li>
										</ul>
										<ul>			
											<li><a href="{{ url('admin/orders/sending') }}">
											รอดำเนินการจัดส่ง</a></li>
										</ul>
										<ul>			
											<li><a href="{{ url('admin/orders/delivered') }}">
											ดำเนินการเรียบร้อยแล้ว</a></li>
										</ul>
										<ul>			
											<li><a href="{{ url('admin/orders') }}">
											รายการทั้งหมด</a></li>
										</ul>
										{{--< ul>
											<li><a href="{{ route('products.create') }}">เพิ่มสินค้า</a></li>
											<li><a href="{{ route('products.index') }}">รายการสินค้า</a></li>
										
										</ul> --}}
									</div>
								</div>
							</div>

						</div><!--/category-Omise-->



						<h2>Omise</h2>
						<div class="panel-group category-products" id="omise"><!--category-Omise-->
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#omise" href="#omise1">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											ข้อมูลสินค้า
										</a>
									</h4>
								</div>
								<div id="omise1" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li>
											<a href="{{ route('omise.index') }}">Omise</a>
											</li>
											<li><a href="">000</a></li>
										
										</ul>
									</div>
								</div>
							</div>
						</div><!--/category-Omise-->

						<h2>รายการชำระเงิน</h2>
						<div class="panel-group category-products" id="payment"><!--category-Omise-->
								<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#payment" href="#payment1">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											รายการชำระเงิน
										</a>
									</h4>
								</div>
								<div id="payment1" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>			
											<li><a href="{{ url('admin/payment/pending') }}">
											รอดำเนินการ</a></li>
										</ul>
										<ul>			
											<li><a href="{{ url('admin/payment/confirm') }}">
											ดำเนินการเรียบร้อยแล้ว</a></li>
										</ul>
										<ul>			
											<li><a href="{{ url('admin/payment') }}">
											รายการทั้งหมด</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div><!--/category-Omise-->




						<h2>สมาชิก</h2>
						<div class="panel-group category-products" id="member"><!--category-Omise-->
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#member" href="#member1">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											รายชื่อ
										</a>
									</h4>
								</div>
								<div id="member1" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											
											<li><a href="">000</a></li>
										
										</ul>
									</div>
								</div>
							</div>

						</div><!--/category-Omise-->










					
						<div class="brands_products"><!--brands_products-->
							<h2>Brands</h2>
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked">
									<li><a href="#"> <span class="pull-right">(50)</span>Acne</a></li>
									<li><a href="#"> <span class="pull-right">(56)</span>Grüne Erde</a></li>
									<li><a href="#"> <span class="pull-right">(27)</span>Albiro</a></li>
									<li><a href="#"> <span class="pull-right">(32)</span>Ronhill</a></li>
									<li><a href="#"> <span class="pull-right">(5)</span>Oddmolly</a></li>
									<li><a href="#"> <span class="pull-right">(9)</span>Boudestijn</a></li>
									<li><a href="#"> <span class="pull-right">(4)</span>Rösch creative culture</a></li>
								</ul>
							</div>
						</div><!--/brands_products-->
						
						<div class="price-range"><!--price-range-->
							<h2>Price Range</h2>
							<div class="well text-center">
								 <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
								 <b class="pull-left">$ 0</b> <b class="pull-right">$ 600</b>
							</div>
						</div><!--/price-range-->
						
						<div class="shipping text-center"><!--shipping-->
							<img src="images/home/shipping.jpg" alt="" />
						</div><!--/shipping-->
					
					</div>
				</div>