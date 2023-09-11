@extends('admin.nav')

@section('content')
    <div class="container">
        <h2 class="mb-3">News Entry: </h2>
        <div class="mb-3 border border-1 p-5 shadow">
            <form action="/admin/category" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" name="title" class="form-control" id="title" placeholder="Never ever Let You Go">
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Content</label>
                    <textarea class="form-control" name="content" id="exampleFormControlTextarea1" rows="5"></textarea>
                  </div>
                  <div class="mb-3">
                    <label for="formFile" class="form-label">Image: </label>
                    <input class="form-control" name="image" type="file" id="formFile">
                  </div>
                  <div class="mb-3">
                    <select class="form-select" aria-label="Default select example">
                      <option selected disabled>Open this select menu</option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                    </select>
                  </div>
              <button type="submit" class="btn btn-primary float-end">Update  <i class="bi bi-patch-plus-fill"></i></button>
            </form>
        </div>
    </div>
@endsection