@extends('adminlayout.adminlayout')
@section('body')
@if(session('success'))
  <div class="alert alert-success">
    {{ session('success') }}
  </div>
@endif
@if(session('error'))
  <div class="alert alert-danger">
    {{ session('error') }}
  </div>
@endif
@if ($errors->any())
  <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Create Contact</h4>
                  <p class="card-description">
                    Basic form layout
                  </p>
                  <form class="forms-sample" action="{{ route('contact.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label for="exampleInputUsername1">Address</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" placeholder="address" name="address" value="{{old('address')}}"> 
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">phone_1</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="phone1" name="phone1" value="{{old('phone1')}}">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">phone_2</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="phone2" name="phone2" enctype="multipart/form-data" value="{{old('phone2')}}">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="email" name="email" enctype="multipart/form-data" value="{{old('email')}}">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Map</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="map" name="map" enctype="multipart/form-data" value="{{old('map')}}">
                    </div>
                    
                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                    <button type="button" class="btn btn-light">Cancel</button>
                  </form> 
                </div>
              </div>
            </div>
@endsection