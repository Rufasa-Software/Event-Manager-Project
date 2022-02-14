<div>
    <header class="d-flex justify-content-center align-items-center py-3">
        <a href="{{ route('index')}}" class="d-flex align-items-center me-auto  ms-5 text-decoration-none">
            <span id="title">Tech Events Manager</span>
        </a>

        {{$slot}}

    </header>
</div>

{{-- Version de Login | Register for the front page--}}
{{-- <ul class="nav nav-pills">
        <li id="login" class="nav-item"><a href="{{ route('login)}}" id="link" class="nav-link text-decoration-none mr-3" aria-current="page">Login</a></li>
        <span id="bar" class="mt-xl-2 mt-md-1"></span>
            <li id="register" class="nav-item"><a href="/register" id="link" class="nav-link me-5 text-decoration-none">Register</a></li>
        </ul> --}}

{{-- Version Home for the User page --}}
    {{-- <ul class="nav nav-pills">
        <li id="home" class="nav-item fs-2"><a href="{{ route('home')}}" id="link" class="nav-link text-decoration-none mr-3" aria-current="page">Home</a></li>
    </ul> --}}

{{--  Version Profile for the Home page being a user --}}
    {{-- <ul class="nav nav-pills">
        <li id="profile" class="nav-item fs-2"><a href="{{ route('index')}}" id="link" class="nav-link text-decoration-none mr-3" aria-current="page">Profile</a></li>
    </ul> --}}