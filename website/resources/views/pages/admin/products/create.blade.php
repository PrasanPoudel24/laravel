

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
                  <h4 class="card-title">Create Products</h4>
                  <p class="card-description">
                    Basic form layout
                  </p>
                  <form class="forms-sample" action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <select name="category_id" id="">
                        <option value="">Choose Category</option>
                    @foreach($category as $c)
                    <option value="{{$c['id']}}">{{$c['name']}}</option>
                    

                    @endforeach</select>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Name</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="name" name="name" value="{{old('name')}}">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Image</label>
                      <input type="file" class="form-control" id="exampleInputEmail1" placeholder="image" name="image" enctype="multipart/form-data" value="{{old('image')}}">
                    </div>
                    
                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                    <button type="button" class="btn btn-light">Cancel</button>
                  </form> 
                </div>
              </div>
            </div>
@endsection