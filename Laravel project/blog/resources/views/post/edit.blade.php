<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create page</title>
    <!-- bootstrap css -->

</head>

<body>
    <h3 style="text-align: center; margin-top: 5rem;">Hello my fellow friends, This is my Update page.</h3>
    <h5 style="text-align: center;">Here is my gift 💥⭐ for you</h5>

    <div class="container">
        <form action="{{ 'posts.edit',$data->id }}" method="post">
            <!-- url('posts/'.$data->id) -->
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" class="form-control  @error('title') is-invalid @enderror" id="title" placeholder="enter title name" value="{{$data->title ?? old('title')}}">
                @error('title')
                    <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="content" class="form-label">Content</label>
                <textarea class="form-control @error('content') is-invalid @enderror" name="content" id="content" rows="3" placeholder="enter the content">{{$data->content ??old('content')}}</textarea>
                @error('title')
                    <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
    <!-- bootstrap js -->

</body>

</html>