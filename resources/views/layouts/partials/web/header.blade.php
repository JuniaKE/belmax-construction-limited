<div class="header">
    <div class="top-header">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="top-right">
                        <ul>
                            <li>
                                <span><i class="icofont-clock-time"></i></span>
                                {{ $settings['officeTime'] }}
                            </li>
                            <li>
                                <span><i class="icofont-email"></i></span>
                                <a href="mailto:{{ $settings['email'] }}" class="__cf_email__"
                                    data-cfemail="234e4a5a4c53634c53574c4d4f4a4d460d4d4657">{{ $settings['email'] }}</a>
                            </li>
                            <li>
                                <span><i class="icofont-google-map"></i></span>
                                {{ $settings['officeAddress'] }}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom-header animated fadeInDown fixed-header">
        <div class="container">
            <div class="row no-gutters justify-content-between">
                <div class="d-xl-none d-lg-none d-flex col-4">
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <img src="web/assets/images/btn-img.png" alt="image">
                    </button>
                </div>
                <div class="col-xl-2 col-lg-2 col-4">
                    <div class="logo">
                        <a href="{{ route('homepage') }}">
                            <img src="{{ asset('web/assets/images/logo.png') }}" alt="LOGO">
                        </a>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-9 next">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="{{ route('homepage') }}">
                                        Home
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('about') }}">About Us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('services') }}">Services</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('services') }}">Projects</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="#" id="pageDropdown" role="button" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        Pages
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="pageDropdown">
                                        <a class="dropdown-item" href="team.html">Team Page</a>
                                        <a class="dropdown-item" href="team-details.html">Team Details Page</a>
                                        <a class="dropdown-item" href="error.html">Error Page</a>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="#" id="blogDropdown" role="button" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        Blog
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="blogDropdown">
                                        <a class="dropdown-item" href="blog.html">Blog Page</a>
                                        <a class="dropdown-item" href="blog-details.html">Blog Details Page</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('contact.create') }}">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <div class="col-xl-1 col-lg-1 col-4 d-xl-flex d-lg-flex align-items-center">
                    <div class="side-bar-btn">
                        <button class="side-bar-show"><img src="web/assets/images/btn-img.png" alt="image"></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
