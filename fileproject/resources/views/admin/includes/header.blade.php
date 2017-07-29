<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{route('home')}}">
                <i class="fa fa-home fa-lg" aria-hidden="true"></i>
                WebSiteName</a>
        </div>

          <ul class="nav navbar-nav">
            <li class="active"> <a href="{{route('home')}}">หน้าแรก</a></li>
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">หมวดหมู่เสื้อผ้า<span class="caret"></span></a>
             <ul class="dropdown-menu">
                    <li>
                        <a href="{{url('manuproduct/2')}}">เสื้อยื้ด</a>
                        <a href="{{url('manuproduct/3')}}">เสื้อเชิ้ด</a>
                    </li>
                </ul>
            </li>

            <li><a href="#">Test2</a></li>
            <li><a href="#">บทความ</a></li>
            <li><a href="#">ติดต่อเรา</a></li>
            

        </ul>
        <!-- <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="{{route('login')}}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li> -->



        <ul class="nav navbar-nav navbar-right">
            <li>
                <a href="{{route('cart.index')}}">
                    <span class="fa fa-shopping-cart fa-1x"></span>CART
                    <span class="alert-dismissible">
                                {{Cart::count()}}
                            </span>
                </a>
            </li>
            
            @if(Auth::user())
                <li><a href="{{URL::to('/admin')}}">
                        <span style="color: #bce8f1"></span>Profile</a>

                </li>
                <li><a href="{{URL::to('/logout')}}">
                        <span style="color: #bce8f1">{{ ucwords(Auth::user()->name) }} : </span>
                        <span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
            @else
               

                <li><a href="{{ route('register') }}"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a href="{{route('login')}}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            @endif
        </ul>


    </div>
</nav>
