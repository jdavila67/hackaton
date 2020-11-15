<x-app-layout>
    @section('header', 'Crear Voluntario')
    <div class="ui container a-p-12">
        <form class="ui form">
            <h3 class="ui dividing header">Información del Voluntario</h3>
            {{--Basic Info--}}
            <div class="one fields">
                <div class="field">
                    <label for="logo_input">
                        <img width="360px" id="logo" src="https://via.placeholder.com/360x220"/>
                        <input id="logo_input" type="file" style="display: none">
                    </label>
                </div>
            </div>
            <div class="field full">
                <label for="event_title">Nombre</label>
                <input type="text" placeholder="Nombre" name="name" required value="{{old('name')}}">
            </div>
            <div class="three fields">
                <div class="field">
                    <label>Numero de Teléfono</label>
                    <input type="tel" name="phone_number" placeholder="Numero de Teléfono" required value="{{old('phone_number')}}">
                </div>
                <div class="field">
                    <label>Email</label>
                    <input type="email" name="email" placeholder="Email" required value="{{old('email')}}">
                </div>
            </div>
            {{--Basic Info--}}
            {{-- Action --}}
            <button class="ui primary button" type="submit">
                Guardar
            </button>
            <a class="ui button" href="{{route('volunteer.index', ['id' => $id])}}">
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
