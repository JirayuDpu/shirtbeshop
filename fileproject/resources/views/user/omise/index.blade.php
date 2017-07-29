
@extends('layout.main')
@section('content')

<section>
		<div class="container">
			<div class="row">

			@include('user.layout.manu')
			<div class="productinfo text-center">
			<h3>จากทางร้าน Shirtbeshop สินค้าของคุณ : {{ Auth::user()->name }} 
			ผ่านอนุมัติแล้วกรุณารอรับสินค้าภายใน 7 วัน หากเกิน 7 วันกรุณาติดต่อ 0927426623 </h3>
			<h3>ทางร้าน Shirtbeshop ขอขอบคุณ คุณ : {{ Auth::user()->name }} ที่มาใช้บริการค่ะ </h3>
			</div>
			<h4>
			กรุณาตรวจสอบสินค้าได้ที่ <a href="{{ url('user/orders/') }} ">Account</a>ของท่าน
        	<br/></h4>
    


        	 <div class="col-sm-9 padding-right">
          @foreach($orders as $order)
          @if(Auth::user()->id ==  $order->user_id)
            <li>
            <div class="productinfo text-center">
              <h3>รายการสั่งซื้อ : {{$order->user->name}}</h3>
            </div>  
              <h4>รหัสสินค้า : {{$order->id}}</h4>
              @if($order->delivered == 1)
              <h5 style="color: green">จ่ายเงินแล้ว</h5>
               @endif
                <table class="table table-bordered">
                  <tr>
                     <th>ชื่อสินค้า</th>
                      <th>จำนวน</th>
                      <th>ราคา</th>
                      <th>ประเภท</th>
                  </tr>

                  @foreach($order->orderItems as $item)
                    <tr>
                      <td>{{$item->pro_name}}</td>
                      <td>{{$item->pivot->qty}}</td>
                      <td>{{$item->pivot->total}}</td>
                      <td>{{$item->category->category_name}}</td>
                    </tr>

                    @endforeach
                </table>
          <h4>ราคารวม : {{$order->total}}</h4>

                @endif
            </li>
             @if(Auth::user()->id ==  $order->user_id)
                        @if($order->delivered <= 0  )
                        <h5 style="color: red">รอดำเนินการตรวจสอบสินค้า</h5>
                        <a href="{{url('paymant/create' , $order->id)}}" class="button">แจ้งชำระเงิน</a>
                         @elseif($order->delivered == 1  )
                          <h5 style="color: blue">สินค้ากำลังดำเนินการส่ง</h5>
                         @else
                        <h5 style="color: green">สินค้าดำเนินการเรียบร้อยแล้ว</h5>
                        {{--  <h5>สินค้าจะส่งไปถึงมือลูกค้าภายใน 7 วันหาก 7 วันไม่ได้รับสินค้ากรุณาแจ้ง 0927426623</h5> --}}

                        
             @endif
             @endif

          

          @endforeach

        {{--    <div class="productinfo text-center">
            {{ $orders->links() }}
            </div> --}}


            
        </div>

        	

        	{{-- <h4>{{$orders}}</h4> 
        	<hr>
        	<h4>{{$omises}}</h4> --}}
				

            
        </div>


			</div>			
		</div>
        	}
        	}
	</section>


	


@endsection