{{-- @extends('admin.layout.mainadmin') --}}
@extends('layout.main')
@section('content')
<section>
    <div class="container">
      <div class="row">

      
        @include('admin.layout.manuadmin')
       
       

          <div class="col-sm-8 padding-right">
           @forelse($products->chunk(4) as $chunk)
                   @foreach($chunk as $product)
          <div class="product-details"><!--product-details-->
            <div class="col-sm-5">
              {{-- <div class="view-product"> --}}
              <div class="productinfo text-center">
                <img src="{{url('images', $product->image)}}"/>
              </div>
            
            </div>
            <div class="col-sm-7">
              <div class="product-information"><!--/product-information-->
                {{-- <img src="images/product-details/new.jpg" class="newarrival" alt="" /> --}}
                <div class="productinfo text-center">
                <h2>{{$product->pro_name}}</h2>
                </div>
                <p>ราคาปกติ : {{$product->price}}</p>
                <p>ลดราคา : {{$product->price-$product->price=$product->price*$product->discount/100}}</p>  
                <p>เปอร์เซ็นการลด : {{$product->discount}} %</p>
                <p>หมวดหมู่สินค้า : {{count($product->category)?$product->category->category_name:"N/A"}}</p>
                <p>ไซส์ : {{count($product->sizes)?$product->sizes->size_name:"N/A"}}</p>
                <p>สี : {{count($product->colors)?$product->colors->color_name:"N/A"}}</p>
                <p>ประเภท : {{count($product->promotion)?$product->promotion->promotions_name:"N/A"}}</p>
                <p>สินค้าแนะนำ : {{count($product->recommend)?$product->recommend->recommend_name  :"N/A"}}</p>
              </div>
               <div class="productinfo text-center">
                   <form action="{{ route('products.destroy', $product->id)}}"  method="POST">
                      {{csrf_field()}}
                      {{method_field('DELETE')}}
                      <input class="btn btn-sm btn-danger" type="submit" value="Delete">
                       <a href="{{ route('products.edit', $product->id) }}" class="btn btn-success">Edit
                        
                      </a>
                  </form>
                </div>
              </div><!--/product-information-->
            </div>
             @endforeach
                @empty
                    <h3>No shirts</h3>
                @endforelse 
                <div class="productinfo text-center">
                {{ $products->links() }}
                </div>
          </div><!--/product-details-->   
          
      
        
      </div>
    </div>
  </section>

@endsection

