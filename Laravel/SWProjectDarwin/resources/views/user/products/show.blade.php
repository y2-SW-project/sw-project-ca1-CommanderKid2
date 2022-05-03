@extends('layouts.app')

@section ('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="card">
                <div class="card-header">
                    Product: {{ $product->name_drone }}
                </div>
                <div class="card-body">
                    <table id="table-products" class="table table-hover">
                    <tbody>
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
                        <td>Receiver</td>
                        <td>{{ $product->receiver }}</td>
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

