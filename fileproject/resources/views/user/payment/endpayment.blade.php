@extends('layout.main')
@section('content')

<div class="container">
      <div class="row">

      @include('user.layout.manu')

	<div class="productinfo text-center">
			<h1 style="color: green">เราได้รับข้อมูลจากลูกค่ะเรียบร้อยแล้ว</h1><br>
			<h3>- ทางร้านจะทำการตรวจสอบข้อมูลที่ลูกค้าได้แจ้งเข้ามาภายในไม่เกิน 15-30 นาที</h3>
			<h3>- shirtbeshop ขอขอบคุณลูกค้าที่มาใช้บริการค่ะ</h3>
			<h3>- ติดต่อสอบถามเพิ่มเติมได้ที่ 0927426623 หรือ theboat72@gmail.com</h3>

			<a style="color: green" href="{{URL::to('/')}}">
			<button>กลับไปยังหน้าหลัก</a></button>
	 </div>
 	</div>
</div>


  </section>


	


@endsection
							