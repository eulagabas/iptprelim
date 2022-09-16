<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reviews | LooThriftCo </title>
</head>
<body>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
</head>
<body>
    <div class="container">
        <div class="card" >
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
                    <a class="navbar-brand" href="#">
                        <img src="{{asset('assets/logo.png')}}" alt="Logo" width="40" height="40" class="d-inline-block align-text-top">
                        LooThriftCo.
                    </a>
                    <ul class="nav justify-content-center">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{url('/welcome')}}">Home</a>
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
            <div class="card-group">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Reviews</h5>
                        <h6 class="card-subtitle mb-2 text-muted">@L**a 23</h6>
                        <hr>
                    <p class="card-text">Super worth it, di halatang ukay lang sya. Very approachable din ng seller. Thank you seller. Recommended</p>
                  </div>
                  <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                  </div>
                </div>
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Reviews</h5>
                    <h6 class="card-subtitle mb-2 text-muted">@R*d**yn_Mah***</h6>
                    <hr>
                    <p class="card-text">What you see is what you get. Bet na bet ko tong Store na to. If you want affordable clothings choose LooThrifCo.</p>
                  </div>
                  <div class="card-footer">
                    <small class="text-muted">Last updated September 1, 2022</small>
                  </div>
                </div>
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Reviews</h5>
                    <h6 class="card-subtitle mb-2 text-muted">@E*n***l_24***</h6>
                    <hr>
                    <p class="card-text">Recommended seller. Thank you seller</p>
                  </div>
                  <div class="card-footer">
                    <small class="text-muted">Last updated August 17, 2022</small>
                  </div>
                </div>
              </div>
            <div class="card-footer text-muted" style="text-align:center; background-color:#D2B48C" >
                    All rights reserved 2022| LooThriftCo.
            </div>
        </div>
    </div>
</body>
</html>
</body>
</html>