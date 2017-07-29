<h1>www.shirtbeshop.com</h1>


ลูกค้า: {{$mailuser->user->name}} <br>
ชื่อจริง: {{$mailuser->user->first_name}} {{$mailuser->user->last_name}} <br>
เบอร์ติดต่อ: {{$mailuser->user->phone}} <br>
เบอร์ที่ติดต่อกรอกเข้ามาใหม่: {{$mailuser->phone}} <br>
Email : {{ $mailuser->user->email }}<br>
<br><br><br>

รหัสสิค้า: {{$mailuser->order_id}}
<hr>
รหัส Address: {{$mailuser->id}}<br>
จำนวนเงินที่โอนเข้ามา : {{ $mailuser->amount }}<br>
โอนเข้าธนาคาร : {{ $mailuser->bank_admin_id }}<br>
เลขบัญชี : {{ $mailuser->account_user }}<br>







@component('mail::button', ['url' => 'http://localhost:8000/admin/payment/pending'])
คลิกที่นี้
@endcomponent


