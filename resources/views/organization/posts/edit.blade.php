<x-app-layout>
    @section('header', 'Modificar Publicación')
    <div class="ui container a-p-12">
        <form class="ui form" action="/portal/organizacion/posts/actualizar" method="POST">
            @csrf
            <input type="hidden" name="id" value="{{$post->id}}">
            <h3 class="ui dividing header">Información de la Publicación</h3>
            {{--Basic Info--}}

            <div class="field full">
                <label for="event_title">Título</label>
                <input type="text" placeholder="Título" name="title" required value="{{old('title', $post->title)}}">
            </div>
            <div class="three fields">
                <div class="field">
                    <label>Descripción</label>
                    <textarea  type="text-area"  name="description" placeholder="Descripción" required value="{{old('description' )}}">{{$post->description}}</textarea>
                </div>
            </div>
            {{--Basic Info--}}
            {{-- Action --}}
            <button class="ui primary button" type="submit">
                Guardar
            </button>
            <a class="ui button" href="{{route('post.index', ['id' => $post->org_id])}}">
                Regresar
            </a>
            {{-- Action --}}
        </form>
    </div>
    @section('scripts')
        <script>
            $(function () {
                $('#logo_input').change(function () {
                    var input = this;
                    var url = $(this).val();
                    var ext = url.substring(url.lastIndexOf('.') + 1).toLowerCase();
                    if (input.files && input.files[0] && (ext == "gif" || ext == "png" || ext == "jpeg" || ext == "jpg")) {
                        var reader = new FileReader();
                        reader.onload = function (e) {
                            $('#logo').attr('src', e.target.result);
                        }
                        reader.readAsDataURL(input.files[0]);
                    } else {
                        $('#logo').attr('src', 'https://via.placeholder.com/150');
                    }
                });

            });
        </script>
    @endsection
</x-app-layout>
