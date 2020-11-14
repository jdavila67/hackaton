<x-app-layout>
    @section('header', 'Actualizar Organización')
    <div class="ui container a-p-12">
        <form class="ui form">
            <h3 class="ui dividing header">Información Basica</h3>
            {{--Basic Info--}}
            <div class="one fields">
                <div class="field">
                    <label for="logo_input">
                        Logo
                        <img width="150px" id="logo" src="https://via.placeholder.com/150"/>
                        <input id="logo_input" type="file" style="display: none">
                    </label>
                </div>
            </div>
            <div class="field full">
                <label>Nombre</label>
                <input type="text" placeholder="Nombre" name="name" required>
            </div>
            <div class="three fields">
                <div class="field">
                    <label>Correo Electrónico</label>
                    <input type="email" name="email" placeholder="Correo Electrónico" required>
                </div>
                <div class="field">
                    <label>Teléfono</label>
                    <input type="text" name="phone_1" placeholder="Teléfono" required>
                </div>
                <div class="field">
                    <label>Teléfono 2</label>
                    <input type="text" name="phone_2" placeholder="Teléfono" required>
                </div>
            </div>
            <div class="two fields">
                <div class="field">
                    <label>Mision</label>
                    <textarea name="mission"></textarea>
                </div>
                <div class="field">
                    <label>Vision</label>
                    <textarea name="vision"></textarea>
                </div>
            </div>
            <div class="field">
                <label>Descripción</label>
                <textarea name="description"></textarea>
            </div>
            {{--Basic Info--}}
            {{-- Action --}}
            <button class="ui primary button" type="submit">
                Guardar
            </button>
            <a class="ui button" href="{{route('organization')}}">
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
