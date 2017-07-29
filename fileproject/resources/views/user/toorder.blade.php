@extends('layout.main')
@section('content')

	


<section>
		<div class="container">
			<div class="row">

			@include('user.layout.manu')
			<div class="productinfo text-center">
			<h3>ขอขอบคุณ คุณลูกค้า: {{ Auth::user()->name }} ที่ใช้บริการค่ะ </h3>
			</div>
			<div>
			<h4>- รายการสินค้าที่สั่งซื้อจะอยู่ในรายการสั่งซื้อของท่าน   <a href="{{ url('home') }}">คลิกที่นี่</a></h4>
			</div>
			<h4>
			- รายการสั่งซื้อสินค้าของท่านจะเสร็จสิ้นก็ต่อเมื่อลูกค้าได้มีการชำระเงินสินค้านั้นๆ  <a href="{{ url('user/orders/pending') }} ">แจ้งชำระเงินได้ที่</a>
        	<br/></h4>
        	<h4>
			- ถ้าหากสินค้าไม่ได้ชำระเงินภายใจ 7 วัน สินค้าของท่านจะถูกยกเลิกทันที 
        	<br/></h4>


        	{{-- ขอขอบคุณลูกค้าที่ใช้บริการค่ะ
			- รายการสินค้าที่สั่งซื้อจะอยู่ในรายการสั่งซื้อของท่าน (คลิกที่นี่)  --}}
			{{-- - รายการสั่งซื้อสินค้าของท่านจะเสร็จสิ้นก็ต่อเมื่อลูกค้าได้มีการชำระเงินสินค้านั้นๆ (แจ้งชำระเงินได้ที่) --}}
			{{-- - ถ้าหากสินค้าไม่ได้ชำระเงินภายใจ 7 วัน สินค้าของท่านจะถูกยกเลิกทันที  --}}
				{{--  <div class="col-sm-9 padding-right">
			          @foreach($orders as $order)
			          @if(Auth::user()->id ==  $order->user_id)
			            <li>
			            <div class="productinfo text-center">

			              <h4>รายการสั่งซื้อ : {{$order->user->name}}</h4>
			              <h4>รหัสสินค้า : {{$order->id}}</h4>
			              <h4>ราคา : {{$order->total}}</h4> 
			            </div>
			            
			            <table class="table table-bordered">
			                  <tr>
			                    <th>ชื่อสินค้า</th>
			                    <th>จำนวน</th>
			                    <th>ราคาสั่งซื้อ</th>
			                  </tr>

			                  @foreach($order->orderItems as $item)
			                    <tr>
			                      <td>{{$item->pro_name}}</td>
			                      <td>{{$item->pivot->qty}}</td>
			                      <td>{{$item->pivot->total}}</td>
			                    </tr>

			                   

			                      @endforeach

			                </table>


			                @endif
			            </li>
			             @if(Auth::user()->id ==  $order->user_id)
			                        @if($order->delivered <= 0  )
			                        <h5 style="color: red">กำลังรอตรวจสอบดำเนินการชำระเงิน</h5>
			                         @else
			                        <h5 style="color: green">สินค้าผ่านการอนุมัติแล้ว</h5>

			                        <a href="{{url('addresstwo/create')}}" class="button">แจ้งชำระเงิน</a>
			             @endif
			             @endif



			          @endforeach --}}


            
        </div>


			</div>			
		</div>
	</section>


@endsection