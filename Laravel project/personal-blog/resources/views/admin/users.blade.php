@extends('admin.nav')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h5 class="mb-3"><strong>Users</strong></h5>
            @if (Session('successAlert'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong><i class="bi bi-check-circle-fill"></i> {{Session('successAlert')}}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            @endif

            @if (Session('successDeleteAlert'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong><i class="bi bi-check-circle-fill"></i> {{Session('successDeleteAlert')}}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            @endif
            <table class="table table-bordered table-responsive-md table-hover border-primary">
                <thead class="table-secondary">
                    <tr class="text-center">
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider border-primary">
                    @foreach ($users as $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->status}}</td>
                        <td class="text-center">
                            <form action="{{url('/admin/'.$user->id.'/delete')}}" method="POST">
                                <a 
                                    href="{{'/admin/'.$user->id.'/edit_user'}}" 
                                    class="btn btn-outline-success"
                                ><i class="bi bi-pen"></i> Edit</a>
                                @csrf
                                <input type="hidden" name="_method" value="DELETE">
                                <input type="hidden" name="id" value="{{$user->id}}">
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
    </div>
</div>
@endsection
        