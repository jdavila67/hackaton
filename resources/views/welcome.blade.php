@extends('layouts.default')
@section('content')

    <style type="text/css">
        body {
            -webkit-font-smoothing: antialiased;
            -moz-font-smoothing: grayscale;
        }

        .ui.inverted.segment {
            background-color: #777;
        }

        .ui.vertical.segment:not(.inverted) {
            padding-top: 6rem;
            padding-bottom: 6rem;
        }

        .six.wide.column img {
            width: 100%;
        }

        .ui.borderless.inverted.menu {
            background-color: #2f2f2f;
            border-radius: 4px;
            flex-wrap: wrap;
        }

        .ui.borderless.inverted.menu .active.item {
            background-color: black;
        }

        span.sub {
            color: rgba(0, 0, 0, 0.6);
        }

        .ten.wide.column h1 {
            font-size: 3rem;
        }

        .ten.wide.column p {
            font-size: 1.5rem;
        }

        p code {
            color: #c7254e;
            background-color: #f9f2f4;
            border-radius: 4px;
            margin-left: 0.5rem;
            margin-right: 0.5rem;
        }

        .ui.tablet.computer.only.padded.grid {
            position: absolute;
            z-index: 8;
            width: 100%;
            top: 1rem;
        }

        .ui.mobile.only.grid .ui.menu .ui.vertical.menu {
            display: none;
        }

        .ui.mobile.only.grid .ui.vertical.menu .dropdown.icon {
            float: unset;
        }

        .ui.mobile.only.grid .ui.vertical.menu .dropdown.icon:before {
            content: "\f0d7";
        }

        .ui.mobile.only.grid .ui.vertical.menu .ui.dropdown.item .menu {
            position: static;
            width: 100%;
            background-color: unset;
            border: none;
        }

        .ui.mobile.only.grid .ui.vertical.menu .ui.dropdown.item {
            background-color: rgb(47, 47, 47);
        }

        .ui.mobile.only.grid .ui.vertical.menu .ui.dropdown.item .menu {
            margin-top: 6px;
        }

        .ui.mobile.only.grid .ui.vertical.menu .ui.dropdown.item .menu .header,
        .ui.mobile.only.grid .ui.vertical.menu .ui.dropdown.item .menu .item {
            color: rgba(255, 255, 255, 0.9) !important;
        }

        .slide .ui.inverted.vertical.segment {
            padding-top: 16rem;
            padding-bottom: 4rem;
            height: 600px;
        }

        .slide .ui.text.container {
            max-width: 70%;
        }

        .slick-dotted.slick-slider {
            margin-bottom: 0;
        }

        .slick-prev.slick-arrow {
            padding-left: 8rem;
            padding-right: calc(8rem + 20px);
            display: inline-block;
            height: 100%;
            z-index: 32;
            background: linear-gradient(
                to right,
                rgba(0, 0, 0, 0.5) 0%,
                rgba(0, 0, 0, 0.0001) 100%
            );
        }

        .slick-next.slick-arrow {
            padding-left: 8rem;
            padding-right: calc(8rem + 20px);
            display: inline-block;
            height: 100%;
            z-index: 32;
            background: linear-gradient(
                to left,
                rgba(0, 0, 0, 0.5) 0%,
                rgba(0, 0, 0, 0.0001) 100%
            );
        }

        @media only screen and (max-width: 767px) {
            .slick-prev.slick-arrow {
                padding-left: 4rem;
                padding-right: calc(4rem + 20px);
            }

            .slick-next.slick-arrow {
                padding-left: 4rem;
                padding-right: calc(4rem + 20px);
            }
        }

        .slick-dots {
            bottom: 15px;
        }

        .slide .ui.segment h1 {
            font-size: 3rem;
        }

        .slide .ui.segment p {
            font-size: 1.5rem;
        }
    </style>

    <div class="slide">
        <div class="ui inverted vertical center aligned segment"
             style="background-image: url('{{url('/images/street-2248101_1920.jpg')}}'); background-size: cover; background-position: center;">
            <div class="ui active text container">
                <h1>Titulo</h1>
                <p>
                    Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec
                    id elit non mi porta gravida at eget metus. Nullam id dolor id nibh
                    ultricies vehicula ut id elit.
                </p>
                <a href="{{route('home.event')}}" class="ui huge primary button">Eventos</a>
            </div>
        </div>
        <div class="ui inverted vertical center aligned segment"
             style="background-image: url('{{url('/images/person-1245789_1920.jpg')}}'); background-size: cover; background-position: center;">
            <div class="ui active text container">
                <h1>Titulo</h1>
                <p>
                    Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec
                    id elit non mi porta gravida at eget metus. Nullam id dolor id nibh
                    ultricies vehicula ut id elit.
                </p>
                <a href="{{route('home.organization')}}" class="ui huge primary button">Organizaciones</a>
            </div>
        </div>
        <div class="ui inverted vertical center aligned segment"
             style="background-image: url('{{url('/images/animal-welfare-1119436_1920.jpg')}}'); background-size: cover; background-position: center;">
            <div class="ui active text container">
                <h1>Titulo</h1>
                <p>
                    Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec
                    id elit non mi porta gravida at eget metus. Nullam id dolor id nibh
                    ultricies vehicula ut id elit.
                </p>
                <a href="{{route('home.event')}}" class="ui huge primary button">Eventos</a>
            </div>
        </div>
    </div>
    <div class="ui container">
        <div class="ui vertical segment">
            <div class="ui three column stackable center aligned grid container">
                <div class="column">
                    <div><i class="color-2 fas fa-user-tie fa-5x"></i></div>
                    <h2 class="ui header">VOLUNTARIOS</h2>
                    <p>
                        Donec sed odio dui. Etiam porta sem malesuada magna mollis
                        euismod. Nullam id dolor id nibh ultricies vehicula ut id elit.
                    </p>
                    <a href="{{route('home.organization')}}" class="ui basic button">ORGANIZACIONES &raquo;</a>
                </div>
                <div class="column">
                    <div><i class="color-2 fas fa-hands-helping fa-5x"></i></div>
                    <h1 class="ui header">PARTICIPA</h1>
                    <p>
                        Donec sed odio dui. Etiam porta sem malesuada magna mollis
                        euismod. Nullam id dolor id nibh ultricies vehicula ut id elit.
                    </p>
                    <a href="{{route('home.event')}}" class="ui basic button">EVENTOS &raquo;</a>
                </div>
                <div class="column">
                    <div><i class="color-2 fas fa-hand-holding-usd fa-5x"></i></div>
                    <h1 class="ui header">DONACIONES</h1>
                    <p>
                        Donec sed odio dui. Etiam porta sem malesuada magna mollis
                        euismod. Nullam id dolor id nibh ultricies vehicula ut id elit.
                    </p>
                    <a href="{{route('home.donation')}}" class="ui primary button">DONACIONES &raquo;</a>
                </div>
            </div>
        </div>
        <div class="ui vertical segment">
            <div class="ui stackable grid">
                <div class="ten wide column">
                    <h1 class="ui header color-2">
                        Ayudanos a realizar un cambio
                    </h1>
                    <p>
                        Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id
                        ligula porta felis euismod semper. Praesent commodo cursus magna,
                        vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus
                        commodo.
                    </p>
                </div>
                <div class="six wide right aligned column">
                    <img
                        class="ui image"
                        src="{{url('images/joel-muniz-A4Ax1ApccfA-unsplash.jpg')}}"
                    />
                </div>
            </div>
        </div>
        <div class="ui vertical segment">
            <div class="ui stackable grid">
                <div class="six wide column">
                    <img
                        class="ui image"
                        src="{{url('images/larm-rmah-AEaTUnvneik-unsplash.jpg')}}"
                    />
                </div>
                <div class="ten wide column">
                    <h1 class="ui header color-2">
                        La felicidad de muchas personan pueden depender de nosotros
                    </h1>
                    <p>
                        Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id
                        ligula porta felis euismod semper. Praesent commodo cursus magna,
                        vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus
                        commodo.
                    </p>
                </div>
            </div>
        </div>
        <div class="ui vertical segment">
            <div class="ui stackable grid">
                <div class="ten wide column">
                    <h1 class="ui header color-2">
                        Por mas poco que sea, puede ayudar a muchas personas
                    </h1>
                    <p>
                        Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id
                        ligula porta felis euismod semper. Praesent commodo cursus magna,
                        vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus
                        commodo.
                    </p>
                </div>
                <div class="six wide right aligned column">
                    <img
                        class="ui image"
                        src="{{url('images/kat-yukawa-K0E6E0a0R3A-unsplash.jpg')}}"
                    />
                </div>
            </div>
        </div>
    </div>
    @include('shared.inpact')
    @include('shared.event', ['event' => $events])
@section("scripts")
    <script> $(".slide").slick({
            autoplay: true,
            dots: true,
            speed: 500
        });</script>
@endsection
@endsection
