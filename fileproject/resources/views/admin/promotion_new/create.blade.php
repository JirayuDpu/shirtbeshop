{{-- @extends('admin.layout.mainadmin') --}}
@extends('layout.main')
@section('content')

<div class="container">
			<div class="row">
    

    @include('admin.layout.manuadmin')
  
    <div class="col-md-6 col-md-offset-1">
  		<h3>เพิ่ม สินค้า</h3>
        {!! Form::open(['route' => 'promotion_new.store', 'method' => 'post', 'files' => true]) !!}


        <div class="form-group{{ $errors->has('p_name') ? ' has-error' : '' }}">

            {{ Form::label('p_name', 'ชื่อโปรโมชั่น') }}
            {{ Form::text('p_name', null, array('class' => 'form-control')) }} 

             @if ($errors->has('p_name'))
                <div class="alert alert-danger"><span>{{'ชื่อโปรโมชั่นไม่ได้ระบุ'}}</span></div>
            @endif
        </div>

        <div class="form-group{{ $errors->has('p_description	') ? ' has-error' : '' }}">

            {{ Form::label('p_description', 'ชื่อโปรโมชั่น') }}
            {{ Form::text('p_description', null, array('class' => 'form-control')) }} 

             @if ($errors->has('p_description'))
                <div class="alert alert-danger"><span>{{'ชื่อโปรโมชั่นไม่ได้ระบุ'}}</span></div>
            @endif
        </div>

          <div class="form-group{{ $errors->has('p_discount	') ? ' has-error' : '' }}">

            {{ Form::label('p_discount', 'ราคาส่วนลด') }}
            {{ Form::text('p_discount', null, array('class' => 'form-control')) }} 

            @if ($errors->has('p_discount'))
                <div class="alert alert-danger"><span>{{'ส่วนลดไม่ได้ระบุ'}}</span></div>
            @endif
        </div>

        {{ Form::submit('Create', array('class' => 'btn btn-default')) }}
        {!! Form::close() !!}

    </div>


    </div>
    
    </div>
   

@endsection


