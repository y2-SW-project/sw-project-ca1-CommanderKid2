@extends('layouts.app')

@section ('content')
  <div class="container ">
        <div class="card ">
    <div class="row ">
      <div class="col-md-8 col-md-offset-2 ">
        <div class="card ">
          <div class="card-header bg-warning">
            Add new Product
          </div>
          <div class="card-body">
          <!-- this block is ran if the validation code in the controller fails
          this code looks after displaying the correct error message to the user -->
            @if ($errors->any())
              <div class="alert alert-danger">
                <ul>
                  @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
                </ul>
              </div>
            @endif
            <form method="POST" action="{{ route('admin.products.store')  }}" enctype="multipart/form-data">
              <input type="hidden" name="_token" value="{{  csrf_token()  }}">
              <div class="form-group">
                <label for="name_drone">Name Drone</label>
                <input type="text" class="form-control" id="name_drone" name="name_drone" value="{{ old('name_drone') }}" />
              </div>
              <div class="form-group">
                <label for="battery">Battery</label>
                <input type="text" class="form-control" id="battery" name="battery" value="{{ old('battery') }}" />
              </div>
              <div class="form-group">
                <label for="motors">Motors</label>
                <input type="text" class="form-control" id="motors" name="motors" value="{{ old('motors') }}" />
              </div>
              <div class="form-group">
                <label for="the_flight_controller">The Flight Controller</label>
                <input type="text" class="form-control" id="the_flight_controller" name="the_flight_controller" value="{{ old('the_flight_controller') }}" />
              </div>
              <div class="form-group">
                <label for="receiver">Receiver</label>
                <input type="text" class="form-control" id="receiver" name="receiver" value="{{ old('receiver') }}" />
              </div>

            <div class="form-group">
                <label for="image_location"> Product Image </label>
                <input type="file" class="form-control" id='image_location' name="image_location" />
            </div>

              <a href="{{ route('admin.products.index') }}" class="btn btn-outline">Cancel</a>
              <button type="submit" class="btn btn-primary float-right">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
