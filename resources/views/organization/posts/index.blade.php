<x-app-layout>
    @section('header', 'Publicaciones')
    @section('action')
        <div class="ui grid a-p-t-b-6 a-text-right">
            <div class="column">
                <a class="ui button primary" href="{{route('organization')}}">
                    Regresar
                </a>
                <a class="ui button primary" href="{{route('post.create', ['id' => $id])}}">
                    <i class="fas fa-plus"></i> Crear
                </a>
            </div>
        </div>
    @endsection
    <table class="ui striped table">
        <thead>
        <tr>
            <th>Titulo</th>
            <th>Descripción</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach ($posts as $post)
            <tr>
                <td data-label="Título">{{$post->title}}
                </td>
                <td data-label="Descripción">{{$post->description}}</td>
                <td>
                    <div class="ui dropdown">
                        <div class="text">Acción</div>
                        <i class="dropdown icon"></i>
                        <div class="menu">
                            <div class="item"><a href="{{route('post.edit', ['id' => $post->id, 'org' => $id])}}">Modificar</a></div>
                            <div class="item"><a href="#" onclick="_delete('{{$post->id}}')">Eliminar</a></div>
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
            Eliminar Voluntario
        </div>
        <div class="content">
            <p>¿Estás seguro de que quieres eleminar esta Publicación?</p>
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
