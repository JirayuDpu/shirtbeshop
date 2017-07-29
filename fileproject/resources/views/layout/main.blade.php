<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | E-Shopper</title>
    <link href="{{asset('dist/css/bootstrap.min.css') }}" rel="stylesheet">{{-- secure_asset() --}}
    <link href="{{asset('dist/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{asset('dist/css/prettyPhoto.css') }}" rel="stylesheet">
    <link href="{{asset('dist/css/price-range.css') }}" rel="stylesheet">
    <link href="{{asset('dist/css/animate.css') }}" rel="stylesheet">
	<link href="{{asset('dist/css/main.css') }}" rel="stylesheet">
	<link href="{{asset('dist/css/responsive.css') }}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->      
    <title>
        @yield('title' , 'Mickey Shirts')
    </title> 

    <link rel="shortcut icon" 
    href="{{asset('dist/images/ico/favicon.ico') }}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" 
    href="{{asset('dist/images/ico/apple-touch-icon-144-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" 
    href="{{asset('dist/images/ico/apple-touch-icon-114-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" 
    href="{{asset('dist/images/ico/apple-touch-icon-72-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" 
    href="{{asset('dist/images/ico/apple-touch-icon-57-precomposed.png') }}">
</head><!--/head-->
   <script src="{{asset('dist/js/jquery.js')}}"></script>
	<script src="{{asset('dist/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('dist/js/jquery.scrollUp.min.js')}}"></script>
	<script src="{{asset('dist/js/price-range.js')}}"></script>
    <script src="{{asset('dist/js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{asset('dist/js/main.js')}}"></script>




    {!!Html::script('select2-4.0.3/dist/js/select2.js')!!}
    {!!Html::style('select2-4.0.3/dist/css/select2.css',['rel'=>"stylesheet"])!!}


