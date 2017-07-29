{{-- @component('mail::message') --}}
<h3>สินค้าของลูกค้าผ่านการชำระเงินเรียบร้อยแล้ว</h3>
<br>
<h3>ขนาดนี้สินค้าอยู่ในระหว่างการจัดส่งสินค้า ไม่เกินภายใน 7 วันนับตั้งแต่วันที่ส่งข้อความ หากเกิน 7 วัน กรุณาแจ้ง ที่ 0927426623</h3>
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
@component('mail::button', ['url' => ''])
Button Text
@endcomponent



{{-- Thanks,<br>
{{ config('app.name') }}
@endcomponent --}}
