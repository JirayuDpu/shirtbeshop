@extends('layout.main')
@section('content')

	
<section>
    <div class="container">
      <div class="row">

      
       @include('user.layout.manu')

        <div class="col-sm-9 padding-right">
          @forelse($orders->chunk(4) as $chunk)
                   @foreach($chunk as $order)


         {{--  @foreach($orders as $order) --}}
          @if(Auth::user()->id ==  $order->user_id)
            <li>
            <div class="productinfo text-center">
              <h3>รายการสั่งซื้อ : {{$order->user->name}}</h3>
            </div>  
              <h4>รหัสสินค้า : {{$order->id}}</h4>
               

                <table class="table table-bordered">
                  <tr>
                     <th>ชื่อสินค้า</th>
                      <th>จำนวน</th>
                      <th>ราคา</th>
                      <th>ประเภท</th>
                      <th>รายการชำระเงิน</th>
                  </tr>

                  @foreach($order->orderItems as $item)
                    <tr>
                      <td>{{$item->pro_name}}</td>
                      <td>{{$item->pivot->qty}}</td>
                      <td>{{$item->pivot->total}}</td>
                      <td>{{$item->category->category_name}}</td>
                      <td> @if($order->delivered <= 0  )
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
                @if($order->delivered <=0 )
                 <form action="{{route('order.destroy', $order->id)}}" method="post">
                                {{csrf_field()}}
                                {{method_field('DELETE')}}
                                <input  class="btn btn-sm btn-danger" type="submit" value="ลบสินค้า">
                  </form>
                @endif

                
                    @if(Auth::user()->id ==  $order->user_id)
                        @if($order->delivered <= 0  )
                        <h5 style="color: red">รอดำเนินการตรวจสอบสินค้า</h5>
                        <a href="{{url('paymant/create' , $order->id)}}" class="btn btn-sm btn-success">แจ้งชำระเงิน</a>
                         @elseif($order->delivered == 1  )
                          <h5 style="color: blue">สินค้ากำลังดำเนินการส่ง</h5>
                         @else
                        <h5 style="color: green">สินค้าดำเนินการเรียบร้อยแล้ว</h5>
                        {{--  <h5>สินค้าจะส่งไปถึงมือลูกค้าภายใน 7 วันหาก 7 วันไม่ได้รับสินค้ากรุณาแจ้ง 0927426623</h5> --}}        
             @endif
             @endif
       

                @endif
            </li>
             <h4>ราคารวม : {{$order->total}}</h4>

          @endforeach
          @empty
          <div class="productinfo text-center">
              <h1>ยังไม่มีรายการสั่งซื้อสินค้า</h1>
          </div>
          @endforelse   


         {{--  <div class="productinfo text-center">
            <h1>ยังไม่มีรายการสั่งซื้อสินค้า</h1>
          </div> --}}

        {{--    <div class="productinfo text-center">
            {{ $orders->links() }}
            </div> --}}


            
        </div>
      </div>
    </div>
  </section>


	


@endsection