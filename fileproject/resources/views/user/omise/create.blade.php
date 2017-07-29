
@extends('layout.main')
@section('content')

<section>
		<div class="container">
			<div class="row">

			@include('user.layout.manu')

			<div class="col-md-6 col-md-offset-1">
			<div class="productinfo text-center">
        	<div class="productinfo text-center">
        {{-- 	<h2 style="color: red">คำเตือน</h2><br>
          <h3 style="color: red">กรุณากรอกข้อมูลของท่านให้ถูกต้องที่สุดเพื่อเป็นกสนป้องกันปัญหาของท่าน</h3><br>
          <h3 style="color: red">หากมีการแจ้งเตือน token was already used  นั้นหมายความว่าท่านใส่ข้อมูลไม่ถูกต้อง</h3>
          <h3 style="color: green">วิธีแก้ไข:</h3> <h3> ให้ทำการแจ้งชำระเงินย้อนหลังได้ที่หน้าเว็บ ค่ะ</h3><br> --}}
        	 {!! Form::open(['route' => 'omiseaddress.store', 'method' => 'post', 'files' => true]) !!}
          {{--  {!! Form::open(array('url' => secure_url('omiseaddress.store'), 'method' => 'post', 'files' => true)) !!} --}}

            <div class="form-group{{ $errors->has('order_id') ? ' has-error' : '' }}">
           <div class="form-group">
                {{ Form::label('order_id', 'รหัสสินค้า :') }}
              {{ Form::text('order_id', $IDorders,  array('class' => 'form-control' , 'readonly')) }}
              
                @if ($errors->has('order_id'))
                  <div class="alert alert-danger"><span>{{ '----'}}</span></div>
                @endif     
        </div>
        </div>



        	 <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
	           	<div class="col-sm-6 ">
		            {{ Form::label('first_name', 'ชื่อจริง :') }}
		            {{ Form::text('first_name' ,Auth::user()->first_name, 
		            array('class' => 'form-control' , 'readonly')) }}
		        @if ($errors->has('first_name'))
               	 	<div class="alert alert-danger"><span>{{ '----'}}</span></div>
           		@endif 
		          </div>
		    </div>


        	   <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
	          <div class="col-sm-6 ">
	          	{{ Form::label('last_name', 'นามกสุล :') }}
	            {{ Form::text('last_name', Auth::user()->last_name, 
	            array('class' => 'form-control' , 'readonly')) }}
	          	@if ($errors->has('last_name'))
               	 	<div class="alert alert-danger"><span>{{ '----'}}</span></div>
           		@endif
	        	</div>
	        </div>

	         <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                {{ Form::label('address', 'ที่อยู่') }}
                {{ Form::textarea('address', null, array('class' => 'form-control')) }}
                 @if ($errors->has('address'))
               	 	<div class="alert alert-danger"><span>{{ 'ที่อยู่ไม่ได้ระบุ'}}</span></div>
           		@endif
            </div>

              <div class="form-group{{ $errors->has('zip') ? ' has-error' : '' }}">
                {{ Form::label('zip', 'ไปรษณีย์') }}
                {{ Form::number('zip', null, array('class' => 'form-control')) }}
              	@if ($errors->has('zip'))
               	 	<div class="alert alert-danger"><span>{{ 'ไปรษณีย์ไม่ได้ระยุ'}}</span></div>
           		@endif
            </div>



             <div class="form-group{{ $errors->has('amount') ? ' has-error' : '' }}">
                {{ Form::label('amount', 'จำนวนเงิน') }}
                {{ Form::text('amount', $sum1, array('class' => 'form-control','readonly')) }}
                @if ($errors->has('amount'))
               	 	<div class="alert alert-danger"><span>{{ 'จำนวนเงินที่โอนไม่ได้ระบุ'}}</span></div>
           		@endif
            </div>


            <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                {{ Form::label('phone', 'เบอร์โทรศัพท์ที่สามารถติดต่อได้') }}
                {{ Form::number('phone', null, array('class' => 'form-control')) }}
            @if ($errors->has('phone'))
                <div class="alert alert-danger"><span>{{'เบอร์ติดต่อไม่ได้ระบุไม่ได้ระบุ'}}</span></div>
            @endif
            </div>

            <div class="form-group">
                {{ Form::label('source', 'ระบบตัดเงินผ่านOmise') }}
                {{ Form::radio('source', 'Omise', true) }}
            </div>

             <div class="form-group">
                {{ Form::label('confirm', 'confirm') }}
                {{ Form::radio('confirm', '1', true) }}
            </div>
          

        	{{ Form::submit('ยืนยืนข้อมูล', array('class' => 'button success')) }}
           	{!! Form::close() !!}

            
             </div>

        {{-- 	<h4>{{$orders}}</h4> --}}
				

            
        </div>

        </div>


			</div>			
		</div>
        	}
        	}
	</section>


	


@endsection