@extends('adminlayout.adminlayout')
@section('body')

<style>
    .btn-delete, .btn-edit {
        padding: 8px 16px;
        margin: 0 4px;
        border: none;
        border-radius: 4px;
        font-size: 14px;
        font-weight: 500;
        cursor: pointer;
        transition: all 0.3s ease;
        text-decoration: none;
        display: inline-block;
    }

    .btn-delete {
        background-color: #dc3545;
        color: white;
    }

    .btn-delete:hover {
        background-color: #c82333;
        box-shadow: 0 4px 8px rgba(220, 53, 69, 0.3);
    }

    .btn-edit {
        background-color: #ffc107;
        color: #333;
    }

    .btn-edit:hover {
        background-color: #e0a800;
        box-shadow: 0 4px 8px rgba(255, 193, 7, 0.3);
    }
</style>

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
  <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Bordered table</h4>
                  <p class="card-description">
                    Add class <code>.table-bordered</code>
                  </p>
                  <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>
                            ID
                          </th>
                          <th>
                           Title
                          </th>
                          <th>
                           sub title
                          </th>
                          <th>
                           Description
                          </th>
                          <th>
                            Images
                          </th>
                          <th>
                            Button link
                          </th>
                          <th>
                            link
                          </th>
                          <th>
                            Action
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($banner as $banner)
                        <tr>
                          <td>
                            {{$banner->id}}
                          </td>
                          <td>
                            {{$banner->title}}
                          </td>
                          <td>
                            {{$banner->subtitle}}
                          </td>
                          <td>
                            {{$banner->description}}
                          </td>
                          <td>
                            <img src="{{ asset('storage/' . $banner->img
                            ) }}" alt="Blog Image" class="img-fluid">
                          </td>
                          <td>
                            <td>
                            {{$banner->buttonlink}}
                          </td>
                          <td>
                            {{$banner->link}}
                          </td>
                          <a href="{{ route('banners.view', $blog->id) }}" class="btn btn-primary">View</a>
                          <form action="{{ route('banner.destroy', $banner->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this blog?')">Delete</button>
                          </form>
                          <a href="{{ route('banner.edit', $banner->id) }}" class="btn btn-warning">Edit</a>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>

@endsection