@extends('layout.main')
@section('content')

	
<section>
    <div class="container">
      <div class="row">
       @include('user.layout.manu')
       
        <div class="col-md-6 col-md-offset-1">
        	<h3>Hi !!!</h3>
        	<div class="productinfo text-center">
        		<h3 style="color: green">กรอบข้อมูลของท่านให้ครบพร้อมระบุรหัสสินค้า</h3>
        	</div>

        	<div class="productinfo text-center">
        	 {!! Form::open(['route' => 'paymant.store', 'method' => 'post', 'files' => true]) !!}


        	<div class="form-group{{ $errors->has('order_id') ? ' has-error' : '' }}">
        	 <div class="form-group">
                  {{ Form::label('order_id', 'รหัสสินค้า :') }}
    	            {{ Form::text('order_id', $id,  array('class' => 'form-control' , 'readonly')) }}
    	            
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
                {{--  @if ($errors->has('address'))
               	 	<div class="alert alert-danger"><span>{{ 'ที่อยู่ไม่ได้ระบุ'}}</span></div>
           		@endif --}}
                @foreach ($errors->get('address') as $error) 
                                     <span class="help-block">
                                <strong>{{ $error }}</strong>
                                </span>
                @endforeach
            </div>

            <div class="form-group{{ $errors->has('zip') ? ' has-error' : '' }}">
                {{ Form::label('zip', 'ไปรษณีย์') }}
                {{ Form::number('zip', null, array('class' => 'form-control')) }}
              	{{-- @if ($errors->has('zip'))
               	 	<div class="alert alert-danger"><span>{{ 'ไปรษณีย์ไม่ได้ระยุ'}}</span></div>
           		@endif --}}

                @foreach ($errors->get('zip') as $error) 
                          <span class="help-block">
                                 <strong>{{ $error }}</strong>
                          </span>
                @endforeach
            </div><br>


            <div class="form-group{{ $errors->has('bank_admin_id') ? ' has-error' : '' }}">
                <label for="bank_admin_id" class="col-md-12 control-label">ระบุธนาคารที่ลูกค้าโอนเข้ามา</label>
                  <div class="col-md-12">
                     <input type="radio" id="bank_admin_id" name="bank_admin_id" value="ธนาคารไทยพาณิชย์">ธนาคารไทยพาณิชย์   405-094656-2  สาขาดอนเมือง
                    <br><br>
                    <input type="radio" id="bank_admin_id" name="bank_admin_id" value="ธนาคารกรุงเทพ">ธนาคารกรุงเทพ  881-0-12582-7  สาขาดอนเมือง
                    <br><br>
                    <input type="radio" id="bank_admin_id" name="bank_admin_id" value="ธนาคารกสิกรไทย">ธนาคารกสิกรไทย  156-2-54417-4  สาขาดอนเมือง
                    <br><br>
                             
{{-- 
                   @if ($errors->has('bank_admin_id'))
                     <span class="help-block">
                      <strong>{{ '---'}}</strong>
                      </span>
                  @endif --}}
                  @foreach ($errors->get('bank_admin_id') as $error) 
                          <span class="help-block">
                                 <strong>{{ $error }}</strong>
                          </span>
                @endforeach
                  </div>
            </div>


            <div class="form-group{{ $errors->has('account_user') ? ' has-error' : '' }}">
                {{ Form::label('account_user', 'เลขบัญชีที่โอนเข้ามา') }}
                {{ Form::text('account_user', null, array('class' => 'form-control')) }}

                 @foreach ($errors->get('account_user') as $error) 
                          <span class="help-block">
                                 <strong>{{ $error }}</strong>
                          </span>
                @endforeach

                {{-- @if ($errors->has('account_user'))
               	 	<div class="alert alert-danger"><span>{{ 'ข้อมูลธนาคารไม่ได้ระบุ'}}</span></div>
           		@endif --}}
            </div>

            <div class="form-group{{ $errors->has('amount') ? ' has-error' : '' }}">
                {{ Form::label('amount', 'จำนวนเงินที่โอน') }}
                {{ Form::number('amount', null, array('class' => 'form-control')) }}

                 @foreach ($errors->get('amount') as $error) 
                          <span class="help-block">
                                 <strong>{{ $error }}</strong>
                          </span>
                @endforeach
             {{--    @if ($errors->has('amount'))
               	 	<div class="alert alert-danger"><span>{{ 'จำนวนเงินที่โอนไม่ได้ระบุ'}}</span></div>
           		@endif --}}
            </div>

            <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
                {{ Form::label('image', 'Image') }}
                {{ Form::file('image',array('class' => 'form-control')) }}
                
                  @foreach ($errors->get('image') as $error) 
                          <span class="help-block">
                                 <strong>{{ $error }}</strong>
                          </span>
                @endforeach
          {{--   @if ($errors->has('image'))
                <div class="alert alert-danger"><span>{{ 'รูปสินหลักฐานต้องระบุ'}}</span></div>
            @endif --}}
            </div>

            <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                {{ Form::label('phone', 'เบอร์โทรศัพท์ที่สามารถติดต่อได้') }}
                {{ Form::text('phone', null, array('class' => 'form-control')) }}

                  @foreach ($errors->get('phone') as $error) 
                          <span class="help-block">
                                 <strong>{{ $error }}</strong>
                          </span>
                @endforeach

         {{--    @if ($errors->has('phone'))
                <div class="alert alert-danger"><span>{{'เบอร์ติดต่อไม่ได้ระบุไม่ได้ระบุ'}}</span></div>
            @endif --}}
            </div>

            <div class="form-group">
                {{ Form::label('source', 'การชำระแบบโอน') }}
                {{ Form::radio('source', 'โอน', true) }}
            </div>

             <div class="form-group">
                {{ Form::label('confirm', 'confirm') }}
                {{ Form::radio('confirm', '0', true) }}
            </div>

        	{{ Form::submit('ยืนยืนข้อมูล', array('class' => 'button success')) }}
           	{!! Form::close() !!}

            
             </div>
      </div>
    </div>
  </section>


	


@endsection