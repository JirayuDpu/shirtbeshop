{{-- @extends('admin.layout.mainadmin') --}}
@extends('layout.main')
@section('content')

<div class="container">
		<div class="row">
    @include('admin.layout.manuadmin')

 {{--  {{ route('products.create') }} --}}
    
    	<h3>Cart Item</h3>
				
			<div class="col-sm-8 padding-right">
		        <table class="table table-hover">
		            <thead>
		            <tr>
		                <th>ชื่อโปรโมชั่น</th>
		                <th>คำอธิบาย</th>
		                <th>ส่วนลด</th>
		                <th>Action</th>
		            </tr>
		            </thead>
		            <tbody>
		            @foreach($promotions as $promotion)
		                <tr>   
		                  <td>{{$promotion->p_name}}</td>
						  <td>{{$promotion->p_description}}</td>
						  <td>{{$promotion->p_discount}} %</td>
						  <td>  <form action="#{{-- {{route('product.destroy', $product->id)}} --}}"  method="POST">
                    {{csrf_field()}}
                    {{method_field('DELETE')}}
                    <input class="btn btn-sm btn-danger" type="submit" value="Delete">

                    <a href="#" class="btn btn-success">Edit
                
                    </a>
                    
                </form></td>
		                </tr>

		                 @endforeach
		                
		            </tbody>

		        </table>
		       
            </div><!-- /.modal-dialog -->
           {{--   <a href="{{ route('promotion_new.create') }}" class="btn btn-success">CreatePromotion --}}

    </div>
      

</div>
</div> 
</div> 

@endsection

