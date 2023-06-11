<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!--main css-->
  <!--main css-->
  <!--bootstrap-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="{{ asset("/assets/css/bootstrap.min.css") }}" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset("/assets/css/owl.carousel.min.css") }}">
  <link rel="stylesheet" href="{{ asset("/assets/css/owl.theme.default.min.css") }}">
  <link rel="stylesheet" href="{{ asset("/assets/css/style.css") }}">
  <!--bootstrap-->
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid">
        <a class="navbar-brand" href="{{ url("#") }}"><img src="{{ asset("/image/parkingo.svg") }}" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="{{ url("#") }}">Available Parking</a>
            </li>
            <li class="nav-item btn-park">
              <a class="nav-link" href="{{ url("#") }}">Parking Places</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="section">
      <h1 class="section-title">Let’s get parking in a few minutes.</h1>
      <p class="section-description">in parkingo we help you to quickly find suitable parking </p>
      <a class="btn">Find Parking</a>
    </div>
  </header>
  <div class="parking">
    <div class="container">
      <div class="avail">
        <h2 class="h1">Available Parking</h2>
        <div class="d-flex flex-wrap" style="justify-content: space-evenly;">
          <button class="btn btn-availpark">Basement</button>
          {{-- <button class="btn btn-availpark">Floor 1</button>
          <button class="btn btn-availpark">Floor 2</button>
          <button class="btn btn-availpark">Floor 3</button> --}}
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="enter">
            <div class="line">
              <img src="{{ asset("/image/Line 5.svg") }}" alt="">
            </div>
            <h1>Enter</h1>
          </div>
          <table class="table table-dark  text-center ">
            <thead>
              <tr>
                @foreach ($places as $index=>$place)
                @if($index>3)
                @break
                @endif
                  <th scope="col">{{$place->name}}</th>
                @endforeach

              </tr>
            </thead>
            <tbody>
              <tr>

                @foreach ($places as $index=>$place)
                @if($index>3)
                @continue
                @endif
                @if($place->available)
                <td> <img src="{{ asset("/image//Group 31.svg") }}" alt=""></td>
                @else
                <td> <img src="{{ asset("/image/Group 19.svg") }}" alt=""></td>
                @endif
                @endforeach
              </tr>
              <tr>
                @foreach ($places as $index=>$place)
                @if($index>3)
                @continue
                @endif
                @if($place->available)
                <td> <img src="{{ asset("/image/Group 69.svg") }}" alt=""></td>
                @else
                <td> <img src="{{ asset("/image/Group 81.svg") }}" alt=""></td>
                @endif
                @endforeach
              </tr>
              <thead class="head">
                <tr>
                @foreach ($places as $index=>$place)
                @if($index<4)
                @continue
                @endif
                  <th scope="col">{{$place->name}}</th>
                @endforeach

                </tr>
              </thead>
              <tr>
                @foreach ($places as $index=>$place)
                @if($index<4)
                @continue
                @endif
                @if($place->available)
                <td> <img src="{{ asset("/image//Group 31.svg") }}" alt=""></td>
                @else
                <td> <img src="{{ asset("/image/Group 19.svg") }}" alt=""></td>
                @endif
                @endforeach
              </tr>
              <tr>
                @foreach ($places as $index=>$place)
                @if($index<4)
                @continue
                @endif
                @if($place->available)
                <td> <img src="{{ asset("/image/Group 69.svg") }}" alt=""></td>
                @else
                <td> <img src="{{ asset("/image/Group 81.svg") }}" alt=""></td>
                @endif
                @endforeach
              </tr>
            </tbody>
          </table>
          <div class="choise">
            <ul class="list">
              <li><img src="{{ asset("/image/Group 81.svg") }}" alt=""> Locked {{$places->where('available',false)->count()}}</li>
              <li><img src="{{ asset("/image/Group 69.svg") }}" alt=""> Available {{$places->where('available',true)->count()}}</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="places">
    <h2 class="h1">Parking Places</h2>
    <div id="carouselExample" class="carousel slide">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
          aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
          aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
          aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="{{ asset("/image/Rectangle 41.png") }}" class="d-block w-100" alt="Parking Places">
        </div>
        <div class="carousel-item">
          <img src="{{ asset("/image/Rectangle 41.png") }}" class="d-block w-100" alt="Parking Places">
        </div>
        <div class="carousel-item">
          <img src="{{ asset("/image/Rectangle 41.png") }}" class="d-block w-100" alt="Parking Places">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true">&lt;</span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"> &gt;</span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
  <div class="what-we-do">
    <div class="services">
      <div class="container">
        <!-- Set up your HTML -->
        <div class="owl-carousel service-carousel">
          <div class="owl-card text-center">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-regular fa-star"></i>
            <p>
              Slate helps you see how many
              more days you need to work to
              reach your financial goal.
            </p>
            <div class="d-flex" style="justify-content: space-evenly;">
              <img src="{{ asset("/image/Ellipse 2.png") }}" class="img-fluid" alt="" height="100px" width="100px">
              <div>
                <h3>Regina Miles</h3>
                <p>Designer</p>
              </div>
            </div>
          </div>
          <div class="owl-card text-center">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-regular fa-star"></i>
            <p>
              Slate helps you see how many
              more days you need to work to
              reach your financial goal.
            </p>
            <div class="d-flex" style="justify-content: space-evenly;">
              <img src="{{ asset("/image/Ellipse 2.png") }}" class="img-fluid" alt="" height="100px" width="100px">
              <div>
                <h3>Regina Miles</h3>
                <p>Designer</p>
              </div>
            </div>
          </div>
          <div class="owl-card text-center">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-regular fa-star"></i>
            <p>
              Slate helps you see how many
              more days you need to work to
              reach your financial goal.
            </p>
            <div class="d-flex" style="justify-content: space-evenly;">
              <img src="{{ asset("/image/Ellipse 2.png") }}" class="img-fluid" alt="" height="100px" width="100px">
              <div>
                <h3>Regina Miles</h3>
                <p>Designer</p>
              </div>
            </div>
          </div>
          <div class="owl-card text-center">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-regular fa-star"></i>
            <p>
              Slate helps you see how many
              more days you need to work to
              reach your financial goal.
            </p>
            <div class="d-flex" style="justify-content: space-evenly;">
              <img src="{{ asset("/image/Ellipse 2.png") }}" class="img-fluid" alt="" height="100px" width="100px">
              <div>
                <h3>Regina Miles</h3>
                <p>Designer</p>
              </div>
            </div>
          </div>
          <div class="owl-card text-center">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-regular fa-star"></i>
            <p>
              Slate helps you see how many
              more days you need to work to
              reach your financial goal.
            </p>
            <div class="d-flex" style="justify-content: space-evenly;">
              <img src="{{ asset("/image/Ellipse 2.png") }}" class="img-fluid" alt="" height="100px" width="100px">
              <div>
                <h3>Regina Miles</h3>
                <p>Designer</p>
              </div>
            </div>
          </div>
          <div class="owl-card text-center">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-regular fa-star"></i>
            <p>
              Slate helps you see how many
              more days you need to work to
              reach your financial goal.
            </p>
            <div class="d-flex" style="justify-content: space-evenly;">
              <img src="{{ asset("/image/Ellipse 2.png") }}" class="img-fluid" alt="" height="100px" width="100px">
              <div>
                <h3>Regina Miles</h3>
                <p>Designer</p>
              </div>
            </div>
          </div>
          <div class="owl-card text-center">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-regular fa-star"></i>
            <p>
              Slate helps you see how many
              more days you need to work to
              reach your financial goal.
            </p>
            <div class="d-flex" style="justify-content: space-evenly;">
              <img src="{{ asset("/image/Ellipse 2.png") }}" class="img-fluid" alt="" height="100px" width="100px">
              <div>
                <h3>Regina Miles</h3>
                <p>Designer</p>
              </div>
            </div>
          </div>
          <div class="owl-card text-center">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-regular fa-star"></i>
            <p>
              Slate helps you see how many
              more days you need to work to
              reach your financial goal.
            </p>
            <div class="d-flex" style="justify-content: space-evenly;">
              <img src="{{ asset("/image/Ellipse 2.png") }}" class="img-fluid" alt="" height="100px" width="100px">
              <div>
                <h3>Regina Miles</h3>
                <p>Designer</p>
              </div>
            </div>
          </div>
          <div class="owl-card text-center">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-regular fa-star"></i>
            <p>
              Slate helps you see how many
              more days you need to work to
              reach your financial goal.
            </p>
            <div class="d-flex" style="justify-content: space-evenly;">
              <img src="{{ asset("/image/Ellipse 2.png") }}" class="img-fluid" alt="" height="100px" width="100px">
              <div>
                <h3>Regina Miles</h3>
                <p>Designer</p>
              </div>
            </div>
          </div>
          <div class="owl-card text-center">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-regular fa-star"></i>
            <p>
              Slate helps you see how many
              more days you need to work to
              reach your financial goal.
            </p>
            <div class="d-flex" style="justify-content: space-evenly;">
              <img src="{{ asset("/image/Ellipse 2.png") }}" class="img-fluid" alt="" height="100px" width="100px">
              <div>
                <h3>Regina Miles</h3>
                <p>Designer</p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
  <div class="portofolio text-center">
    <img src="{{ asset("/image/parkingo.svg") }}" class="d-block  m-auto" alt="">
    <p>helper website to find suitable slots in parkings, in parkingo you will find parking in just few minutes.</p>
  </div>
  <!--start footer-->
  <div class="footer">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 head">
          <img src="{{ asset("/image/parkingo.svg") }}" class="d-block " alt="">
        </div>
        <div class="col-sm-4">
          <ul class="list-footer">
            <li><a href="{{ url("#") }}">Information</a></li>
            <li><a href="{{ url("#") }}">About</a></li>
            <li><a href="{{ url("#") }}">Contact US</a></li>
          </ul>
        </div>
        <div class="col-sm-4">
          <ul class="list-footer">
            <li><a href="{{ url("#") }}">Information</a></li>
            <li><a href="{{ url("#") }}">About</a></li>
            <li><a href="{{ url("#") }}">Contact US</a></li>
          </ul>
        </div>
        <div class="col-sm-4">
          <ul class="list-footer">
            <li><a href="{{ url("#") }}">Information</a></li>
            <li><a href="{{ url("#") }}">About</a></li>
            <li><a href="{{ url("#") }}">Contact US</a></li>
          </ul>
        </div>
        <div class="col-md-4">
          <ul class=" d-flex social">
            <li><a href="{{ url("#") }}"><i class="fa-brands fa-google"></i></a></li>
            <li><a href="{{ url("#") }}"><i class="fa-brands fa-twitter"></i></a></li>
            <li><a href="{{ url("#") }}"><i class="fa-brands fa-instagram"></i></a></li>
            <li><a href="{{ url("#") }}"><i class="fa-brands fa-facebook-f"></i></a></li>
          </ul>
        </div>
        <div class="col-md-8 supcrip">
          <div class="row">

            <div class="text col-sm-6">
              <h1 class="caption">Subscribe For Latest
                Newsletter</h1>
            </div>
            <div class="sup col-sm-6">
              <div class="input-group mb-3 row">
                <input type="text" class="form-control col-md-6" placeholder="Yor Emai" aria-label="Yor Emai"
                  aria-describedby="button-addon2">
                <button class="btn btn-success col-md-6" type="button" id="button-addon2">Subscribe</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--end footer-->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>

  <!--bootstarp-->
  <script src="{{ asset("/assets/js/bootstrap.min.js") }}"></script>
  <!--bootstarp-->
  <script src="{{ asset("/assets/js/owl.carousel.min.js") }}"></script>
  <script src="{{ asset("/assets/js/script.js") }}"></script>
</body>

</html>

</html>
