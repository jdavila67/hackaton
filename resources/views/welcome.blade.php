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
    <div class="ui inverted vertical center aligned segment">
        <div class="ui active text container">
            <h1 class="ui inverted header">Example headline.</h1>
            <p>
                Note: If you're viewing this page via a <code>file://</code> URL,
                the "next" and "previous" Glyphicon buttons on the left and right
                might not load/display properly due to web browser security rules.
            </p>
            <div class="ui huge primary button">Sign up today</div>
        </div>
    </div>
    <div class="ui inverted vertical center aligned segment">
        <div class="ui active text container">
            <h1 class="ui inverted header">Another example headline.</h1>
            <p>
                Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec
                id elit non mi porta gravida at eget metus. Nullam id dolor id nibh
                ultricies vehicula ut id elit.
            </p>
            <div class="ui huge primary button">Learn more</div>
        </div>
    </div>
    <div class="ui inverted vertical center aligned segment">
        <div class="ui active text container">
            <h1 class="ui inverted header">One more for good measure</h1>
            <p>
                Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec
                id elit non mi porta gravida at eget metus. Nullam id dolor id nibh
                ultricies vehicula ut id elit.
            </p>
            <div class="ui huge primary button">Browse gallery</div>
        </div>
    </div>
</div>
<div class="ui container">
    <div class="ui vertical segment">
        <div class="ui three column stackable center aligned grid container">
            <div class="column">
                <img
                    class="ui centered small circular image"
                    src="/rootstatic/templates/bootstrap/carousel/static/images/wireframe/square-image.png"
                />
                <h1 class="ui header">Heading</h1>
                <p>
                    Donec sed odio dui. Etiam porta sem malesuada magna mollis
                    euismod. Nullam id dolor id nibh ultricies vehicula ut id elit.
                    Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
                    Praesent commodo cursus magna.
                </p>
                <div class="ui basic button">View details &raquo;</div>
            </div>
            <div class="column">
                <img
                    class="ui centered small circular image"
                    src="/rootstatic/templates/bootstrap/carousel/static/images/wireframe/square-image.png"
                />
                <h1 class="ui header">Heading</h1>
                <p>
                    Donec sed odio dui. Etiam porta sem malesuada magna mollis
                    euismod. Nullam id dolor id nibh ultricies vehicula ut id elit.
                    Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
                    Praesent commodo cursus magna.
                </p>
                <div class="ui basic button">View details &raquo;</div>
            </div>
            <div class="column">
                <img
                    class="ui centered small circular image"
                    src="/rootstatic/templates/bootstrap/carousel/static/images/wireframe/square-image.png"
                />
                <h1 class="ui header">Heading</h1>
                <p>
                    Donec sed odio dui. Etiam porta sem malesuada magna mollis
                    euismod. Nullam id dolor id nibh ultricies vehicula ut id elit.
                    Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
                    Praesent commodo cursus magna.
                </p>
                <div class="ui basic button">View details &raquo;</div>
            </div>
        </div>
    </div>
    <div class="ui vertical segment">
        <div class="ui stackable grid">
            <div class="ten wide column">
                <h1 class="ui header">
                    First featurette heading.
                    <span class="sub">It'll blow your mind.</span>
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
                    src="/rootstatic/templates/bootstrap/carousel/static/images/wireframe/square-image.png"
                />
            </div>
        </div>
    </div>
    <div class="ui vertical segment">
        <div class="ui stackable grid">
            <div class="six wide column">
                <img
                    class="ui image"
                    src="/rootstatic/templates/bootstrap/carousel/static/images/wireframe/square-image.png"
                />
            </div>
            <div class="ten wide column">
                <h1 class="ui header">
                    Oh yeah, <span class="sub">it's that good.</span>
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
                <h1 class="ui header">
                    And lastly, <span class="sub">this one.</span>
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
                    src="/rootstatic/templates/bootstrap/carousel/static/images/wireframe/square-image.png"
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
