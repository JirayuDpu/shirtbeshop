{{-- @extends('admin.layout.mainadmin') --}}
@extends('layout.main')
@section('content')
<section>
    <div class="container">
      <div class="row">

{{-- 	{{$patments}}    --}}   
        @include('admin.layout.manuadmin')

        <div class="col-sm-9 padding-right">
          @foreach($payments as $payment)
            <li>
            <div class="productinfo text-center">
              <h4>สมาชิก : {{$payment->user->name}}</h4>
            </div>
            {{-- <hr> --}}
             <div class="productinfo text-center">
              <h4>คุณ : {{$payment->first_name}}  {{$payment->last_name}}</h4>
            </div>

            <form action="{{route('update.payment',$payment->id)}}" method="POST" class="pull-right">
              {{csrf_field()}}
              <label for="delivered">Confirm</label>
              <input type="checkbox" value="1" name="confirm"  {{$payment->confirm==1?"checked":""}}>
             {{--  <input type="checkbox" value="1" name="confirm"  {{$payment->confirm==1?"checked":"" }}> --}}
              <input type="submit" value="Submit" >
            </form>


                <table class="table table-bordered">
                  <tr>
                    {{-- <th width="15%">ชื่อ ลูกค้า</th> --}}
                    <th>รหัสรายการสินค้า</th>
                    <th width="20%">ที่อยู่</th>
                    <th>รหัสไปรษณีย์</th>
                    <th  width="10%">ธนาคาร</th>
                    <th>จำนวนเงิน</th>
                    <th width="20%">เลขบัญชีธนาคาร</th>
                    <th  width="10%">ชำระเงินด้วยระบบ</th>
                    <th width="10%">เบอร์โทรที่สามารถติดต่อได้</th>
                    <th>วัน/เวลา</th>
                    <th>confirm</th>
                    <th>image</th>
                </tr>

                  <td>{{$payment->order_id}}</td>
                  <td>{{$payment->address}}</td>  
                  <td>{{$payment->zip}}</td>  
                  <td>{{$payment->bank_admin_id}}</td>
                  <td>{{$payment->amount}}</td>   
                  <td>{{$payment->account_user}}</td>
                  <td>{{$payment->source}}</td>
                  <td>{{$payment->phone}}</td>
                  <td>{{$payment->updated_at}}</td>
                  <td>{{$payment->confirm}}</td>
                  <td>
                      <form action="{{route('admin.payments.image_payment', $payment->id)}}" method="get">
                                {{csrf_field()}}
                                <input class="button small " type="submit" value="image">
                      </form>
                  </td>


                 {{--  <td>{{$payment->source}}</td>
                  <td>{{$payment->amount}}</td>   
                  <td>{{$payment->account_user}}</td>
                  <td>{{$payment->phone}}</td>
                  <td>{{$payment->updated_at}}</td>
                  <td>{{$payment->confirm}}</td> --}}
               {{--    <td>
                      <form action="{{route('admin.payments.image_payment', $payment->id)}}" method="get">
                                {{csrf_field()}}
                                <input class="button small " type="submit" value="image">
                      </form>
                  </td> --}}



{{--  
                  @foreach($order->orderItems as $item)
                    <tr>
                      <td>{{$item->pro_name}}</td>
                      <td>{{$item->pivot->qty}}</td>
                      <td>{{$item->pivot->total}}</td>
                    </tr>
                      @endforeach --}}
                </table>
            </li>
          @endforeach
      
        </div>
      </div>
    </div>
  </section>

@endsection

