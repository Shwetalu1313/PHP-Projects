@extends('admin.nav')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h5 class="mb-3"><strong>Edit User</strong></h5>
                <form action="{{url('/admin/'.$user->id.'/update')}}" method="post" class="border border-1 border-bottom-0 p-3">
                    @csrf
                    <div class="form-floating mb-3 border border-3 rounded-3">
                        <input 
                            type="text" 
                            class="form-control" 
                            id="name" 
                            name="name"
                            placeholder="name" 
                            value="{{$user->name}}">

                        <label for="name">Name</label>
                    </div>
                    
                    <div class="form-floating mb-3 border border-3 rounded-3">
                        <input 
                            type="email"
                            class="form-control" 
                            id="email" 
                            name="email"
                            placeholder="Password" 
                            value="{{$user->email}}">
                        <label for="email">Email</label>
                    </div>

                    <select 
                        class="form-select mb-3" 
                        aria-label="Default select example"
                        name="status">
                        <option disabled>Open this select menu</option>
                        <option value="admin" @if ($user->status == 'admin') selected @endif>Admin</option>
                        <option value="user"  @if ($user->status == 'user') selected @endif>User</option>
                      </select>
                    <button class="btn btn-lg btn-info float-end" type="submit"><i class="bi bi-pencil-square"></i> Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection