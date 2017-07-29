@extends('layout.main')

@section('content')

<section>
		<div class="container">
			<div class="row">
				@include('layout.manu')
		

			<h3>รายการในตะกร้าสินค้า</h3>


			
				
			<div class="col-sm-8 padding-right">
		        <table class="table table-hover">
		            <thead>
		            <tr>
		                <th>สินค้า</th>
		                <th>ราคา</th>
		                <th>จำนวน</th>
		                <th>ไซส์</th>
		                <th>สี</th>
		                <th>Action</th>
		            </tr>
		            </thead>
		            <tbody>
		         {{--   {{$products}} --}}

		            @foreach($cartItems as $cartItem)
		                <tr>   
		                    <td>{{$cartItem->name}}</td>
		                    <td>{{$cartItem->price*$cartItem->qty}}</td>
		                   	{{-- <td>{{Cart::subtotal()}}</td> --}}
		                     <td width="20px">
		                    	{!! Form::open(['route' => ['cart.update',$cartItem->rowId ],'method'=> 'PUT']) !!}
		                    {{--  @foreach($products as $product) --}}

		                    	<input name="qty" type="number" value="{{$cartItem->qty}}" min="0" 
		                    	max="{{$cartItem->options->has('quantity')?$cartItem->options->quantity: ''}}" >
		                  {{--    @endforeach --}}
		                    	{{-- <input type="submit" class="btn vtn-sm btn-default"  value="Ok">
		                    	 {!! Form::close() !!} --}}
		                    </td>

		                    <td>{{$cartItem->options->has('sizes')?$cartItem->options->sizes: ''}}</td>
		                    <td>{{$cartItem->options->has('colors')?$cartItem->options->colors: ''}}</td>

		                    {{-- <td>{{$cartItem->options->has('quantity')?$cartItem->options->quantity: ''}}</td> --}}

		                  

		                    <td>
		                        <input type="submit" class="btn btn-sm btn-success" value="Ok">
		                        {!! Form::close() !!}

		                        <form action="{{route('cart.destroy', $cartItem->rowId)}}" method="post">
		                            {{csrf_field()}}
		                            {{method_field('DELETE')}}
		                            <input  class="btn btn-sm btn-danger" type="submit" value="Delete">
		                        </form>
		                    </td>

	
		                </tr>

		                 @endforeach

		           
		                {{--  <h4>สินค้าทั้งหมด: {{Cart::count()}}</h4><br>
		                 <h4> ราคารวม: {{Cart::total()}}</h4> --}}
		                 <tr>
			                {{--<td>Grand Total: {{Cart::total()}}</td>--}}
			                <td></td>
			                <td>สินค้าทั้งหมด: {{Cart::count()}}</td>
			                <td>ราคารวม: {{Cart::total()}}<br></td> 
			                <td></td>
			                <td></td>
			                <td></td> 
			                {{--<td>{{Cart::tax()}}</td>--}}
		
			            </tr>
		            </tbody>

       		 <?php
		          $sum =0;
					foreach($cartItems as $cartItem) 
					{
					    $sum += $cartItem->price*$cartItem->qty;
					}
					//echo $sum;
		        ?>

		        </table>
		     
		        <a href="{{route('checkout.toorders')}}" class="btn btn-primary">สั่งซื้อด้วยระบบโอนเงิน</a>
		        <br><br>
		        
		         {{-- checkoutomise --}}
		        <body>
					<form name="checkoutOmise" method="post" action="{{route('checkoutomise')}}">
					{{csrf_field()}}
				    <input type="hidden" name="description" value="" />
				    <script type="text/javascript" src="https://cdn.omise.co/card.js"
				      data-key="pkey_test_58axzehd9fhf9gi4w4j"
				      data-image="http://www.1000za.com/wp-content/uploads/2016/12/sadasd.png"
				      data-frame-label="ใส่เงินมาเลยไอน้อง   5454545454545454"
				      data-button-label="ชำระเงินผ่านบัตรเดบิต"
				      data-submit-label="Submit"
				      data-amount={{-- {{Cart::total()*100}} --}} <?php echo $sum*100; ?>
				      data-currency="thb">
				    </script>
				    <!--the script will render <input type="hidden" name="omiseToken"> for you automatically-->
					</form>
				</body> 
				<hr>
{{-- 
				<div class="col-sm-6">
					<h3>โอนผ่านธนาคาร</h3>
					<form method="get" action="omisetobank">
						<input type="radio" name="omisetobank" value="internet_banking_bay" checked>ธนาคารกรุงศรีอยุธยา <br>
						<input type="radio" name="omisetobank" value="internet_banking_bbl">ธนาคารกรุงเทพ<br>
						<input type="radio" name="omisetobank" value="internet_banking_ktb ">ธนาคารกรุงไทย <br>
						<input type="radio" name="omisetobank" value="internet_banking_scb ">ธนาคารไทยพาณิชย์ <br>
						<button type="submit" class="btn btn-primary">Submit</button>
					</form>
				</div> --}}

       		</div>
	</section>
	
		<head>
			<script src=" https://cdn.omise.co/card.js." chaeset="utf-8"></script>
		</head>



@endsection