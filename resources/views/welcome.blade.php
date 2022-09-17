<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home | LooThriftCo</title>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
</head>
<body>
    <div class="container accordion-header">
        <div class="card">
            <div class="card-body" style="background-color: #D2B48C">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="{{asset('assets/background.png')}}" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="{{asset('assets/thrift.png')}}" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="{{asset('assets/pic.png')}}" class="d-block w-100" alt="...">
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
            </div>
            <nav class="navbar" style="background-color:#86563C ">
                <div class="container-fluid">
                    <a class="navbar-brand" href="{{url('/')}}">
                        <img src="{{asset('assets/logo.png')}}" alt="Logo" width="40" height="40" class="d-inline-block align-text-top">
                        LooThriftCo.
                    </a>
                    <ul class="nav justify-content-center">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{url('/')}}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/about')}}">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/reviews')}}">Reviews</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="card-body">
                <div class="alert alert-success" role="alert">
                    <h4 class="alert-heading">Welcome!</h4>
                    <p>Welcome to LooThrift Clothing Co where you can enjoy thrifting clothes to a lowest price. We are glad that you're here! Have a nice day Thrifting ka LooThrift!</p>
                    <hr>
                    <p class="mb-0">Every day is a Thriftventure</p>
                  </div>
            </div>
            <div class="card-footer" style="text-align:center; background-color:#D2B48C">
                    All rights reserved 2022| LooThriftCo.
            </div>
        </div>
    </div>
</body>
</html>
