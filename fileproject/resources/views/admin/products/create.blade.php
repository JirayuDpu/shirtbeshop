{{-- @extends('admin.layout.mainadmin') --}}
@extends('layout.main')
@section('content')

<div class="container">
			<div class="row">
    

    @include('admin.layout.manuadmin')
  
    <div class="col-md-6 col-md-offset-1">
  		<h3>เพิ่ม สินค้า</h3>
        {!! Form::open(['route' => 'products.store', 'method' => 'post', 'files' => true]) !!}



        <div class="form-group{{ $errors->has('pro_name') ? ' has-error' : '' }}">

            {{ Form::label('pro_name', 'ชื่อสินค้า') }}
            {{ Form::text('pro_name', null, array('class' => 'form-control')) }} 

             @if ($errors->has('pro_name'))
                <div class="alert alert-danger"><span>{{ 'ชื่อสินค้าไม่ได้ระบุ'}}</span></div>
            @endif
        </div>
         
        <div class="form-group{{ $errors->has('quantity') ? ' has-error' : '' }}">
     
            {{ Form::label('quantity', 'จำนวนสินค้า') }}
            {{ Form::text('quantity', null, array('class' => 'form-control','minlength'=>'1')) }}

            @if ($errors->has('quantity'))
                <div class="alert alert-danger"><span>{{ 'จำนวนสินค่าไม่ได้ระบุ'}}</span></div>
            @endif
         
        </div>

        <div class="form-group{{ $errors->has('cost') ? ' has-error' : '' }}">
            {{ Form::label('cost', 'ต้นทุน') }}
            {{ Form::text('cost', null, array('class' => 'form-control','minlength'=>'1')) }}

            @if ($errors->has('cost'))
                <div class="alert alert-danger"><span>{{ 'จำนวนต้นทุนไม่ได้ระบุ'}}</span></div>
            @endif
        </div>

        <div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
            {{ Form::label('price', 'ราคาขาย') }}
            {{ Form::text('price', null, array('class' => 'form-control','minlength'=>'1')) }}

            @if ($errors->has('price'))
                <div class="alert alert-danger"><span>{{ 'จำนวนราคาขายไม่ได้ระบุ'}}</span></div>
            @endif
        </div>

        <div class="form-group{{ $errors->has('sizes_id') ? ' has-error' : '' }}">
            {{ Form::label('sizes_id', 'ไซส์เสื้อ') }}
            {{ Form::select('sizes_id', $sizes, null, ['class' => 'form-control','placeholder'=>'Select Category']) }}

            @if ($errors->has('sizes_id'))
                <div class="alert alert-danger"><span>{{ 'ไซส์เสื้อไม่ได้ระบุ'}}</span></div>
            @endif
        </div>


        <div class="form-group{{ $errors->has('colors_id') ? ' has-error' : '' }}">
            {{ Form::label('colors_id', 'สีเสื้อ') }}
            {{ Form::select('colors_id', $colors, null, ['class' => 'form-control','placeholder'=>'Select Category']) }}

             @if ($errors->has('colors_id'))
                <div class="alert alert-danger"><span>{{ 'สีเสื้อไม่ได้ระบุ'}}</span></div>
            @endif
        </div>

        <div class="form-group{{ $errors->has('category_id') ? ' has-error' : '' }}">
            {{ Form::label('category_id', 'หมวดหมู่') }}
            {{ Form::select('category_id', $categories, null, ['class' => 'form-control','placeholder'=>'Select Category']) }}

            @if ($errors->has('category_id'))
                <div class="alert alert-danger"><span>{{ 'หมวดหมู่ไม่ได้ระบุ'}}</span></div>
            @endif
        </div>

        <div class="form-group{{ $errors->has('promotion_id') ? ' has-error' : '' }}">
            {{ Form::label('promotion_id', 'ประเภทสินค้า') }}
            {{ Form::select('promotion_id', $promotions, null, ['class' => 'form-control','placeholder'=>'Select Promotion']) }}

            @if ($errors->has('promotion_id'))
                <div class="alert alert-danger"><span>{{ 'โปรโมชั่นไม่ได้ระบุ'}}</span></div>
            @endif
        </div>

        <div class="form-group{{ $errors->has('discount') ? ' has-error' : '' }}">
            {{ Form::label('discount', 'ส่วนลด') }}
            {{ Form::select('discount', ['0'=>'0','5'=>'5','10'=>'10','15'=>'15', '20'=>'20','25'=>'25' ,'30'=>'30','35'=>'35','40'=>'40','45'=>'45','50'=>'50','55'=>'55','60'=>'60','65'=>'65','70'=>'70','75'=>'75'], null, ['class' => 'form-control','placeholder'=>'Select Promotion']) }}
        </div>

        {{-- 0000000000000000000000 --}}
        <div class="form-group{{ $errors->has('recommend_id') ? ' has-error' : '' }}">
            {{ Form::label('recommend_id', 'ประเภทสินค้าแนะนำ') }}
            {{ Form::select('recommend_id', $recommends, null, ['class' => 'form-control','placeholder'=>'Select Promotion']) }}

              @if ($errors->has('recommend_id'))
                <div class="alert alert-danger"><span>{{ 'สินค้าแนะนำไม่ได้ระบุ(หากไม่ใช่สินค้าแนะนำควรเลือกเป็นสินค้าทั่วไป)'}}</span></div>
            @endif
        </div>
        {{-- 0000000000000000000000 --}}

        <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
            {{ Form::label('image', 'รูปสินค้า') }}
            {{ Form::file('image',array('class' => 'form-control')) }}

               @if ($errors->has('image'))
                <div class="alert alert-danger"><span>{{ 'รูปสินค้าไม่ได้ระบุ'}}</span></div>
            @endif
        </div>

        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
            {{ Form::label('description', 'คำอธิบาย') }}
            {{ Form::textarea('description', null, array('class' => 'form-control','minlength'=>'1')) }}

             @if ($errors->has('description'))
                <div class="alert alert-danger"><span>{{ 'คำอธิบายไม่ได้ระบุ'}}</span></div>
            @endif
        </div>

        {{ Form::submit('Create', array('class' => 'btn btn-default')) }}
        {!! Form::close() !!}

    </div>


    </div>
    
    </div>
   

@endsection


    {{--   <div class="form-group">
            {{ Form::label('new', 'New') }}
            {{ Form::select('new', ['1' => 'New', '2' => 'Sale', '3' => 'Null'], null, ['class' => 'form-control','placeholder'=>'Select New']) }}
        </div>
 --}}

       {{--  <div class="form-group">
            {{ Form::label('size_id', 'Size') }}
            {{ Form::select('size_id', $sizes, null, ['class' => 'form-control','placeholder'=>'Select Size']) }}
        </div>


         <div class="form-group">
            {{ Form::label('color_id', 'Color') }}
            {{ Form::select('color_id', $colors, null, ['class' => 'form-control','placeholder'=>'Select Color']) }}
        </div>

        <div class="form-group">
            {{ Form::label('category_id', 'Categories') }}
            {{ Form::select('category_id', $categories, null, ['class' => 'form-control','placeholder'=>'Select Category']) }}
        </div> --}}
