<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0 maximum-scale=1.0, user-scalable=no"
    />
    <link rel="icon" type="image/x-icon" href="images/person_jEL_icon.ico" />
    <title>Porfolio</title>
    <!-- bootstrap css -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

        <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <!-- local css -->
    <link rel="stylesheet" href="{{ asset('css/style2.css') }}">
    <link rel="stylesheet" href="{{ asset('css/chat.css') }}">
    <!-- bootstarp icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- AOS scroll css -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  </head>

  <body class="nomal-txt">
    <!-- navigation -->
    <nav class="navbar navbar-expand-lg shadow sticky-top" data-bs-theme="dark">
        <div class="container-fluid">
          <div class="d-flex align-items-center justify-content-center dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="/images/person_jEL_icon.ico" alt="Logo" width="30" height="30" class="d-inline-block align-text-top rounded-circle me-2">
            @if (Auth::check())
            <a class="navbar-brand nomal-txt" href="#">{{ Auth::user()->name }}</a>
            @else
                <a class="navbar-brand nomal-txt" href="#">Portfolio</a>
            @endif
            
          
          </div>
          <ul class="dropdown-menu">
            @if (Auth::check())
            <form action="{{route('logout')}}" method="post">
              @csrf
              <button 
                class="dropdown-item" 
                type="submit" 
                onclick="return confirm('Are you sure to logout?')">
                Logout
              </button>
            </form>
              
            @else
            <li>
              <a class="dropdown-item" href="{{route('login')}}">
                Login
              </a>
            </li>
            <li>
              <a class="dropdown-item" href="{{route('register')}}">
                Register
              </a>
            </li>
            @endif
          </ul>
          
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto ms-auto mb-2 mb-lg-0 fs-5">
              <li class="nav-item mx-3">
                <a class="nav-link active" aria-current="page" href="#header">About Me</a>
              </li>
              <li class="nav-item mx-3">
                <a class="nav-link nomal-txt" href="#skills">Skills</a>
              </li>
              <li class="nav-item mx-3">
                <a class="nav-link nomal-txt" href="#experience">Experience</a>
              </li>
              <li class="nav-item mx-3">
                <a class="nav-link nomal-txt" href="{{url('/users/chat')}}">Chat</a>
              </li>
            </ul>
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item mx-3">
                <a href="https://www.facebook.com/khantnyein.khantnyein.90/"><i class="bi bi-facebook fs-3"></i></a>
              </li>
              <li class="nav-item mx-3">
                <a href="knyein264@gmail.com"><i class="bi bi-google fs-3"></i></a>
              </li>
              <li class="nav-item mx-3">
                <a href="https://github.com/Shwetalu1313"><i class="bi bi-github fs-3"></i></a>
              </li>
                <li class="nav-item ms-2 me-4 contact-nav border-start">
                    <a class="nav-link btn btn-outline-primary border border-2 ms-3" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">Contact Me</a>
                </li>
            </ul>

            

          </div>
        </div>
    </nav>
    <!-- offcanvas start -->
    <div class="offcanvas offcanvas-start bg-dark" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title text-warning" id="offcanvasExampleLabel">Contact me with Email</h5>
        <button type="button" class="btn-close bg-info" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body mx-2">
        <form action="mailto:knyein264@gmail.com" method="post" enctype="text/plain">
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Write Message</label>
            <textarea class="form-control" name="💐" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-info">
              Send <i class="bi bi-send"></i>
            </button> 
          </div>
            
        </form>
      </div>
      
    </div>
    <!-- offcanvas end -->

    <main class="container my-3">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-9 p-4">
                <div class="card">
                    <div class="card-header">
                        Chat App
                    </div>
                    <div class="card-body">
                        
                        <div id="chat-messages">
                            <!-- This is where chat messages will appear -->
                        </div>
                    </div>
                    <div class="card-footer text-body-secondary">
                        <form id="chat-form" action="" method="post">
                            @csrf
                            <div class="input-group">
                                <input type="text" id="message" name="message" class="form-control" placeholder="Write Message..." aria-label="Recipient's username" aria-describedby="basic-addon2">
                                <button type="submit" class="input-group-text bg-primary" id="basic-addon2"><i class="bi bi-send text-dark"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </main>
    

    <!-- AOS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();

      function appendMessage(message, sender) 
      {
        console.log(`Appending message: ${message}`);
        const chatMessages = document.getElementById('chat-messages');
        const messageDiv = document.createElement('div');
        const dateSpan = document.createElement('span');

        dateSpan.textContent = '9/3/2023';
        messageDiv.className = `message ${sender} `;
        messageDiv.textContent = message;

        if (sender === 'other') 
        {
        messageDiv.className = 'message other mt-3';
        dateSpan.className = 'message-date';
        } 

        else if (sender === 'me') 
        {
        messageDiv.className = 'message me text-end mt-3';
        dateSpan.className = 'message-date float-end';
        }

        chatMessages.appendChild(messageDiv);
        chatMessages.appendChild(dateSpan);
    }

        // Example usage when receving a message
        const receiveMessage = "Hello, world!";
        let sender = "other";
        appendMessage(receiveMessage, sender);

        // Example usage when my a message
        const sendMessage = "Hi there!";
        sender = "me"; 
        appendMessage(sendMessage, sender);


    </script>
  </body>
</html>
