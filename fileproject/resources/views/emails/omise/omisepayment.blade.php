<h1>www.shirtbeshop.com</h1>
ข้อมูลAddressผ่าน Omise 

ลูกค้า: {{$mailuser->user->name}} <br>
ชื่อจริง: {{$mailuser->user->first_name}} {{$mailuser->user->last_name}} <br>
เบอร์ติดต่อ: {{$mailuser->user->phone}} <br>
เบอร์ที่ติดต่อกรอกเข้ามาใหม่: {{$mailuser->phone}} <br>
Email : {{ $mailuser->user->email }}<br>
<br><br><br>

รหัสสิค้า: {{$mailuser->order_id}}
<hr>
รหัส Address: {{$mailuser->id}}<br>
จำนวนเงิน : {{ $mailuser->amount }}<br>
เบอร์ที่ติดต่อกรอกเข้ามาใหม่ : {{ $mailuser->phone }}<br>