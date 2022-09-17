<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About | LooThriftCo</title>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
</head>
<body>
    <div class="container">
        <div class="card" style="background-color: #D2B48C">
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
                            <a class="nav-link"href="{{url('/reviews')}}">Reviews</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-6">
                      <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Info</h5>
                            <h6 class="card-subtitle mb-2 text-muted">We offer thrift and pre-loved clothes for a very affordable price. </h6>
                            <hr>
                            <p class="card-text">
                                <img src="{{asset('assets/location.png')}}" width="40" height="40" alt="icon">
                                Sagbayan, Bohol</p>
                            <p class="card-text">
                                <img src="{{asset('assets/call.png')}}" width="40" height="40" alt="icon">
                                +639505514775</p>
                            <p class="card-text">
                                <img src="{{asset('assets/peso.png')}}" width="40" height="40" alt="icon">
                                50-100</p>
                            <p class="card-text">
                                <img src="{{asset('assets/clock.png')}}" width="40" height="40" alt="icon">
                                M-S at 9:00am -8:00pm
                            </p>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="card">
                        <img src="{{asset('assets/looth.png')}}" height=" 230px">
                        <div class="card-body">
                          <h5 class="card-title">LooThrif Clothing Co</h5>
                          <p class="card-text">For more details please visit our Fb page facebook.com/LooThriftClothing</p>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
            <div class="card-footer" style="text-align: center; background-color:#D2B48C" >
                All rights reserved 2022| LooThriftCo.
            </div>
        </div>
    </div>
</body>
</html>
