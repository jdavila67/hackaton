<x-app-layout>
    @section('header', 'Donaciones')
    <table class="ui striped table">
        <thead>
        <tr>
            <th>Cantidad</th>
            <th>Fecha de Creación</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach ($data as $item)
            <tr>
                <td data-label="Email">{{$item->amount}}</td>
                <td data-label="Job">{{$item->created_at}}</td>
                <td>
                    <div class="ui dropdown">
                        <div class="text">Acción</div>
                        <i class="dropdown icon"></i>
                        <div class="menu">
                            <div class="item"><a>Distribuir</a></div>
                        </div>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    @section('scripts')
        <script>
            $('.ui .dropdown').dropdown();
        </script>
    @endsection
</x-app-layout>
