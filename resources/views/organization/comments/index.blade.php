<x-app-layout>
    @section('header', 'Comentarios')
    @section('action')
        <div class="ui grid a-p-t-b-6 a-text-right">
            <div class="column">
                <a class="ui button primary" href="{{route('post.index', ['id' => $id])}}">
                    Regresar
                </a>
            </div>
        </div>
    @endsection
    <table class="ui striped table">
        <thead>
        <tr>
            <th>Comentarios</th>
            <th>Fecha</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach ($comments as $commentario)
            <tr>
                <td data-label="Comentarios">{{$commentario->comment}} </td>
                <td data-label="Fecha">{{$commentario->created_at}}</td>
                <td>
                    <div class="ui dropdown">
                        <div class="text">Acción</div>
                        <i class="dropdown icon"></i>
                        <div class="menu">
                            <div class="item"><a href="#" onclick="_delete('{{$commentario->id}}')">Eliminar</a></div>
                        </div>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="ui mini modal">
        <div class="ui icon header">
            <i class="Trash icon"></i>
            Eliminar Comentario
        </div>
        <div class="content">
            <p>¿Estás seguro de que quieres eleminar este comentario?</p>
        </div>
        <div class="actions">
            <div class="ui red cancel button">
                <i class="remove icon"></i>
                No
            </div>
            <div class="ui green ok button">
                <i class="checkmark icon"></i>
                Yes
            </div>
        </div>
    </div>
    @section('scripts')
        <script>
            $('.ui .dropdown').dropdown();
            function _delete(id) {
                $('.ui.mini.modal') .modal('show');
            }
        </script>
    @endsection
</x-app-layout>
