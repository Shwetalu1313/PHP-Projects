<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Hello</title>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

        <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    {{-- drop zone --}}
    <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />

    <style>
.sidenav {
    width: 200px;
    background: rgb(37, 1, 90);
    height: 89vh;
    overflow: hidden; /* Hide the scrollbar */
    scrollbar-width: none; /* Hide scrollbar for Firefox */
    position: fixed;
}

.sidenav::-webkit-scrollbar {
    width: 0; /* Hide scrollbar for Chrome, Safari, and newer Edge */
}


.sidenav a {
    text-decoration: none;
    display: block;
    text-decoration: none;
    font-size: 20px;
    color: azure;
    padding: 5px;
}


.sidenav li:hover{
    background:#46aeef ;
}

.main{
    margin: 1.3rem 1rem 1rem 15rem;
}

    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-dark shadow navbar-dark sticky-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Admin</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
            </ul>
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item dropstart">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      <img src="{{ asset('images/profile.gif') }}" alt="" style="background: none; width: 50px; height: 50px; border-radius: 50%; padding:0;" >
                      {{Auth::user()->name}},{{Auth::user()->status}}
                    </a>
                    <ul class="dropdown-menu bg-info">
                      <li><a class="dropdown-item" href="#">Login</a></li>
                      <li><a class="dropdown-item" href="#">Regisister</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li>
                        <form action="{{route('logout')}}" method="post">
                          @csrf
                          <button class="dropdown-item" type="submit" onclick="return confirm('Are you sure to logout?')">Logout</button></form>
                      </li>
                    </ul>
                  </li>
              </ul>
          </div>
        </div>
      </nav>
      <div class="sidenav border-end border-5 border-info shadow">
        <ul class="" style="list-style-type: none;">
            <li><a href="{{url('admin/category')}}">Category</a></li>
            <li><a href="{{url('admin/news')}}">News</a></li>
            <li><a href="{{url('/admin/users')}}">Users</a></li>
            <li><a href="#">Link</a></li>
        </ul>
      </div>
      <div class="main">
        @yield('content')
    </div>
</body>
</html>