{{-- @extends('admin.layout.mainadmin') --}}
@extends('layout.main')
@section('content')
<section>
    <div class="container">
      <div class="row">

{{-- 	{{$patments}}    --}}   
        @include('admin.layout.manuadmin')

         <hr>
    <div class="small-10 columns">
        <h3 class="text-center">Slip</h3>

        <ul>


            <div class="small-30 columns">
                <li>
                    <h4 class="text-center">User Name : {{$image_payments->user_name}}</h4>
                    <h4 class="text-center">User Name : {{$image_payments->user_id}}</h4>
                    @if($image_payments->image == Null)
                        <h5 class="text-center" >No Image</h5>
                    @else
                        <img src="{{url('payment', $image_payments->image)}}"
                             alt="Paris" width="600" height="400"/>

                    @endif

                    <form action="{{url('admin/payment/pending')}}" method="get">
                        {{csrf_field()}}
                        <input class="button accordion-content" type="submit" value="Back">
                    </form>

                </li>

            </div>
        </ul>
    </div>
      </div>
    </div>
  </section>

@endsection

