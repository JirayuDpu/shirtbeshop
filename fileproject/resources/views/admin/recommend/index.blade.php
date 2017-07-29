{{-- @extends('admin.layout.mainadmin') --}}
@extends('layout.main')
@section('content')

<div class="container">
		<div class="row">
    @include('admin.layout.manuadmin')

    <div class="col-md-6 col-md-offset-1">
    <div class="navbar">
    <p class="navbar-brand">Recommends : </p>
    <ul class="nav navbar-nav">
    	@if(!empty ($recommends))
    		@forelse($recommends as $recommend)
    		<il>
    			<a href="{{route('recommend.show', $recommend->id) }}">{{ $recommend->recommend_name }} </a>
    		</li>
    		@empty
    		<p>Not data</p>
    		@endforelse
    	@endif

    </ul>

      <a class="btn btn-primary pull-right navbar-right" data-toggle="modal" href="#category">Add Recommends</a>
        <div class="modal fade" id="category"><!-- modal -->
            <div class="modal-dialog">

                {!! Form::open(['route' => 'recommend.store', 'method' => 'post']) !!}

                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Add New</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            {{ Form::label('recommend_name', 'Recommend') }}
                            {{ Form::text('recommend_name', null, array('class' => 'form-control')) }}
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </div><!-- /.modal-content -->

                {!! Form::close() !!}


            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
    </div>
    
       @if(!empty($products))
	        <section>
	            <h3>Products</h3>

	            <table class="table table-hover">
	                <thead>
	                <tr>
	                    <th>Products</th>
	                </tr>
	                </thead>

	                <tbody>
	                @forelse($products as $product)
	                    <tr>
	                        <td>{{$product->pro_name}}</td>
	                    </tr>
	                @empty
	                    <tr><td>NoData</td></tr>

	                @endforelse
	                </tbody>
	            </table>

	        </section>
	    @endif

</div>
</div> 
</div> 

@endsection

