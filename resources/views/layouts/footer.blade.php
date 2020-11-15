<style>.footer.segment {
        padding: 5em 0em;
    }</style>
    <div class="ui inverted vertical footer segment">
        <div class="ui container">
            <div
                class="ui stackable inverted divided equal height stackable grid"
            >
                <div class="three wide column">
                    <h4>Menu</h4>
                    <div class="ui inverted link list">
                        <a class="item" href="{{route('home')}}">Inicio</a>
                        <a class="item" href="{{route('home.about')}}">Sobre Nosotros</a>
                        <a class="item" href="{{route('home.organization')}}">Organizaciones</a>
                        <a class="item" href="{{route('home.post')}}">Publicaciones</a>
                    </div>
                </div>
                <div class="three wide column">
                    <h4>Servicios</h4>
                    <div class="ui inverted link list">
                        <a class="item" href="{{route('home.organization')}}">Organizaciones</a>
                        <a class="item" href="{{route('home.post')}}">Eventos</a>
                        <a class="item" href="{{route('home.post')}}">Donaciones</a>
                    </div>
                </div>
                <div class="seven wide column">
                    <h4>Inscríbete</h4>
                    <div class="ui action input">
                        <input type="text" placeholder="Correo Electrónico">
                        <button class="ui button">Enviar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

