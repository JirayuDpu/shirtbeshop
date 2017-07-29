@extends('layout.main')
@section('content')

	
<section>
    <div class="container">
      <div class="row">

      
       @include('user.layout.manu')

       <div class="col-sm-9 padding-right">
          @foreach($payments as $payment)
            <li>
            <div class="productinfo text-center">
              <h4>สมาชิกที่ใช้แสดง : {{$payment->user->name}}</h4>
            </div>
            {{-- <hr> --}}
             <div class="productinfo text-center">
              <h4>คุณ : {{$payment->first_name}}  {{$payment->last_name}}</h4>
            </div>

      {{--       <form action="{{route('update.payment',$payment->id)}}" method="POST" class="pull-right">
              {{csrf_field()}}
              <label for="delivered">Confirm</label>
              <input type="checkbox" value="1" name="confirm"  {{$payment->confirm==1?"checked":""}}>
              <input type="submit" value="Submit" >
            </form> --}}


                <table class="table table-bordered">
                  <tr>
                    {{-- <th width="15%">ชื่อ ลูกค้า</th> --}}
                    <th>รหัสสินค้า</th>
                    <th width="20%">ที่อยู่</th>
                    <th>รหัสไปรษณีย์</th>
                    <th>ธนาคาร</th>
                    <th>ชำระเงินด้วยระบบ</th>
                    <th>จำนวนเงินที่โอนที่โอนเข้ามา</th>
                    <th>เลขบัญชีธนาคาร</th>
                    
                    <th>เบอร์โทรที่สามารถติดต่อได้</th>
                    <th>วัน/เวลา</th>
             
                </tr>
                  <td>{{$payment->order_id}}</td>
                  <td>{{$payment->address}}</td>  
                  <td>{{$payment->zip}}</td>  
                  <td>{{$payment->bank_admin_id}}</td>
                  <td>{{$payment->source}}</td>
                  <td>{{$payment->amount}}</td>   
                  <td>{{$payment->account_user}}</td>
                  <td>{{$payment->phone}}</td>
                  <td>{{$payment->updated_at}}</td>
                </table>
            </li>

                        @if($payment->confirm <= 0  )
                        <h5 style="color: red">กำลังตรวจสอบรายการชำระเงิน</h5>
                      
                         @else
                        <h5 style="color: green">ผ่านการตรวจสอบชำระเรียบร้อยแล้ว  กรุณาตรวจสอบสถานะสินค้าของท่านได้ที่ </h5>
                        <a href="{{ url('user/orders') }}"><h5>รายการสั่งซื้อ</h5></a>
                        {{--  <h5>สินค้าจะส่งไปถึงมือลูกค้าภายใน 7 วันหาก 7 วันไม่ได้รับสินค้ากรุณาแจ้ง 0927426623</h5> --}}

                        
             @endif
              


          @endforeach
         {{--  @empty
                <h3>No shirts</h3> --}}
      
        </div>

      </div>
    </div>
  </section>


	


@endsection