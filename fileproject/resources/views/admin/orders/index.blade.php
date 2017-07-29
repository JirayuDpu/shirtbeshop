{{-- @extends('admin.layout.mainadmin') --}}
@extends('layout.main')
@section('content')
<section>
    <div class="container">
      <div class="row">

      
        @include('admin.layout.manuadmin')

        <div class="col-sm-9 padding-right">

    {{--     {{$orders}} --}}

          @foreach($orders as $order)
            <li>
            <div class="productinfo text-center">
              <h4>ลูกค้า : {{$order->user->name}}</h4>
              <h4>รหัสสินค้า : {{$order->id}}</h4>
              <h4>ราคา : {{$order->total}}</h4>
              
            </div>

            @if($order->delivered == 0 )
            
            <form action="{{ route('toggle.deliver' , $order->id) }}" method="POST" class="pull-right">
                    {{csrf_field()}}
                   <label for="delivered">ดำเนินการส่ง</label>
                   <input type="checkbox" value="1" name="sending" {{$order->delivered==1?"checked":""}}>
                   {{-- <label for="delivered">ส่งแล้ว</label>
                   <input type="checkbox" value="2" name="delivered" {{$order->delivered==2?"checked":""}}> --}}
                   <input type="submit" value="Submit">
            </form>
           

            @elseif($order->delivered == 1)
            
               <form action="{{ route('toggle.deliver' , $order->id) }}" method="POST" class="pull-right">
                    {{csrf_field()}}
                  {{--  <label for="delivered">กำลังดำเนินการส่ง</label>
                   <input type="checkbox" value="1" name="sending" {{$order->delivered==1?"checked":""}}> --}}
                   <label for="delivered">ส่งแล้ว</label>
                   <input type="checkbox" value="2" name="delivered" {{$order->delivered==2?"checked":""}}>
                   <input type="submit" value="Submit">
                </form>
          

            @elseif($order->delivered > 1)
            
               <form action="{{ route('toggle.deliver' , $order->id) }}" method="POST" class="pull-right">
                    {{csrf_field()}}
                   {{-- <label for="delivered">กำลังดำเนินการส่ง</label>
                   <input type="checkbox" value="1" name="sending" {{$order->delivered==1?"checked":""}}> --}}
                   <label for="delivered">ส่งแล้ว</label>
                   <input type="checkbox" value="2" name="delivered" {{$order->delivered==2?"checked":""}}>
                   <input type="submit" value="Submit">
                </form>
            
            @endif

          {{--   <form action="{{ route('toggle.deliver' , $order->id) }}" method="POST" class="pull-right">
              {{csrf_field()}}
              <label for="delivered">กำลังดำเนินการส่ง</label>
              <input type="checkbox" value="1" name="delivered" {{$order->delivered==1?"checked":""}}>
              <label for="delivered">ส่งแล้ว</label>
              <input type="checkbox" value="2" name="sending" {{$order->delivered==1?"checked":""}}>
              <input type="submit" value="Submit" >
            </form> --}}


                <table class="table table-bordered">
                  <tr>
                    <th>ชื่อสินค้า</th>
                    <th>จำนวน</th>
                    <th>ราคา</th>
                    <th>ระบบตัดเงิน</th>
                    <th>ประเภท</th>
                   {{--  <th>Action</th> --}}
                  </tr>

                  @foreach($order->orderItems as $item)
                    <tr>
                    {{-- <h1>5555{{$item}}</h1> --}}
                      <td>{{$item->pro_name}}</td>
                      <td>{{$item->pivot->qty}}</td>
                      <td>{{$item->pivot->total}}</td>
                      <td>{{$order->omise}}</td>
                      <td>{{$item->category->category_name}}</td>
                     {{--  <td>
                         <form action="{{route('order.destroy', $order->id)}}" method="post">
                                {{csrf_field()}}
                                {{method_field('DELETE')}}
                                <input  class="btn btn-sm btn-danger" type="submit" value="ลบสินค้า">
                            </form>
                      </td> --}}
                    </tr>
                      @endforeach
                </table>
                  <form action="{{route('order.destroy', $order->id)}}" method="post">
                                {{csrf_field()}}
                                {{method_field('DELETE')}}
                                <input  class="btn btn-sm btn-danger" type="submit" value="ลบสินค้า">
                   </form>
            </li>
          @endforeach
      
        </div>
      </div>
    </div>
  </section>

@endsection

