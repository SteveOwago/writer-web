<div class="top-wrap">
    <div class="container">
        <div class="row">
            <div class="col-md col-xl-5 d-flex align-items-center">
                <a class="navbar-brand align-items-center" href="{{ route('index') }}">
                    AeWriters
                    <span>Online Service Provider</span>
                </a>
            </div>
            <div class="col-md d-flex align-items-center">
                <div class="con d-flex">
                    <div class="icon">
                        <span class="flaticon-clock"></span>
                    </div>
                    <div class="text">
                        <span>Monday - Friday</span>
                        <strong>8:00AM-8:00PM</strong>
                    </div>
                </div>
            </div>
            <div class="col-md d-flex align-items-center">
                <div class="con d-flex">
                    <div class="icon">
                        <span class="flaticon-telephone"></span>
                    </div>
                    <div class="text">
                        <span>Call Us</span>
                        <strong>+2 392 3929 210</strong>
                    </div>
                </div>
            </div>
            <div class="col-md d-flex justify-content-end align-items-center">
                <div class="social-media">
                    <p class="mb-0 d-flex">
                        <a href="#" class="d-flex align-items-center justify-content-center">
                            <span class="fa fa-facebook">
                                <i class="sr-only">Facebook</i>
                            </span>
                        </a>
                        <a href="#" class="d-flex align-items-center justify-content-center">
                            <span class="fa fa-twitter">
                                <i class="sr-only">Twitter</i>
                            </span>
                        </a>
                        <a href="#" class="d-flex align-items-center justify-content-center">
                            <span class="fa fa-instagram">
                                <i class="sr-only">Instagram</i>
                            </span>
                        </a>
                        <a href="#" class="d-flex align-items-center justify-content-center">
                            <span class="fa fa-dribbble">
                                <i class="sr-only">Dribbble</i>
                            </span>
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<nav class="navbar navbar-expand-lg  ftco-navbar-light">
    <div class="container-xl">
        <a href="{{route('login')}}" class="btn-custom order-lg-last">Login</a> | <a href="{{route('register')}}" class="btn-custom order-lg-last">Register</a>
        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
            <span class="fa fa-bars"></span>
            Menu
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('index') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('services')}}">All Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('blog')}}">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('pricing')}}">Pricing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('about')}}">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
