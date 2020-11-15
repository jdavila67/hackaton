<div class="header">
    <div class="header-top">
        <div class="logo-header">
            <img src="{{url('/images/logo.png')}}" alt="logo"/>
        </div>
        <div class="social">
            <ul>
                <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                <li><a href=""><i class="fab fa-instagram"></i></a></li>
            </ul>
        </div>
    </div>
    <div class="header-menu">
        <ul>
            <li><a class="{{request()->routeIs('home') ? "active" : ""}}" href="{{route('home')}}">Inicio</a></li>
            <li><a class="{{request()->routeIs('home.about') ? "active" : ""}}" href="{{route('home.about')}}">Sobre Nosotros</a></li>
            <li><a class="{{request()->routeIs('home.organization') ? "active" : ""}}" href="{{route('home.organization')}}">Organizaciones</a></li>
            <li><a class="{{request()->routeIs('home.post') ? "active" : ""}}" href="{{route('home.post')}}">Publicaciones</a></li>
            <li><a class="{{request()->routeIs('home.event') ? "active" : ""}}" href="{{route('home.event')}}">Eventos</a></li>
            <li><a class="{{request()->routeIs('home.donation') ? "active" : ""}}" href="{{route('home.donation')}}">Donaciones</a></li>
        </ul>
    </div>
</div>
