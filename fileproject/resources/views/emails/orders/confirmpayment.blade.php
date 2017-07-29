<h3>จากทางร้านshirtbeshop</h3><br>

<h3>สินค้าของท่านได้ผ่านการชำระเงินเรียบร้อยแล้ว   ขอบคุณที่ใช้บริการค่ะ</h3><br>
<br>
<hr>

<h3>กรุณาตรวจสอบข้อมูล</h3>

ลูกค้า: {{$payment->user->name}} <br>
ชื่อจริง: {{$payment->user->first_name}} {{$payment->user->last_name}} <br>
เบอร์ติดต่อ: {{$payment->user->phone}} <br>
เบอร์ที่ติดต่อกรอกเข้ามาใหม่: {{$payment->phone}} <br>
Email : {{ $payment->user->email }}<br>
<br><br><br>

รหัสสิค้า: {{$payment->order_id}}
<hr>
รหัส Address: {{$payment->id}}<br>
จำนวนเงินที่โอนเข้ามา : {{ $payment->amount }}<br>
โอนเข้าธนาคาร : {{ $payment->bank_admin_id }}<br>
เลขบัญชี : {{ $payment->account_user }}<br>

<hr><br>

หากข้อมูลผิดพลาดกรุณาติดต่อที่ 0927426623 หรือ theboat72@gmail.com 
ขอบคุณค่ะ<br>

@component('mail::button', ['url' => 'http://localhost:8000/user/payment'])
Button Text
@endcomponent


