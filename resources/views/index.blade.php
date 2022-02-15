<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portada</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    @guest
        @if (Route::has('login'))
            <x-header>
                <ul class="nav nav-pills">
                    <li id="login" class="nav-item"><a href="{{ route('login') }}" id="link" class="nav-link text-decoration-none mr-3" aria-current="page">Login</a></li>
                    <span id="bar" class="mt-xl-2 mt-md-1"></span>
                    <li id="register" class="nav-item"><a href="{{ route('register') }}" id="link" class="nav-link me-5 text-decoration-none">Register</a></li>
                </ul>
            </x-header>

            <main>
                <x-carousel :nextEvents="$nextEvents"/>

                <x-tabs-component/>

                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="nextEvents" role="tabpanel" aria-labelledby="nextEvents-tab">
                        <div class="section-cards">
                            @foreach ($nextEvents as $event)
                                <x-card-component :event="$event"/>  
                            @endforeach

                            <div style="width: 50%; margin: 0 auto;">
                                {{ $nextEvents->links() }}
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pastEvents" role="tabpanel" aria-labelledby="pastEvents-tab">
                        <div class="section-cards" font-size: 16px;>
                            @foreach ($pastEvents as $event)
                                <x-card-component  :event="$event"/>  
                            @endforeach 
                            
                            <div style="width: 50%; margin: 0 auto; color: $color-dark-purple"  >
                                {{ $pastEvents->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        @endif
            
        @else
            <x-header>
                <ul class="nav nav-pills">
                    <li id="profile" class="nav-item"><a href="/home" id="link" class="nav-link text-decoration-none mr-3" aria-current="page">Profile</a></li>
                </ul>

                <ul class="nav nav-pills">
                    <li id="logOut" class="nav-item"><a href="../views/auth/login.blade.php" id="link" class="nav-link text-decoration-none mr-3" aria-current="page">Log Out</a></li>
                </ul>

            </x-header>
            <main>
                <x-carousel :nextEvents="$nextEvents"/>
                <x-tabs-component />
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="nextEvents" role="tabpanel" aria-labelledby="nextEvents-tab">
                        <div class="section-cards">
                            @foreach ($nextEvents as $event)
                                <x-card-component :event="$event"/>  

                            @endforeach
                            <div style="width: 50%; margin: 0 auto;">
                                {{ $nextEvents->links() }}
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pastEvents" role="tabpanel" aria-labelledby="pastEvents-tab">
                        <div class="section-cards" font-size: 16px;>
                            @foreach ($pastEvents as $event)
                                <x-card-component  :event="$event"/>  
                            
                                @endforeach
                            <div style="width: 50%; margin: 0 auto; color: $color-dark-purple"  >
                                {{ $pastEvents->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </main>
    @endguest

    <x-footer/>

    <script src="../js/app.js"></script>
</body>
</html>













{{-- @if(Session::has('message'))
                <div class="alert alert-dark alert-dismissible fade show position-absolute" role="alert">
                    <strong class="fs-5">No es posible esta acción!</strong>{{'message'}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif --}}