@extends('admin.nav')

@section('content')
    <div class="container">
      <h2 class="mb-3">Category Update: </h2>
        <div class="mb-3 border border-1 p-5 shadow">
            <form action="{{url('admin/category/'.$category->id)}}" method="post">
              @method('PUT')
              @csrf
              <label for="exampleFormControlInput1" class="form-label" >Category Name:</label>
              <input type="text" name="name" class="form-control mb-3" id="exampleFormControlInput1" placeholder="category" value="{{$category->name}}">
      
              <button type="submit" class="btn btn-success float-end">Update  <i class="bi bi-patch-plus-fill"></i></button>
            </form>
            </div>
    </div>
@endsection