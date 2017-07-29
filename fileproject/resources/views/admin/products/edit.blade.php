{{-- @extends('admin.layout.mainadmin') --}}
@extends('layout.main')
@section('content')

<div class="container">
			<div class="row">
    <h3>Edit Product</h3>

    @include('admin.layout.manuadmin')
  
    <div class="col-md-6 col-md-offset-1">
  		<h3>Add Pruduct</h3>

        {!! Form::model($product, ['route' => ['products.update', $product->id] ,'method' => 'patch', 'files' => true]) !!}

        <div class="form-group">
            {{ Form::label('pro_name', 'ชื่อสินค้า') }}
            {{ Form::text('pro_name', null, array('class' => 'form-control','required'=>'','minlength'=>'1')) }}
        </div>

        <div class="form-group">
            {{ Form::label('quantity', 'จำนวนสินค้า') }}
            {{ Form::text('quantity', null, array('class' => 'form-control')) }}
        </div>

        <div class="form-group">
            {{ Form::label('cost', 'ต้นทุน') }}
            {{ Form::text('cost', null, array('class' => 'form-control')) }}
        </div>

        <div class="form-group">
            {{ Form::label('price', 'ราคา') }}
            {{ Form::text('price', null, array('class' => 'form-control')) }}
        </div>

         <div class="form-group">
            {{ Form::label('sizes_id', 'ไซส์เสื้อ') }}
            {{ Form::select('sizes_id', $sizes, null, ['class' => 'form-control','placeholder'=>'Select Category']) }}
        </div>


         <div class="form-group">
            {{ Form::label('colors_id', 'สีเสื้อ') }}
            {{ Form::select('colors_id', $colors, null, ['class' => 'form-control','placeholder'=>'Select Category']) }}
        </div>

        <div class="form-group">
            {{ Form::label('category_id', 'หมวดหมู่') }}
            {{ Form::select('category_id', $categories, null, ['class' => 'form-control','placeholder'=>'Select Category']) }}
        </div>

          <div class="form-group">
            {{ Form::label('promotion_id', 'ประเภทสินค้า') }}
            {{ Form::select('promotion_id', $promotions, null, ['class' => 'form-control','placeholder'=>'Select Promotion']) }}
        </div>

         <div class="form-group">
            {{ Form::label('discount', 'โปรโมชั่นส่วนลด') }}
            {{ Form::select('discount', ['0'=>'0','10'=>'10' , '20'=>'20', '30'=>'30' ,  '40'=>'40','50'=>'50'], null, ['class' => 'form-control','placeholder'=>'Select Promotion']) }}
        </div>

        <div class="form-group">
            {{ Form::label('recommend_id', 'สินค้าแนะนำ') }}
            {{ Form::select('recommend_id', $recommends, null, ['class' => 'form-control',
            'placeholder'=>'Select Promotion']) }}
        </div>



        <div class="form-group">
            {{ Form::label('description', 'Description') }}
            {{ Form::textarea('description', null, array('class' => 'form-control')) }}
        </div>


        {{ Form::submit('Create', array('class' => 'btn btn-default')) }}
        {!! Form::close() !!}

    </div>


    </div>
    </div>
   

@endsection