<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i> 092 742 6623</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> theboat72@gmail.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="https://www.facebook.com/jirayu.chartiyanon"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="{{url('/')}}"><img src="{{asset('dist/images/home/logo.png')}}" alt="" /></a>
						</div>
					{{-- 	<div class="btn-group pull-right">
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									USA
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="#">Canada</a></li>
									<li><a href="#">UK</a></li>
								</ul>
							</div>
							
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									DOLLAR
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="#">Canadian Dollar</a></li>
									<li><a href="#">Pound</a></li>
								</ul>
							</div>
						</div> --}}
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								{{-- <li><a href="#"><i class="fa fa-user"></i> Account</a></li>
								<li><a href="#"><i class="fa fa-star"></i> Wishlist</a></li> --}}
								{{-- <li><a href="checkout.html"><i class="fa fa-crosshairs"></i> Checkout</a></li> --}}
								<li>
								<a href="{{route('cart.index')}}">
									<i class="fa fa-shopping-cart"  aria-hidden="true">	</i> ตะกร้าสินค้า
									<span class="badge"> {{Cart::count()}}</span>
								</a>
								</li>

								{{--  <li>
						          <a href="">
						          <i class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></i> Shoppong Cart
						          <span class="badge">{{ Session::has('cart') ? Session::get('cart')->totalQty : '' }}</span>
						          </a>
						        </li> --}}

								

								@if(Auth::user())

								 <li><a href="{{URL::to('/admin')}}">
                                <span style="color: #bce8f1"></span>Account</a>
								 </li>

								 <li><a href="{{URL::to('/logout')}}">
		                            <span style="color: #FF0000">{{ ucwords(Auth::user()->name) }} : </span>
		                            <span class="glyphicon glyphicon-log-in"></span> Logout</a>
		                            </li>

					

								 @else
								<li><a href="{{route('login')}}"><i class="fa fa-lock"></i> เข้าสู่ระบบ</a></li>
								<li><a href="{{ route('register') }}">
								<span class="glyphicon glyphicon-user"></span> สมัครสมาชิก</a></li>

								@endif
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="{{url('/')}}" class="active">หน้าหลัก</a></li>
								<li class="dropdown"><a href="#">สินค้า<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="{{url('recommend/1')}}">สินค้าแนะนำ</a></li>
                                        <li><a href="{{url('newproduct/1')}}">สินค้าใหม่</a></li>
										<li><a href="{{url('discount')}}">สินค้าลดราคา</a></li> 
										<li><a href="{{route('cart.index')}}">ตะกร้าสินค้า
										<span class="badge"> {{Cart::count()}}</span>
										</a></li> 
										{{-- <li><a href="checkout.html">Checkout</a></li> 
										<li><a href="cart.html">Cart</a></li> 
										<li><a href="login.html">Login</a></li>  --}}
                                    </ul>
                                </li> 
								{{-- <li class="dropdown"><a href="#">Blog<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="blog.html">Blog List</a></li>
										<li><a href="blog-single.html">Blog Single</a></li>
                                    </ul>
                                </li>  --}}
								{{-- <li><a href="{{ url('shirts01')}}">shirts01</a></li> --}}
								<li><a href="{{ route('select.index')}}">ค้าหาสินค้า</a></li>
								<li class="dropdown"><a href="#">แจ้งชำระเงิน<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="{{url('paymentorder')}}">แจ้งชำระเงินธรรมดา</a></li>
                                        <li><a href="{{url('paymentomise')}}">แจ้งชำระเงินของระบบบัตรเดบิต</a></li>
                                    </ul>
                                </li> 
							</ul>
						</div>
					</div>
					{{-- <div class="col-sm-3">
						<div class="search_box pull-right">
							<input type="text" placeholder="Search"/>
						</div>
					</div> --}}
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
	
	@yield('content')
	
	<footer id="footer"><!--Footer-->
		{{-- <div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="companyinfo">
							<h2><span>e</span>-shopper</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,sed do eiusmod tempor</p>
						</div>
					</div>
					<div class="col-sm-7">
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="{{asset('images/home/iframe1.png')}}" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="{{asset('images/home/iframe2.png')}}" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="{{asset('images/home/iframe3.png')}}" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="{{asset('images/home/iframe4.png')}}" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="address">
							<img src="images/home/map.png" alt="" />
							<p>505 S Atlantic Ave Virginia Beach, VA(Virginia)</p>
						</div>
					</div>
				</div>
			</div>
		</div> --}}
		
		<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-sm-3">
						<div class="single-widget">
							<h2>บริการ</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">ติดต่อเรา</a></li>
								<li><a href="{{ url('user/orders') }}">สถานะคำสั่งซื้อ</a></li>
								<li><a href="#">คำถามที่พบบ่อย</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="single-widget">
							<h2>หมวดหมู่</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="{{ url('manu/1') }}">เสื้อยืด</a></li>
								<li><a href="{{ url('manu/2') }}">เสื้อเชิ้ต</a></li>
								<li><a href="{{ url('manu/3') }}">เสื้อกันหนาว</a></li>
								<li><a href="#">แบรนด์เนม</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="single-widget">
							<h2>นโยบาย</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">ข้อกำหนดการใช้งาน</a></li>
								<li><a href="#">นโยบายความเป็นส่วนตัว</a></li>
								<li><a href="#">นโยบายการคืนเงิน</a></li>
								<li><a href="#">ระบบการเรียกเก็บเงิน</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="single-widget">
							<h2>เกี่ยวกับเรา</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">ข้อมูลของร้าน</a></li>
							</ul>
						</div>
					</div>
					{{-- <div class="col-sm-3 col-sm-offset-1">
						<div class="single-widget">
							<h2>About Shopper</h2>
							<form action="#" class="searchform">
								<input type="text" placeholder="Your email address" />
								<button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
								<p>Get the most recent updates from <br />our site and be updated your self...</p>
							</form>
						</div>
					</div> --}}
					
				</div>
			</div>
		</div>
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © 2013 E-SHOPPER Inc. All rights reserved.</p>
					<p class="pull-right">Designed by <span><a target="_blank" href="http://www.themeum.com">Themeum</a></span></p>
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
	

  
 
</body>
</html>