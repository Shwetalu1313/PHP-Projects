@extends('admin.nav')

@section('content')
<div class="container ">
    <h2 class="mb-3">Category Entry: </h2>
    <div class="mb-3 border border-1 p-5 shadow">
      <form action="/admin/category" method="post">
        @csrf
        <label for="exampleFormControlInput1" class="form-label" >Category Name:</label>
        <input type="text" name="name" class="form-control mb-3 @error('name') is-invalid @enderror" id="exampleFormControlInput1" placeholder="category">
        @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <button type="submit" class="btn btn-primary float-end">ADD  <i class="bi bi-patch-plus-fill"></i></button>
      </form>
      </div>

    <h2>Category Display</h2>
            @if (Session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong><i class="bi bi-check-circle-fill"></i> {{Session('success')}}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if (Session('successUpdate'))
                <div class="alert alert-primary alert-dismissible fade show" role="alert">
                    <strong><i class="bi bi-check-circle-fill"></i> {{Session('successUpdate')}}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if (Session('deletesuccess'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong><i class="bi bi-check-circle-fill"></i> {!!Session('deletesuccess')!!}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            {{$categories->links()}}
            <table class="table table-bordered table-responsive-md table-hover border-primary">
              <thead class="table-secondary">
                  <tr class="text-center">
                      <th>ID</th>
                      <th>Name</th>
                      <th>Action</th>
                  </tr>
              </thead>
              <tbody class="table-group-divider border-primary">
                  @foreach ($categories as $category)
                  <tr>
                      <td>{{$category->id}}</td>
                      <td>{{$category->name}}</td>
                      <td class="text-center">
                         <form action="{{url('admin/category/'.$category->id)}}" method="POST">
                            @method('DELETE')
                              <a 
                                  href="{{url('admin/category/'.$category->id.'/edit')}}" 
                                  class="btn btn-outline-success"
                              ><i class="bi bi-pen"></i> Edit</a>
                              @csrf
                              <input type="hidden" name="_method" value="DELETE">
                              <input type="hidden" name="id" value="{{$category->id}}">
                              <button type="submit" class="btn btn-danger" onclick="return confirm('Are You Sure 🤨')">
                                  <i class="bi bi-trash3-fill"></i> Delete
                              </button>
                          </form>
                      </td>
                  </tr>
                  @endforeach
                  
              </tbody>
          </table>

</div>

@endsection