<div>
    {{-- Only this header, for the Login, Register and Admin page --}}
    <header class="d-flex justify-content-center align-items-center py-3">
        <a href="/" class="d-flex align-items-center me-auto  ms-5 text-decoration-none">
            <span id="title">Tech Events Manager</span>
        </a>

        {{$slot}}

        {{-- Version de Login | Register for the front page--}}
        {{-- <ul class="nav nav-pills">
            <li id="login" class="nav-item"><a href="/login" id="link" class="nav-link text-decoration-none mr-3" aria-current="page">Login</a></li>
            <span id="bar" class="mt-xl-2 mt-md-1"></span>
            <li id="register" class="nav-item"><a href="/register" id="link" class="nav-link me-5 text-decoration-none">Register</a></li>
        </ul> --}}

        {{-- Version Home for the User page --}}
        {{-- <ul class="nav nav-pills">
            <li id="home" class="nav-item fs-2"><a href="/home" id="link" class="nav-link text-decoration-none mr-3" aria-current="page">Home</a></li>
        </ul> --}}

        {{--  Version Profile for the Home page being a user --}}
        {{-- <ul class="nav nav-pills">
            <li id="profile" class="nav-item fs-2"><a href="/profile" id="link" class="nav-link text-decoration-none mr-3" aria-current="page">Profile</a></li>
        </ul> --}}
    </header>
</div>