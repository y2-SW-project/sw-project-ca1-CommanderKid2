@extends('layouts.app')

@section ('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="card">
                <div class="card-header bg-warning">
                    Product: {{ $products->name_drone }}
                </div>
                <div class="card-body">
                    <table id="table-products" class="table table-hover">
                    <tbody>
                    <tr>
                        <td>Name Drone</td>
                        <td>{{ $products->name_drone }}</td>
                    </tr>
                    <tr>
                        <td>Battery</td>
                        <td>{{ $products->battery }}</td>
                    </tr>
                    <tr>
                        <td>Motors</td>
                        <td>{{ $products->motors }}</td>
                    </tr>
                    <tr>
                        <td>The Flight Controller</td>
                        <td>{{ $products->the_flight_controller }}</td>
                    </tr>
                    <tr>
                        <td>Receiver</td>
                        <td>{{ $products->receiver }}</td>
                    </tr>
                    <tr>
                        <td>Product Image</td>
                        <td>{{ $products->product_image }}</td>
                    </tr>
                </tbody>
            </table>

                <a href="{{ route('user.products.index') }}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

