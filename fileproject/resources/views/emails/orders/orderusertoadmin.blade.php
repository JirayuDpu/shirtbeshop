<h1>www.shirtbeshop.com</h1>
<br>

<hr>
ลูกค้า: {{$order->user->name}} <br>
ชื่อจริง: {{$order->user->first_name}} {{$order->user->last_name}} <br>
Email: {{$order->user->email}} <br>
เบอร์ติดต่อ: {{$order->user->phone}} <br>
<br>
<hr>
รหัสสินค้า: {{$order->total}}<br>
@foreach($order->orderItems as $item)
	    สินค้า :{{$item->pro_name}}<br>
        จำนวน  :{{$item->pivot->qty}}<br>
        ราคา :{{$item->pivot->total}}<br>
        <hr>

@endforeach
<hr>
ราคารวม {{$order->total}}

@component('mail::button', ['url' => 'http://localhost:8000/admin/orders/pending'])
Button Text
@endcomponent

