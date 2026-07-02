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
        background-color: #f62f43;
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

  <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Category table</h4>
                  <p class="card-description"><a href="{{route('category.create')}}"  class="btn btn-warning">Create</a>
                    
                  </p>
                  <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>
                            ID
                          </th>
                          <th>
                           name
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($category as $category)
                        <tr>
                          <td>
                            {{$category->id}}
                          </td>
                          <td>
                            {{$category->name}}
                          </td>
                          
                          <td>
                          <a href="" class="btn btn-primary">View</a>
                         <a href="{{ route('category.destroy', $category->id) }}" class="btn btn-warning">Delete</a>
                          <a href="{{ route('category.edit', $category->id) }}" class="btn btn-warning">Edit</a>
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