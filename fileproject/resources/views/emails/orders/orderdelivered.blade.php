{{-- @component('mail::message') --}}
<h3>จากทางร้านshirtbeshop</h3>

<h3>สินค้าได้ดำเนินการส่งของลูกค้าเป็นที่เรียบร้อยแล้ว ขอขอบคุณที่ใช้บริการค่ะ</h3>
<br>
<hr>
<h1>รหัสสินค้า: {{$order->id}}</h1>

@foreach($order->orderItems as $item)
        สินค้า :{{$item->pro_name}}<br>
        จำนวน  :{{$item->pivot->qty}}<br>
        ราคา :{{$item->pivot->total}}<br>
<hr>
        
@endforeach
<hr>
ราคารวม {{$order->total}}

<hr>
<h1>ขอขอบคุณที่ใช้บริการค่ะ</h1>
@component('mail::button', ['url' => 'http://localhost:8000/user/orders'])
Button Text
@endcomponent

{{-- Thanks,<br>
{{ config('app.name') }}
@endcomponent --}}
