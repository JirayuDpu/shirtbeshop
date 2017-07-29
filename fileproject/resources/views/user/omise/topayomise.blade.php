@extends('layout.main')
@section('content')

	


<section>
		<div class="container">
			<div class="row">

			@include('user.layout.manu')


			{{-- {{$dataorder}} --}}

			<div class="productinfo text-center">
			<h1>ยินดีตอนรับคุณ : {{ Auth::user()->first_name }} {{ Auth::user()->name }}</h1>
			</div>
				 <div class="col-sm-9 padding-right">
			          @foreach($dataorder as $order)
			          @if(Auth::user()->id ==  $order->user_id)
			            <li>
			            <div class="productinfo text-center">

			             {{--  <h4>รายการสั่งซื้อ : {{$order->user->name}}</h4> --}}
			              <h4>รหัสสินค้า : {{$order->id}} </h4>
			              <h4>ราคา : {{$order->total}}</h4> {{-- {{ Auth::user()->name }} --}}
			            </div>

			            @if(Auth::user()->id ==  $order->user_id)
			                @if($order->delivered <= 0  )
			                <h5 style="color: red">รอดำเนินการตรวจสอบสินค้า</h5>
			                <a href="{{url('paymant/create' , $order->id)}}" class="button">แจ้งชำระเงิน</a>
			                    @elseif($order->delivered == 1  )
			                        <p>สำคัญ : </p><a style="color: red" href="{{URL::to('topayomise')}}">
									<button>แจ้งที่อยู่จัดส่ง</a></button>
									<br>
									<br>
			                     @else
			                <h5 style="color: #000066">สินค้าดำเนินการส่งเรียบร้อยแล้ว</h5>
			             @endif
			             @endif
			             <br>
			            
			            
			            <table class="table table-bordered">
			                  <tr>
			                    <th>ชื่อสินค้า</th>
		                        <th>จำนวน</th>
		                        <th>ราคา</th>
		                        <th>ประเภท</th>
		                        <th>สถานะ</th>
			                  </tr>

			                  @foreach($order->orderItems as $item)
			                    <tr>
			                      <td>{{$item->pro_name}}</td>
			                      <td>{{$item->pivot->qty}}</td>
			                      <td>{{$item->pivot->total}}</td>
			                      <td>{{$item->category->category_name}}</td>
			                      <td>@if($order->delivered <= 0  )
				                        <h5 style="color: red">ยังไม่ชำระเงิน</h5>
				                         @elseif($order->delivered == 1  )
				                          <h5 style="color: green">ชำระเงินเรียบร้อยแล้ว</h5>
				                         @else
				                        <h5 style="color: green">ชำระเงินเรียบร้อยแล้ว</h5>
				                        @endif
			                       </td>
			                    </tr>

			                   

			                      @endforeach

			                </table>


			                @endif
			            </li>
			         {{--     @if(Auth::user()->id ==  $order->user_id)
			                         @if($order->delivered <= 0  )
			                        <h5 style="color: red">รอดำเนินการตรวจสอบสินค้า</h5>
			                        <a href="{{url('paymant/create' , $order->id)}}" class="button">แจ้งชำระเงิน</a>
			                         @elseif($order->delivered == 1  )
			                        	<p>สำคัญ : </p><a style="color: red" href="{{URL::to('topayomise')}}">
										<button>แจ้งที่อยู่จัดส่ง</a></button>
			                         @else
			                        <h5 style="color: #000066">สินค้าดำเนินการส่งเรียบร้อยแล้ว</h5>
			             @endif
			             @endif --}}

			          @endforeach
			          

            
        </div>
			

			</div>			
		</div>
</section>


@endsection