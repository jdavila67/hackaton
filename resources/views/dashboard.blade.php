<x-app-layout>
    @section('header', 'Dashboard')
    <div class="a-m-15-auto">
        <div class="ui stackable four column grid">
            <div class="column">
                <div class="count">
                    <span  class="total">{{$organization}}</span>
                    <span class="title">Organizaciones</span>
                </div>
            </div>
            <div class="column">
                <div class="count">
                    <span  class="total">{{$voluntarios}}</span>
                    <span class="title">Voluntarios</span>
                </div>
            </div>
            <div class="column">
                <div class="count">
                    <span  class="total">{{$event}}</span>
                    <span class="title">Eventos</span>
                </div>
            </div>
            <div class="column">
                <div class="count">
                    <span  class="total">$ {{$donation}}</span>
                    <span class="title">Donaciones</span>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
