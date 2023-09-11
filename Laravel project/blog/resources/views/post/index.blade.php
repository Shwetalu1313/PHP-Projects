<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Index page</title>

    bootstrap css 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    icon 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

</head>

<body> -->
    @extends('layouts.app')
    @section('content')
    <h3 style="text-align: center;">Hello my fellow friends, This is my index page.</h3>
    <h5 style="text-align: center;">Here is my gift 💗 for you</h5>

    <div class="container pt-5">

        <div class="row">
            <div class="col-2"></div>
            <div class="col-8 table-responsive">
                @if(Session('successAlert'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>{{ Session::get('successAlert') }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                @if(Session('deleteAlert'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>{{ Session::get('deleteAlert') }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                @if(Session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{ Session::get('success') }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                <a href="{{url('posts/create')}}"><button class="btn btn-success btn-sm mb-3">+ ADD NEW</button></a>
                {{$data->links()}}
                <table class="table table-hover table-bordered">
                    <thead class="text-center">
                        <tr class="table-info">
                            <th scope="col" class="w-10">ID</th>
                            <th scope="col" class="w-25">Title</th>
                            <th scope="col" class="text-truncate" style="max-width: 150px;">Content</th>
                            <th scope="col" class="w-10">Action</th>
                        </tr>
                    </thead>
                    <tbody class="">
                        @foreach($data as $posts)
                        <tr>
                            <th scope="text-end">{{$posts->id}}</th>
                            <td class="text-center">{{$posts->title}}</td>
                            <td class="text-truncate" style="max-width: 150px;">{{$posts->content}}</td>
                            <td class="text-center">
                                <form action="{{url('posts/'.$posts->id)}}" method="post">
                                    <a href="{{url('posts/'.$posts->id.'/edit')}}">
                                        <button type="button" class=" btn btn-primary btn-sm"><i class="bi bi-pencil"></i></button>
                                    </a>
                                    @csrf
                                    @method('DELETE')
                                    <a href="">
                                        <button type="submit" class=" btn btn-danger btn-sm"><i class="bi bi-trash3-fill" onclick="return confirm('Do you really want to delete it?')"></i></button>
                                    </a>
                                </form>

                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                
            </div>
            
            <div class="col-2"></div>
        </div>
    </div>
    @endsection

    <!-- bootstrap js -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html> -->