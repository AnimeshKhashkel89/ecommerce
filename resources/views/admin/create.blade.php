@extends('admin.layout.master')

@section('content')
  <!-- partial -->
  <div class="card">
    <div class="card-header">
      Add Product
    </div>
    <div class="card-body">
      @include('admin.layout.messages')
      <form class="forms-sample" enctype="multipart/form-data" method="post" action="{!! route('admin.product.store') !!}">
        {{ csrf_field() }}
        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" class="form-control" id="title" name="title" placeholder="Enter title of the product">
        </div>
        <div class="form-group">
          <label for="description">Description</label>
          <textarea name="description" id="description" rows="8" cols="80" class="form-control"  placeholder="Enter description of the product"></textarea>
        </div>
        <div class="form-group">
          <label for="quantity">Quantity</label>
          <input type="number" class="form-control" id="quantity" name="quantity" placeholder="Enter quantity of the product">
        </div>
        <div class="form-group">
          <label for="price">Price</label>
          <input type="number" class="form-control" id="price" name="price" placeholder="Enter price of the product">
        </div>
        <div class="form-group">
          <label>File upload</label>
          <div class="row">
            <div class="col-md-4">
              <input type="file" name="product_image[]" class="form-control">
            </div>
            <div class="col-md-4">
              <input type="file" name="product_image[]" class="form-control">
            </div>
            <div class="col-md-4">
              <input type="file" name="product_image[]" class="form-control">
            </div>
            <div class="col-md-4">
              <input type="file" name="product_image[]" class="form-control">
            </div>
            <div class="col-md-4">
              <input type="file" name="product_image[]" class="form-control">
            </div>


          </div>


        </div>
        <div class="form-group">
          <input type="submit" name="submit" value="Add Product" class="btn btn-primary">
        </div>
      </form>
    </div>
  </div>
  <!-- main-panel ends -->
@endsection
