@extends('layouts.app')

@section ('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header bg-warning">
            Products
            <a href="{{ route('admin.products.create') }}" class="btn btn-primary float-right">Add</a>
          </div>
          <div class="card-body">
            @if (count($products)=== 0)
              <p>There are no Products!</p>
            @else
            <table id="table-products" class="table table-hover">
                <thead>
                  <th>Name Drone</th>
                  <th>Battery</th>
                  <th>Motors</th>
                  <th>The Flight Controller</th>
                  <th>Receiver</th>
                  <th></th>
                </thead>
                <tbody>
                  @foreach ($products as $product)
                    <tr data-id="{{ $product->id }}">
                      <td>{{ $product->name_drone }}</td>
                      <td>{{ $product->battery }}</td>
                      <td>{{ $product->motors }}</td>
                      <td>{{ $product->the_flight_controller }}</td>
                      <td>{{ $product->receiver }}</td>

                      <td>
                        <a href="{{ route('admin.products.show', $product->id) }}" class="btn btn-default">View</a>
                        <a href="{{ route('admin.products.edit', $product->id) }}" class="btn btn-warning">Edit</a>
                        <form style="display:inline-block" method="POST" action="{{ route('admin.products.destroy', $product->id) }}">
                          <input type="hidden" name="_method" value="DELETE">
                          <input type="hidden" name="_token"  value="{{ csrf_token() }}">
                          <button type="submit" class="form-cotrol btn btn-danger">Delete</a>
                        </form>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            @endif
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
