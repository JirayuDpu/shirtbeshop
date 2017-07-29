{{-- @extends('admin.layout.mainadmin') --}}
@extends('layout.main')
@section('content')
<section>
    <div class="container">
      <div class="row">

      
        @include('admin.layout.manuadmin')

        <div class="col-sm-9 padding-right">

    	<table class="table table-bordered">

    	{{-- {{$sum}} --}}

			  <thead>
			    <tr>
			      <th>รหัส</th>
			      <th>ชื่อ</th>
			      <th>address</th>
			      <th>zip</th>
			      <th>amount</th>	
			      <th>phone</th>
			      <th>updated_at</th>
			    </tr>
			  </thead>
			  @foreach($omises as $omise)
			  <tbody>
			    <tr>
			      <th scope="row">{{$omise->id}}</th>
			      <td>{{$omise->user->name}}</td>
			      <td>{{$omise->address}}</td>
			      <td>{{$omise->zip}}</td>
			      <td>{{$omise->amount}}</td>
			      <td>{{$omise->phone}}</td>
			      <td>{{$omise->updated_at}}</td>
			    </tr>
			  </tbody>
			  @endforeach	
			</table>

		
        <h5>ราคารวม: {{$sum}} บาท </h5>
        <h5>หัก4%Omise: {{$sum - $sum*4/100}} บาท </h5>
        <hr>
     
	

	

         
        </div>
      </div>
    </div>
  </section>

@endsection

