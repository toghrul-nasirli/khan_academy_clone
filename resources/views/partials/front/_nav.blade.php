<nav class="navbar navbar-expand-md navbar-light">
    <a href="{{ route('index') }}" class="navbar-brand d-md-none">
        <img src="{{ asset('frontend/img/logo.svg') }}" height="62" width="175" alt="logo">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto d-none d-md-inline-flex">
            <li class="nav-item dropdown my-auto">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Courses
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
            <li class="nav-item">
                <form>
                    <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                    <img src="{{ asset('frontend/img/search-btn.svg') }}">
                </form>
            </li>
        </ul>
        <a class="navbar-brand m-0 p-0 d-none d-md-block" href="#">
            <img src="{{ asset('frontend/img/logo.svg') }}" height="62" width="175" alt="logo">
        </a>
        <ul class="navbar-nav ml-auto d-none d-md-inline-flex justify-content-end">
            <li class="nav-item active">
                <a class="nav-link" href="#">Donate</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Sign up</a>
            </li>
        </ul>
        <ul class="responsive-nav navbar-nav mr-auto bg-white d-md-none">
            <li class="nav-item">
                <a href="#" class="nav-link">Donate</a>
            </li>
            <li class="nav-item active">
                <a href="#" class="nav-link">Login</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">Sign up</a>
            </li>
        </ul>
    </div>
</nav>
