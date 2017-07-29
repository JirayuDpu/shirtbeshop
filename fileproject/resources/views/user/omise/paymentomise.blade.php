
@extends('layout.main')
@section('content')

<section>
		<div class="container">
			<div class="row">

			@include('user.layout.manu')

			<div class="col-md-6 col-md-offset-1">
			<div class="productinfo text-center">
        	<div class="productinfo text-center">
        	 {!! Form::open(['url' => 'createpaymentorder', 'method' => 'post', 'files' => true]) !!}
          {{--  {!! Form::open(array('url' => secure_url('omiseaddress.store'), 'method' => 'post', 'files' => true)) !!} --}}

            <div class="form-group{{ $errors->has('order_id') ? ' has-error' : '' }}">
           <div class="form-group">
                {{ Form::label('order_id', 'รหัสสินค้า :') }}
              {{ Form::number('order_id', null,  array('class' => 'form-control')) }}
              
               {{--  @if ($errors->has('order_id'))
                  <div class="alert alert-danger"><span>{{ '----'}}</span></div>
                @endif      --}}
                
               @foreach ($errors->get('order_id') as $error) 
                                     <span class="help-block">
                                <strong>{{ $error }}</strong>
                                </span>
                @endforeach
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
               	   @foreach ($errors->get('address') as $error) 
                                     <span class="help-block">
                                <strong>{{ $error }}</strong>
                                </span>
                @endforeach
           		@endif
            </div>

              <div class="form-group{{ $errors->has('zip') ? ' has-error' : '' }}">
                {{ Form::label('zip', 'ไปรษณีย์') }}
                {{ Form::number('zip', null, array('class' => 'form-control')) }}
              	 @foreach ($errors->get('zip') as $error) 
                                     <span class="help-block">
                                <strong>{{ $error }}</strong>
                                </span>
                @endforeach
            </div>

             <div class="form-group{{ $errors->has('amount') ? ' has-error' : '' }}">
                {{ Form::label('amount', 'จำนวนเงินในช่วงนั้น') }}
                {{ Form::number('amount', null, array('class' => 'form-control')) }}
                @foreach ($errors->get('amount') as $error) 
                                     <span class="help-block">
                                <strong>{{ $error }}</strong>
                                </span>
                @endforeach
            </div>


            <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                {{ Form::label('phone', 'เบอร์โทรศัพท์ที่สามารถติดต่อได้') }}
                {{ Form::number('phone', null, array('class' => 'form-control')) }}
            @foreach ($errors->get('phone') as $error) 
                                     <span class="help-block">
                                <strong>{{ $error }}</strong>
                                </span>
                @endforeach
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