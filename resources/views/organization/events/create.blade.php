<x-app-layout>
    @section('header', 'Actualizar Evento')
    <div class="ui container a-p-12">
        <form class="ui form">
            <h3 class="ui dividing header">Información Basica</h3>
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
                <label for="event_title">Titulo</label>
                <input type="text" placeholder="Titulo" name="event_title" required value="{{old('event_title')}}">
            </div>
            <div class="three fields">
                <div class="field">
                    <label>Fecha</label>
                    <input type="date" name="event_date" placeholder="Fecha" required value="{{old('event_date')}}">
                </div>
                <div class="field">
                    <label>Hora Desde</label>
                    <input type="time" name="event_time_from" placeholder="Desde" required value="{{old('event_time_from')}}">
                </div>
                <div class="field">
                    <label>Hora Hasta</label>
                    <input type="time" name="event_time_to" placeholder="Hasta" required value="{{old('event_time_to')}}">
                </div>
            </div>
            <div class="fields two">
                <div class="field full">
                    <label for="event_title">Localización</label>
                    <input type="text" placeholder="Localización" name="event_location" required value="{{old('event_location')}}">
                </div>
                <div class="field full">
                    <label for="event_title">Coordenadas</label>
                    <input type="text" placeholder="Coordenadas" name="event_coordinates" required value="{{old('event_coordinates')}}">
                </div>
            </div>
            <div class="field">
                <label>Descripción</label>
                <textarea name="event_desc">{{old('event_desc')}}</textarea>
            </div>
            {{--Basic Info--}}
            {{-- Action --}}
            <button class="ui primary button" type="submit">
                Guardar
            </button>
            <a class="ui button" href="{{route('event.index', ['id' => $id])}}">
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
