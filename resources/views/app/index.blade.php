<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>FDC15 Frontend Project</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/storage/app/vendors/fontawesome-v6/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/storage/app/vendors/bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/storage/app/styles.css') }}">

</head>

<body id="myPage">

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">ABOUT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">SERVICE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">PORTFOLIO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">PRICING</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">CONTACT</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- header -->
    <div id="header" class="text-center">
        <h1>COMPANY</h1>
        <p>We specialized in bla bla bla</p>
        <form>
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Subscribe Email" aria-label="Recipient's username"
                    aria-describedby="basic-addon2">
                <button class="input-group-text" id="basic-addon2">Subscribe</button>
            </div>
        </form>
    </div>

    <!-- about -->
    <div id="about" class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-md-8">
                <h2>About Company Page</h2>
                <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat.</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet,
                    consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                    enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                    nisi ut aliquip ex ea commodo consequat Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                    do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet,
                    consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                    enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat</p>
                <button class="btn btn-orange">Get In Touch</button>
            </div>
            <div class="about-icon col-sm-12 col-md-4 d-flex justify-content-center align-items-center">
                <i class="fa-solid fa-signal icon-lg"></i>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-grey">
        <div class="row">
            <div class="about-icon col-sm-12 col-md-4 d-flex justify-content-center align-items-center">
                <i class="fa-solid fa-globe icon-lg slideObject"></i>
            </div>
            <div class="col-sm-12 col-md-8">
                <h2>Our Values</h2>
                <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat.</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet,
                    consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                    enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                    nisi ut aliquip ex ea commodo consequat Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                    do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet,
                    consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                    enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat</p>
            </div>
        </div>
    </div>

    <!-- services -->
    <div id="services" class="container-fluid text-center">
        <h2>Our Services</h2>
        <h4>What We Offer</h4>
        <div class="row mb-3 slideObject">
            @foreach ($services as $service)
                <div class="col-md-4">
                    <i class="fa-solid fa-{{ $service->type }} icon-sm mb-3"></i>
                    <h4>{{ $service->name }}</h4>
                    <p class="mb-5">{{ $service->description }}</p>
                </div>
            @endforeach
        </div>
    </div>

    <!-- portfolio -->
    <div id="protfolio" class="container-fluid bg-grey text-center">
        <h2>Portfolio</h2>
        <h4>What we have created</h4>
        <div class="row slideObject">
            @foreach ($portfolios as $portfolio)
                <div class="col-md-4">
                    <div class="img-container">
                        <img src="{{ asset('/storage/' . $portfolio->image) }}" alt="paris" class="img-thumbnail mb-3">
                        <p>{{ $portfolio->title }}</p>
                        <p>{{ $portfolio->description }}</p>
                    </div>
                </div>
            @endforeach
        </div>

        <h2>What our customers say</h2>
        <div class="row">
            <div class="col-md-12">
                <div id="my-carousel" class="carousel slide p-5" data-bs-ride="true">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#my-carousel" data-bs-slide-to="0" class="active"
                            aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#my-carousel" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#my-carousel" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <h4>"Could I... BE any more happy with this company?" Chandler Bing, Actor, FriendsAlot</h4>
                        </div>
                        <div class="carousel-item">
                            <h4>"This company is the best. I am so happy with the result!" Michael Roe, Vice President, Comment Box Previous</h4>
                        </div>
                        <div class="carousel-item">
                            <h4>"One word... WOW!!" John Doe, Salesman, Rep Inc</h4>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#my-carousel"
                        data-bs-slide="prev">
                        <i class="fa-solid fa-chevron-left"></i>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#my-carousel"
                        data-bs-slide="next">
                        <i class="fa-solid fa-chevron-right"></i>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
       
    </div>

    <!-- pricing -->
    <div id="pricing" class="container-fluid text-center">
        <h2>Pricing</h2>
        <div class="row slideObject">
            <div class="col-md-4">
                <div class="price-box">
                    <div class="price-box-header mb-2">
                        <h1>Basic</h1>
                    </div>
                    <div class="price-box-body">
                        <p>20 lorem</p>
                        <p>15 lorem</p>
                        <p>10 lorem</p>
                        <p>5 lorem</p>
                        <p>Endless Amet</p>
                    </div>
                    <div class="price-box-footer">
                        <h3>$30</h3>
                        <h4>Per Month</h4>
                        <button class="btn btn-lg btn-orange mb-3">Sign Up</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="price-box">
                    <div class="price-box-header mb-2">
                        <h1>Pro</h1>
                    </div>
                    <div class="price-box-body">
                        <p>20 lorem</p>
                        <p>15 lorem</p>
                        <p>10 lorem</p>
                        <p>5 lorem</p>
                        <p>Endless Amet</p>
                    </div>
                    <div class="price-box-footer">
                        <h3>$30</h3>
                        <h4>Per Month</h4>
                        <button class="btn btn-lg btn-orange mb-3">Sign Up</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="price-box">
                    <div class="price-box-header mb-2">
                        <h1>Premium</h1>
                    </div>
                    <div class="price-box-body">
                        <p>20 lorem</p>
                        <p>15 lorem</p>
                        <p>10 lorem</p>
                        <p>5 lorem</p>
                        <p>Endless Amet</p>
                    </div>
                    <div class="price-box-footer">
                        <h3>$30</h3>
                        <h4>Per Month</h4>
                        <button class="btn btn-lg btn-orange mb-3">Sign Up</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- contact  -->
    <div id="contact" class="container-fluid bg-grey">
        <h2 class="text-center">Contact</h2>
        <div class="row">
            <div class="col-md-5">
                <p>Contact us and we'll get back to you within 24 hours.</p>
                <p><i class="fas fa-map-marker-alt"></i>&nbsp;&nbsp;Chicago, US</p>
                <p><i class="fas fa-phone"></i>&nbsp;&nbsp;+00 1515151515</p>
                <p><i class="fas fa-envelope"></i>&nbsp;&nbsp;mymail@gmail.com</p>
            </div>

            <form id="contactForm" class="col-md-7 slideObject" action="{{ route('contacts.store') }}" method="post">
                @csrf()
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="name" name="name">
                            @error('name')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <input type="email" class="form-control" placeholder="email" name="email">
                        @error('email')
                                <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <textarea class="form-control" rows="5" placeholder="message" name="message"></textarea>
                        @error('message')
                                <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12">
                        <button class="btn btn-orange">Send</button>    
                    </div>                    
                </div>                    
            </form>
            <div id="message"></div>

        </div>       
    </div>

    <!-- locaiton map -->
    <img src="{{ asset('/storage/app/images/map.jpg') }}" alt="map" width="100%" height="600px">

    <!-- footer -->
    <div id="footer" class="container-fluid text-center bg-grey">
        <a href="#myPage">
            <i class="fas fa-angle-up"></i>
        </a>
        <p>
            Developed By 
            <a href="https://www.strongforcetech.com" target="_blank">STRONGFORCE TECHNOLOGY</a>
        </p>
    </div>





    <script src="{{ asset('/storage/app/vendors/bootstrap/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('/storage/app/vendors/jquery/jquery-3.7.1.min.js') }}"></script>
    <script>
        $(document).ready(() => {
            $('.nav-item a').click((event) => {
                //remove active class from all nav item
                $('.nav-item a').removeClass('active');

                let clickedElement = $(event.currentTarget);
                console.log(clickedElement);
                clickedElement.addClass('active');
            });

            $(window).scroll(()=>{
                // winTop + 600 > slideObjectTop
                const winTop = $(window).scrollTop();
                console.log(winTop);

                const slideObjects = $('.slideObject');
                
                slideObjects.each((index,slideObject)=>{
                    const slideObjectTop = $(slideObject).offset().top;
                    console.log(slideObjectTop);

                    if(winTop + 500 > slideObjectTop){
                        $(slideObject).addClass('slide');
                    }
                });

                console.log('');
                console.log('');
                console.log('');
                console.log('');
                console.log('');
            });
        });

        $(document).ready(() => {
            $('#contactForm').submit(function(e) {
                e.preventDefault();

                let formData = $(this).serialize();

                $.ajax({
                    type: "POST",
                    url: "{{ route('contacts.store') }}",
                    data: formData,
                    success: (response) => {
                        $('#message').html(`<span class="text-success">${response.message}</span>`);
                        $('#contactForm')[0].reset();
                    },
                    error: (errror) => {
                        let errorMessage = 'Something went wrong!';
                        
                        $('#message').html(`<span class="text-danger">${errorMessage}</span>`)
                    }
                })
            })
        })

    </script>
</body>

</html>