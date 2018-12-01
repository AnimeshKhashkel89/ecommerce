@extends('admin.layout.master')

@section('content')
  <!-- partial -->
  <div class="container-fluid">

  <div class="card">
    <div class="card-header">
      All Products
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>#</th>
              <th>Title</th>
              <th>description</th>
              <th>Quantity</th>
              <th>Price</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @php
              $i=0;
            @endphp
            @foreach ($products as $product)
            <tr>
              <td class="py-1">
                <img src="../../images/faces-clipart/pic-1.png" alt="image" />
              </td>
              {{-- <td>{{ ++$i }}</td> --}}
              <td style="max-width:2px">{{ $product->title }}</td>
              <td style="max-width:200px">{{ $product->description }}</td>
              <td style="max-width:200px">{{ $product->quantity }}</td>
              <td>{{ $product->Price }}</td>
              <td></td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>

</div>
  <!-- main-panel ends -->
@endsection
