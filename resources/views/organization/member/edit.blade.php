<x-app-layout>
    @section('header', 'Actualizar Miembro')
    <div class="ui container a-p-12">
        <form class="ui form">
            <h3 class="ui dividing header">Información Basica</h3>
            {{--Basic Info--}}
            <div class="one fields">
                <div class="field">
                    <label for="logo_input">
                        Imagen
                        <img width="150px" id="logo" src="https://via.placeholder.com/150"/>
                        <input id="logo_input" type="file" style="display: none">
                    </label>
                </div>
            </div>
            <div class="field full">
                <label>Nombre</label>
                <input type="text" placeholder="Nombre" name="name" required value="{{old('name', $member->name)}}">
            </div>
            <div class="field full">
                <label>Rol</label>
                <input type="text" placeholder="Rol" name="role" required value="{{old('role', $member->role)}}">
            </div>
            {{--Basic Info--}}
            {{-- Action --}}
            <button class="ui primary button" type="submit">
                Guardar
            </button>
            <a class="ui button" href="{{route('member.index', ['id' => $member->org_id])}}">
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
