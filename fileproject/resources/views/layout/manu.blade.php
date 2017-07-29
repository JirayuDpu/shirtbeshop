<section>


<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>หมวดหมู่</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#sportswear">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											หมวดเสื้อ
										</a>
									</h4>
								</div>
								<div id="sportswear" class="panel-collapse collapse">
									<div class="panel-body">
									@foreach($categories as $categorie)
										<ul>
											<li><a href="{{url('manu', $categorie->id) }}">{{$categorie->category_name}}</a></li>
											{{-- <li><a href="#">เสื้อเชิ้ด</a></li>
											<li><a href="#">ขาว</a></li>
											<li><a href="#">แดง</a></li>
											<li><a href="#">น้ำเงิน</a></li>
											<li><a href="">ที่งหมด</a></li> --}}
										</ul>
										 @endforeach
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#mens">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											วิธีการสั่งซื้อ
										</a>
									</h4>
								</div>
								<div id="mens" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="#">ยังไม่มีรายการ</a></li>
											<li><a href="#">ยังไม่มีรายการ</a></li>
											<li><a href="#">ยังไม่มีรายการ</a></li>
										</ul>
									</div>
								</div>
							</div>
							
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#question">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											คำถามที่พบบ่อย
										</a>
									</h4>
								</div>
								<div id="question" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="#">ยังไม่มีรายการ</a></li>
											<li><a href="#">ยังไม่มีรายการ</a></li>
										</ul>
									</div>
								</div>
							</div>

							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#womens">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											แจ้งชำระเงิน
										</a>
									</h4>
								</div>
								<div id="womens" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="#">ยังไม่มีรายการ</a></li>
											<li><a href="#">ยังไม่มีรายการ</a></li>
											<li><a href="#">ยังไม่มีรายการ</a></li>
										</ul>
									</div>
								</div>
							</div>

							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#he">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											ติดต่อเรา
										</a>
									</h4>
								</div>
								<div id="he" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="#">ยังไม่มีรายการ</a></li>
											<li><a href="#">ยังไม่มีรายการ</a></li>
										</ul>
									</div>
								</div>
							</div>
					
						</div><!--/category-products-->
					
					

						{{-- <div class="brands_products"><!--brands_products-->
							<h2>Brands</h2>
							<div class="brands-name">

								<ul class="nav nav-pills nav-stacked">
								{{-- 	<li>
										<a> <span class="pull-right">({{count($T_shirt)}})</span>
											เสื้อยืด
										</a>
									</li>
									<li>
										<a> <span class="pull-right">({{count($shirt)}})</span>
										เสื้อเชิ้ต</a>
									</li> --}}
									{{-- <li><a href="#"> <span class="pull-right">(27)</span>Not3</a></li>
									<li><a href="#"> <span class="pull-right">(32)</span>Not4</a></li>
									<li><a href="#"> <span class="pull-right">(5)</span>Not5</a></li>
									<li><a href="#"> <span class="pull-right">(9)</span>Not6</a></li>
									<li><a href="#"> <span class="pull-right">(4)</span>Not7</a></li>
								</ul>
							</div> --}}
						{{-- </div> --}}<!--/brands_products--> 
						
					{{-- 	<div class="fb-page" data-href="https://www.facebook.com/IndyroomShop/" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/IndyroomShop/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/IndyroomShop/">Facebook</a>
						</blockquote></div> --}}


						
						<div class="shipping text-center"><!--shipping-->
						<a href="https://www.shirtbeshop.com/">
							<img src="{{asset('images/home/shipping.jpg')}}" alt="" />
							</a>
						</div><!--/shipping-->

						<div class="shipping text-center"><!--shipping-->
						<a href="https://www.shirtbeshop.com/">
							<img src="{{asset('images/home/shipping.jpg')}}" alt="" />
						</a>
						</div><!--/shipping-->

					

						
					
					</div>
				</div>

				</section>

				<div id="fb-root"></div>


<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/th_TH/sdk.js#xfbml=1&version=v2.9&appId=1180008945385133";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

