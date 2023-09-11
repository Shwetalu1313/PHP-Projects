@extends('admin.nav')

@section('content')
    <div class="container">
        <h2 class="mb-3">News Entry: </h2>
        <div class="mb-3 border border-1 p-5 shadow">
          <form action="{{ url('admin/news') }}" method="post" enctype="multipart/form-data">
              @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" name="title" class="form-control @error('name') is-invalid @enderror" id="title" placeholder="Never ever Let You Go" required>
                    @error('title')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
                  <div class="mb-3">
                    <label for="content" class="form-label">Content</label>
                    <textarea class="form-control" name="content  @error('name') is-invalid @enderror" id="content" rows="5" required></textarea>
                    @error('content')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
                  <div class="mb-3">
                    <label for="formFile" class="form-label">Image: </label>
                    <input class="form-control @error('name') is-invalid @enderror" name="image" type="file" id="formFile" required>
                    @error('content')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
                  <div class="mb-3">
                    <select name="category_id" class="form-select" aria-label="Default select example" required>
                      <option  disabled>Open this select menu</option>
                      @foreach ($categories as $category)
                          <option value="{{ $category->id }}">{{ $category->name }}</option>
                      @endforeach
                    </select>
                  
                  </div>
              <button type="submit" class="btn btn-primary float-end">Update  <i class="bi bi-patch-plus-fill"></i></button>
            </form>
        </div>
    </div>
@endsection