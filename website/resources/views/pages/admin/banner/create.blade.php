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
                  <h4 class="card-title">Create banner</h4>
                  <p class="card-description">
                    Basic form layout
                  </p>
                  <form class="forms-sample" action="{{ route('banner.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label for="exampleInputUsername1">Title</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Title" name="title" value="{{old('title')}}"> 
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Description</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Description" name="description" value="{{old('description')}}">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Image</label>
                      <input type="file" class="form-control" id="exampleInputEmail1" placeholder="Image" name="images" enctype="multipart/form-data" value="{{old('images')}}">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Subtitle</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Description" name="description" value="{{old('description')}}">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">buttenlink</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Description" name="description" value="{{old('description')}}">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">link</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Description" name="description" value="{{old('description')}}">
                    </div>
                    
                    
                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                    <button type="button" class="btn btn-light">Cancel</button>
                  </form> 
                </div>
              </div>
            </div>
@endsection