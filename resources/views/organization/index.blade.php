<x-app-layout>
    @section('header', 'Organización')
    @section('action')
        <div class="ui grid a-p-t-b-6 a-text-right">
            <div class="column">
                <a class="ui button primary" href="{{route('organization.create')}}">
                    <i class="fas fa-plus"></i> Crear
                </a>
            </div>
        </div>
    @endsection
    <table class="ui striped table">
        <thead>
        <tr>
            <th>Nombre</th>
            <th>Email</th>
            <th>Teléfono</th>
            <th>Fecha de Creación</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td data-label="Name">
                <h4 class="ui image header">
                    <img src="https://via.placeholder.com/150" class="ui mini rounded image">
                    <div class="content">
                        Lena
                        <div class="sub header">Human Resources</div>
                    </div>
                </h4>
            </td>
            <td data-label="Age">24</td>
            <td data-label="Job">Engineer</td>
            <td data-label="Job">Engineer</td>
            <td>
                <div class="ui dropdown">
                    <div class="text">Acción</div>
                    <i class="dropdown icon"></i>
                    <div class="menu">
                        <div class="item">Modificar</div>
                    </div>
                </div>
            </td>
        </tr>
        </tbody>
    </table>
    @section('scripts')
        <script>
            $('.ui .dropdown').dropdown();
        </script>
    @endsection
</x-app-layout>
