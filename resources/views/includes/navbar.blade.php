<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5 py-lg-0">
    <a href="index.html" class="navbar-brand">
        <h1 class="m-0 text-primary"><i class="fa fa-book-reader me-3"></i>Kider</h1>
    </a>
    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav mx-auto">
            <a href="{{route('home')}}" class="nav-item nav-link {{request()->is('home') ? 'active' : ''}}">Home</a>
            <a href="{{route('about')}}" class="nav-item nav-link {{request()->is('about') ? 'active' : ''}}">About Us</a>
            <a href="{{route('classes')}}" class="nav-item nav-link {{request()->is('classes') ? 'active' : ''}}">Classes</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Pages
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a href="{{route('facility')}}" class="dropdown-item {{request()->is('facility') ? 'active' : ''}}">School Facilities</a></li>
                    <li><a href="{{route('team')}}" class="dropdown-item {{request()->is('team') ? 'active' : ''}}">Popular Teachers</a></li>
                    <li><a href="{{route('call')}}" class="dropdown-item {{request()->is('call') ? 'active' : ''}}">Become A Teacher</a></li>
                    <li><a href="{{route('appointment')}}" class="dropdown-item {{request()->is('appointment') ? 'active' : ''}}">Make Appointment</a></li>
                    <li><a href="{{route('testimo')}}" class="dropdown-item {{request()->is('testimo') ? 'active' : ''}}">Testimonial</a></li>
                    <li><a href="{{route('error')}}" class="dropdown-item {{request()->is('error') ? 'active' : ''}}">404 Error</a></li>
                </ul>
            </div>
            <a href="{{route('contact')}}" class="nav-item nav-link {{request()->is('contact') ? 'active' : ''}}">Contact Us</a>
        </div>
        <a href="{{route('appointment')}}" class="btn btn-primary rounded-pill px-3 d-none d-lg-block">Join Us<i class="fa fa-arrow-right ms-3"></i></a>
    </div>
</nav>