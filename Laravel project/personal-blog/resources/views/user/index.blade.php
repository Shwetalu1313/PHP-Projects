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
            <img src="images/person_jEL_icon.ico" alt="Logo" width="30" height="30" class="d-inline-block align-text-top rounded-circle me-2">
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

    <header class="container-fluid p-5 d-flex justify-content-center flex-column align-items-center" id="header">
      <h5 class="text-center">Hi, I'm a</h5>
      <h1 class="title-h1 text-center mb-4 fw-bolder">Software Developer</h1>
  
      <div class="mt-5 border border-2 border-info rounded fs-5 p-5 w-md-75 text-center">
        Crafting digital solutions with lines of code, where imagination meets functionality. ✨🚀
      </div>
      
      <!-- modal -->
      <!-- Button trigger modal -->
      <button type="button" class="btn btn-danger my-3 aboutme" data-bs-toggle="modal" data-bs-target="#exampleModal">
        <strong>About Me</strong> 
      </button>
    </header>
      
      

      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content bg-dark">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">About Me</h1>
              <button type="button" class="btn-close bg-info" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <img src="images/dad u.png" class="img-fluid" alt="">
              <hr>
              <table class="table rounded-3">
                <tbody>
                  <tr>
                    <th scope="row">Name</th>
                    <td>Khant Nyein Naing</td>
                  </tr>
                  <tr>
                    <th scope="row">BOD</th>
                    <td>22 - May - 2003</td>
                  </tr>
                  <tr>
                    <th scope="row">NRC</th>
                    <td>11/YaBaNa(N)105816</td>
                  </tr>
                  <tr>
                    <th scope="row">Phone No.</th>
                    <td>09 977 593 656</td>
                  </tr>
                  <tr>
                    <th scope="row">Email</th>
                    <td>knyein264@gmail.com</td>
                  </tr>
                </tbody>
              </table>          
              
            </div>
          </div>
        </div>
      </div>
      <!-- end modal -->
    </header>

    <!-- skills -->
    <section id="skills" class="container p-5">
        
        <!-- certification -->
            <div class="page-header text-center mb-3">
                <h1 id="timeline">Certification</h1>
            </div>
            <div class="line-break"></div>
            <ul class="timeline mb-5">
                <li data-aos="fade-right">
                  <div class="timeline-badge"><i class="bi bi-hdd-network-fill"></i></div>
                  <div class="timeline-panel">
                    <div class="timeline-heading">
                      <h4 class="timeline-title">Diploman in Network Communication</h4>
                      <p class="fs-6 fw-bold">2019-2020</p>
                    </div>
                    <div class="timeline-body">
                      <p>I got DNC (Diploma in Network Certification) from <span class="text-info">KMD</span>.</p>
                    </div>
                  </div>
                </li>
                <li class="timeline-inverted" data-aos="fade-left">
                  <div class="timeline-badge warning"><i class="bi bi-cloud-check-fill"></i></i></div>
                  <div class="timeline-panel">
                    <div class="timeline-heading">
                      <h4 class="timeline-title">Introduction to Cloud Computing</h4>
                      <p class="fs-6 fw-bold">2019-2020</p>
                    </div>
                    <div class="timeline-body">
                        <p>I got Introduction to Cloud Computing (Anzure) Certification from <span class="text-info">KMD</span>.</p>
                    </div>
                  </div>
                </li>
                <li data-aos="fade-right">
                  <div class="timeline-badge danger"><i class="bi bi-cpu"></i></div>
                  <div class="timeline-panel">
                    <div class="timeline-heading">
                      <h4 class="timeline-title">Level 5 Diploma Computing (NCC)</h4>
                      <p class="fs-6 fw-bold">2022-2023</p>
                    </div>
                    <div class="timeline-body">
                        <p>I got Diploma - <span class="text-warning">Level-5 Computing</span> from <span class="text-info">KMD</span>.</p>
                    </div>
                  </div>
                </li>
                <li class="timeline-inverted" data-aos="fade-left">
                    <div class="timeline-badge success"><i class="bi bi-code-slash"></i></div>
                    <div class="timeline-panel">
                      <div class="timeline-heading">
                        <h4 class="timeline-title">Basic Software Engineering</h4>
                        <p class="fs-6 fw-bold">2023</p>
                      </div>
                      <div class="timeline-body">
                          <p>I got Basic Software Engineering Certification from <span class="text-info">KMD</span>.</p>
                      </div>
                    </div>
                  </li>
                <li data-aos="fade-right">
                  <div class="timeline-badge info"><i class="bi bi-mortarboard"></i></i></div>
                  <div class="timeline-panel">
                    <div class="timeline-heading">
                      <h4 class="timeline-title">B.Sc(Hons) Computing</h4>
                      <p class="fs-6 fw-bold">2023 - </p>
                    </div>
                    <div class="timeline-body">
                      <p>I am studing, at KMD, Computing Final Year given by GreenWich University (UK).</p>
                    </div>
                  </div>
                </li>
            </ul>
            <!-- end certification -->

            <!-- Skills -->          


            <div class="skills">                      
              <div class="row text-center justify-content-center mb-3">
                  <div class="col-xl-6 col-lg-8">
                      <h1 class="">Skills</h1>
                      <div class="line-break"></div>
                      <p class="font-color border border-1 border-info p-3">The following will be include front-end, back-end and version control system.</p>
                  </div>
              </div>
              

              <!-- front-end -->
              <h3 class="text-capitalize text-warning text-center">front-end</h3>
              <div class="line-break-g"></div>
              <div class="row mb-5 border border-top-0 border-2 border-danger border-opacity-25 p-5">
                  <div class="col">
                      <div class="timeline-steps aos-init aos-animate" data-aos="fade-up">
                          <div class="timeline-step">
                              <div class="timeline-content" data-toggle="popover" data-trigger="hover" data-placement="top" title="" data-content="And here's some amazing content. It's very engaging. Right?" data-original-title="html">
                                <img src="images/html-5.png" style="width: 35px;" alt="">
                                  <p class="h6 mt-3 mb-1">HTML-5</p>
                              </div>
                          </div>
                          <div class="timeline-step">
                              <div class="timeline-content" data-toggle="popover" data-trigger="hover" data-placement="top" title="" data-content="And here's some amazing content. It's very engaging. Right?" data-original-title="2004">
                                <img src="images/css-3.png" style="width: 35px;" alt="">
                                  <p class="h6 mt-3 mb-1">CSS 3</p>
                              </div>
                          </div>
                          <div class="timeline-step">
                              <div class="timeline-content" data-toggle="popover" data-trigger="hover" data-placement="top" title="" data-content="And here's some amazing content. It's very engaging. Right?" data-original-title="2005">
                                <img src="images/js.png" style="width: 35px;" alt="">
                                  <p class="h6 mt-3 mb-1">Javascript</p>
                              </div>
                          </div>
                          <div class="timeline-step">
                              <div class="timeline-content" data-toggle="popover" data-trigger="hover" data-placement="top" title="" data-content="And here's some amazing content. It's very engaging. Right?" data-original-title="2010">
                                <img src="images/bootstrap.png" style="width: 35px;" alt="">
                                  <p class="h6 mt-3 mb-1">Bootstrap</p>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <!-- end front-end -->


              <!-- back-end -->
              <h3 class="text-capitalize text-warning text-center">back-end</h3>
              <div class="line-break-g"></div>
              <div class="row mb-5 border border-2 border-top-0 border-danger border-opacity-25 p-5"">
                  <div class="col">
                      <div class="timeline-steps aos-init aos-animate" data-aos="fade-up">
                          <div class="timeline-step">
                              <div class="timeline-content" data-toggle="popover" data-trigger="hover" data-placement="top" title="" data-content="And here's some amazing content. It's very engaging. Right?" data-original-title="html">
                                <img src="images/php.png" style="width: 35px;" alt="">
                                  <p class="h6 mt-3 mb-1">PHP</p>
                              </div>
                          </div>
                          <div class="timeline-step">
                              <div class="timeline-content" data-toggle="popover" data-trigger="hover" data-placement="top" title="" data-content="And here's some amazing content. It's very engaging. Right?" data-original-title="2004">
                                <img src="images/mysql.png" style="width: 35px;" alt="">
                                  <p class="h6 mt-3 mb-1">MySQL</p>
                              </div>
                          </div>
                          <div class="timeline-step">
                              <div class="timeline-content" data-toggle="popover" data-trigger="hover" data-placement="top" title="" data-content="And here's some amazing content. It's very engaging. Right?" data-original-title="2010">
                                <img src="images/laravel.png" style="width: 35px;" alt="">
                                  <p class="h6 mt-3 mb-1">Laravel</p>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <!-- end back-end -->

              <!-- mobile dev -->
              <h3 class="text-capitalize text-warning text-center">Mobile Development</h3>
              <div class="line-break-g"></div>
              <div class="row mb-5 border border-2 border-danger border-top-0 border-opacity-25 p-5">
                  <div class="col">
                      <div class="timeline-steps aos-init aos-animate" data-aos="fade-up">
                          <div class="timeline-step" style="border-top: rgb(161, 1, 1);">
                              <div class="timeline-content" data-toggle="popover" data-trigger="hover" data-placement="top" title="" data-content="And here's some amazing content. It's very engaging. Right?" data-original-title="html">
                                <img src="images/java.png" style="width: 35px;" alt="">
                                  <p class="h6 mt-3 mb-1">Java</p>
                              </div>
                          </div>
                          <div class="timeline-step" style="border-top: rgb(161, 1, 1);">
                              <div class="timeline-content" data-toggle="popover" data-trigger="hover" data-placement="top" title="" data-content="And here's some amazing content. It's very engaging. Right?" data-original-title="2004">
                                <img src="images/database.png" style="width: 35px;" alt="">
                                  <p class="h6 mt-3 mb-1">SQLite</p>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <!-- mobile dev -->

              <!-- external know -->
              <h3 class="text-capitalize text-warning text-center">external knowledge</h3>
              <div class="line-break-g"></div>
              <div class="row mb-5 border border-2 border-danger border-top-0 border-opacity-25 p-5">
                  <div class="col">
                      <div class="timeline-steps aos-init aos-animate" data-aos="fade-up">
                          <div class="timeline-step" style="border-top: rgb(161, 1, 1);">
                              <div class="timeline-content" data-toggle="popover" data-trigger="hover" data-placement="top" title="" data-content="And here's some amazing content. It's very engaging. Right?" data-original-title="html">
                                <img src="images/windows.png" style="width: 35px;" alt="">
                                  <p class="h6 mt-3 mb-1">Window OS</p>
                              </div>
                          </div>
                          <div class="timeline-step" style="border-top: rgb(161, 1, 1);">
                              <div class="timeline-content" data-toggle="popover" data-trigger="hover" data-placement="top" title="" data-content="And here's some amazing content. It's very engaging. Right?" data-original-title="2004">
                                <img src="images/linux.png" style="width: 35px;" alt="">
                                  <p class="h6 mt-3 mb-1">Linux OS</p>
                              </div>
                          </div>
                          <div class="timeline-step" style="border-top: rgb(161, 1, 1);">
                            <div class="timeline-content" data-toggle="popover" data-trigger="hover" data-placement="top" title="" data-content="And here's some amazing content. It's very engaging. Right?" data-original-title="2004">
                              <img src="images/github-sign.png" style="width: 35px;" alt="">
                                <p class="h6 mt-3 mb-1">Git Hub</p>
                            </div>
                        </div>
                        <div class="timeline-step" style="border-top: rgb(161, 1, 1);">
                          <div class="timeline-content" data-toggle="popover" data-trigger="hover" data-placement="top" title="" data-content="And here's some amazing content. It's very engaging. Right?" data-original-title="2004">
                            <img src="images/photoshop.png" style="width: 35px;" alt="">
                              <p class="h6 mt-3 mb-1">Photoshop</p>
                          </div>
                      </div>
                      <div class="timeline-step" style="border-top: rgb(161, 1, 1);">
                        <div class="timeline-content" data-toggle="popover" data-trigger="hover" data-placement="top" title="" data-content="And here's some amazing content. It's very engaging. Right?" data-original-title="2004">
                          <img src="images/premiere-pro.png" style="width: 35px;" alt="">
                            <p class="h6 mt-3 mb-1">Premiere</p>
                        </div>
                    </div>
                      </div>
                  </div>
              </div>
              <!-- mobile dev -->


          </div> 
          <!-- end of skills -->

    </section>

    <!-- experiences -->
    <section id="experience" class="container mb-3 p-5">
      <h3 class="text-center">Experiences</h3>
      <div class="line-break"></div>


      <div class="card exp text-center" data-aos="zoom-in-up" data-aos-duration="700">
        <div class="card-header d-flex justify-content-center">
          <ul class="nav nav-pills text-danger d-flex align-items-center justify-content-center" id="pills-tab" role="tablist">
            <li class="nav-item fw-bold" role="presentation">
              <button class="nav-link active text-capitalize" id="intership-tab" data-bs-toggle="pill" data-bs-target="#intership" type="button" role="tab" aria-controls="intership" aria-selected="true">intership <span class="badge badge-pill badge-danger bg-danger rounded-circle">1</span></button>
            </li>
            <li class="nav-item fw-bold" role="presentation">
              <button class="nav-link" id="academic-tab" data-bs-toggle="pill" data-bs-target="#academic" type="button" role="tab" aria-controls="academic" aria-selected="false">Academic  Projects  <span class="badge badge-pill badge-danger bg-danger rounded-circle">3</span></button>
            </li>
          </ul>
        </div>

        <div class="card-body tab-content" id="pills-tabContent">
          <div class="tab-pane fade show active" id="intership" role="tabpanel" aria-labelledby="intership-tab" tabindex="0"> 
            <h5 class="card-title font-color">Software Developer</h5>
            <p class="card-text font-color">I worked as a software developer in softcom for 2 months.</p>
            <a href="Khant Nyein Naing_CV_Web Developer intern_2023.pdf" class="btn btn-primary" download="Khant Nyein Naing_CV_Web Developer intern_2023.pdf">Download CV</a>
          </div>
          <div class="tab-pane fade" id="academic" role="tabpanel" aria-labelledby="academic-tab" tabindex="0">
            <p class="card-text font-color border border-1 border-end border-start border-top-0 border-bottom-0 m-3 border-info mx-auto w-50 p-2">I have done many academic projects that support good experiences.</p>
            <div class="row mb-3">
              <div class="col-4">
                <div class="card-body bg-gradient h-75 d-flex align-items-center justify-content-center">
                  <h5 class="text-light">'Moon' Job Portal</h5>
                </div>
                <div class="card-footer bg-info fw-semibold">
                  Database Design & Development
                </div>
              </div>
              <div class="col-4">
                <div class="card-body bg-gradient h-75 d-flex align-items-center justify-content-center">
                  <h5 class="text-light">Home Gym</h5>
                </div>
                <div class="card-footer bg-info fw-semibold">
                  Dynamic Website
                </div>
              </div>
              <div class="col-4">
                <div class="card-body bg-gradient h-75 d-flex align-items-center justify-content-center">
                  <h5 class="text-light">King Studio's Printing & Digital Photo Shooting Service</h5>
                </div>
                <div class="card-footer bg-info fw-semibold">
                  Dynamic Website
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


      
      <div class="tab-content" id="pills-tabContent">
      
        <div class="tab-pane fade" id="academic" role="tabpanel" aria-labelledby="academic-tab" tabindex="0">...</div>
        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">...</div>
        <div class="tab-pane fade" id="pills-disabled" role="tabpanel" aria-labelledby="pills-disabled-tab" tabindex="0">...</div>
      </div>
    </section>

    

    <!-- AOS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
  </body>
</html>
