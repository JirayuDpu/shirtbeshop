@extends('layout.main')
@section('content')

	


<section>
		<div class="container">
			<div class="row">

			@include('user.layout.manu')
			<div class="productinfo text-center">
			<h1>ยินดีตอนรับคุณ : {{-- {{ Auth::user()->first_name }}  --}}{{ Auth::user()->name }}</h1>
			</div>
				 <div class="col-sm-9 padding-right">
			          @foreach($orders as $order)
			          @if(Auth::user()->id ==  $order->user_id)
			            <li>
			            <div class="productinfo text-center">

			             {{--  <h4>รายการสั่งซื้อ : {{$order->user->name}}</h4> --}}
			              <h4>รหัสสินค้า : {{$order->id}}</h4>
			              <h4>ราคา : {{$order->total}}</h4> {{-- {{ Auth::user()->name }} --}}
			               @if($order->delivered <= 0  )
                        <h5 style="color: red">ยังไม่ชำระเงิน</h5>
                         @elseif($order->delivered == 1  )
                          <h5 style="color: green">ชำระเงินเรียบร้อยแล้ว</h5>
                         @else
                        <h5 style="color: green">ชำระเงินเรียบร้อยแล้ว</h5>
                        @endif
			            </div>
			            
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


			                @endif
			            </li>
			             @if(Auth::user()->id ==  $order->user_id)
			                         @if($order->delivered <= 0  )
			                        <h5 style="color: red">รอดำเนินการตรวจสอบสินค้า</h5>
			                        <a href="{{url('paymant/create' , $order->id)}}" class="button">แจ้งชำระเงิน</a>
			                         @elseif($order->delivered == 1  )
			                          <h5 style="color: blue">สินค้ากำลังดำเนินการส่ง</h5>
			                         @else
			                        <h5 style="color: #000066">สินค้าดำเนินการส่งเรียบร้อยแล้ว</h5>
			             @endif
			             @endif

			              



			          @endforeach
			          <div class="productinfo text-center">
						{{ $orders->links() }}
						</div>

            
        </div>


			</div>			
		</div>
	</section>


@endsection