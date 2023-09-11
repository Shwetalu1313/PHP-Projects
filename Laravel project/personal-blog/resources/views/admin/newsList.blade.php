@extends('admin.nav')

@section('content')
    <div class="container">
        <h2>News Display</h2>
            @if (Session('successCreate'))
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
            <a href="{{url('admin/news/create')}}" class="btn btn-primary float-end mb-3">ADD <i class="bi bi-patch-plus-fill"></i></a>
            {{$news->links()}}
            <table class="table table-bordered table-responsive-md table-hover border-primary">
              <thead class="table-secondary">
                  <tr class="text-center">
                      <th>ID</th>
                      <th>Title</th>
                      <th>Content</th>
                      <th>Image</th>
                      <th>Action</th>
                  </tr>
              </thead>
              <tbody class="table-group-divider border-primary">
                  @foreach ($news as $new)
                  <tr>
                      <td>{{$new->id}}</td>
                      <td>{{$new->title}}</td>
                      <td>{{$new->content}}</td>
                      <td>{{$new->image}}</td>
                      <td class="text-center">
                         <form action="{{url('admin/new/'.$new->id)}}" method="POST">
                            @method('DELETE')
                              <a 
                                  href="{{url('admin/new/'.$new->id.'/edit')}}" 
                                  class="btn btn-outline-success"
                              ><i class="bi bi-pen"></i> Edit</a>
                              @csrf
                              <input type="hidden" name="_method" value="DELETE">
                              <input type="hidden" name="id" value="{{$new->id}}">
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