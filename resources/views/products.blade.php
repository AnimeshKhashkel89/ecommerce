@extends('layout.master')
@section('content')
<div class="col-md-offset-1 col-md-8">

	<div class="widget">
		<h2>All Products</h2>
		<div class="row">

			@foreach ($products as $product)



			<div class="col-md-3 mt-3 text-center">
				<div class="card " >
				  @php
				  	$i=0;
				   @endphp
				  @foreach ($product->images as $image)


				  	@if($i==0)
				  		<img class="card-img-top sh" src="{{ asset('images/products/'.$image->image )}}" alt="Card image">
				  	@endif
				  	@php
				  		$i++;
				  	@endphp

				  @endforeach


				  <div class="card-body">
				    <h4 class="card-title">{{$product->title}}</h4>
				    <p class="card-text">Price - {{$product->price}} Tk</p>
				    <a href="#" class="btn btn-outline-primary">Add to cart</a>
				  </div>
				</div>
			</div>

			@endforeach
		</div>
	</div>

</div>



@endsection
