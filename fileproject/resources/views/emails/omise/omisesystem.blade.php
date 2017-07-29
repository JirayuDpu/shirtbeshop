<h1>www.shirtbeshop.com</h1>
<br>
ลูกค้าทำการสั่งซื้อสินค้าผ่านระบบตัดเงิน Omise กรุณาตรวจสอบ
<hr>
ลูกค้านาม: {{$order->user->name}} <br>
คุณ: {{$order->user->first_name}}   {{$order->user->last_name	}}<br>
Email: {{$order->user->email}} <br>
เบอร์ติดต่อ: {{$order->user->phone}} <br>

<br>
<hr>
รหัสสินค้า: {{$order->id}}<br>
@foreach($order->orderItems as $item)
	    สินค้า :{{$item->pro_name}}<br>
        จำนวน  :{{$item->pivot->qty}}<br>
        ราคา :{{$item->pivot->total}}<br>
        <hr>

@endforeach
<hr>
<hr>
ราคารวม {{$order->total}}

