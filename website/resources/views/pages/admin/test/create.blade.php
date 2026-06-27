@extends('adminlayout.adminlayout')
@section('body')
<div>
    <form action="{{ route('test.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
    <h1>Name:</h1>
    <input type="text" name="name" placeholder="name">
    <h1>Description:</h1>
    <input type="text" name="desc" placeholder="Description">
    <div class="form-group">
    <label for="exampleInputEmail1">Image</label>
    <input type="file" class="form-control" id="exampleInputEmail1" placeholder="Image" name="images" enctype="multipart/form-data" value="{{old('images')}}">
    </div>
    <button type="submit" class="btn btn-primary me-2">Submit</button>
    <button type="button" class="btn btn-light">Cancel</button>
    </form>
</div>


@endsection