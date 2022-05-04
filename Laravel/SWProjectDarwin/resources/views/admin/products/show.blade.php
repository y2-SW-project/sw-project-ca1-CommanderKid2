@extends('layouts.app')

@section ('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2 ">
        <div class="card">
          <div class="card-header bg-warning">
            Product: {{ $product->title }}
          </div>
          <div class="card-body">
              <table id="table-products" class="table table-hover">
                <tbody>
                  <tr>
                      <td rowspan="8"><img src="{{ asset('/storage/imgs/' . $product->product_image) }}" width="150"/></td>
                  </tr>
                  <tr>
                    <td>Name Drone</td>
                    <td>{{ $product->name_drone }}</td>
                  </tr>
                  <tr>
                    <td>Battery</td>
                    <td>{{ $product->battery }}</td>
                  </tr>
                  <tr>
                    <td>Motors</td>
                    <td>{{ $product->motors }}</td>
                  </tr>
                  <tr>
                    <td>The Flight Controller</td>
                    <td>{{ $product->the_flight_controller }}</td>
                  </tr>
                  <tr>
                    <td>End Date</td>
                    <td>{{ $product->end_date }}</td>
                  </tr>
                  <tr>
                    <td>receiver</td>
                    <td>{{ $product->receiver }}</td>
                  </tr>

                </tbody>
              </table>

              <a href="{{ route('admin.products.index') }}" class="btn btn-default">Back</a>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
