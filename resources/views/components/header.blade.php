<div>
    {{-- Only this header, for the Login, Register and Admin page --}}
    <header class="d-flex justify-content-center py-4 ps-5 pe-5 mb-4">
        <a href="/" class="d-flex align-items-center mb-md-0 me-md-auto text-decoration-none">
            <svg class="bi " width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
            <span class="fs-1" id="title">Tech Events Manager</span>
        </a>

        {{$slot}}

        {{-- Version de Login | Register for the front page--}}
        {{-- <ul class="nav nav-pills">
            <li id="login" class="nav-item fs-2"><a href="/login" id="link" class="nav-link text-decoration-none mr-3" aria-current="page">Login</a></li>
            <span id="bar" class="mt-2"></span>
            <li id="register" class="nav-item fs-2 ml-1"><a href="/register" id="link" class="nav-link text-decoration-none mr-3">Register</a></li>
        </ul> --}}

        {{-- Version Home for the User page --}}
        {{-- <ul class="nav nav-pills">
            <li id="home" class="nav-item fs-2"><a href="/home" id="link" class="nav-link text-decoration-none mr-3" aria-current="page">Home</a></li>
        </ul> --}}
    </header>
</div>