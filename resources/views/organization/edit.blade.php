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
                <input type="text" placeholder="Nombre" name="name" required
                       value="{{old('name', $organization->name)}}">
            </div>
            <div class="three fields">
                <div class="field">
                    <label>Correo Electrónico</label>
                    <input type="email" name="email" placeholder="Correo Electrónico" required
                           value="{{old('email', $organization->email)}}">
                </div>
                <div class="field">
                    <label>Teléfono</label>
                    <input type="text" name="phone_1" placeholder="Teléfono" required
                           value="{{old('phone_1', $organization->phone_number_one)}}">
                </div>
                <div class="field">
                    <label>Teléfono 2</label>
                    <input type="text" name="phone_2" placeholder="Teléfono"
                           value="{{old('phone_2', $organization->phone_number_two)}}">
                </div>
            </div>
            <div class="field full">
                <label>Tags</label>
                <select name="skills" multiple="" class="ui search fluid dropdown">
                    @foreach ($organization->organizationTags as $item)
                        <option selected value="{{$item->tag}}">{{$item->tag}}</option>
                    @endforeach
                </select>
            </div>
            <div class="two fields">
                <div class="field">
                    <label>Mision</label>
                    <textarea name="mission">{{old('mission', $organization->mission)}}</textarea>
                </div>
                <div class="field">
                    <label>Vision</label>
                    <textarea name="vision">{{old('vision', $organization->vision)}}</textarea>
                </div>
            </div>
            <div class="field">
                <label>Descripción</label>
                <textarea name="description">{{old('description', $organization->description)}}</textarea>
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
            $('.ui .dropdown').dropdown({
                allowAdditions: true
            })
        </script>
    @endsection
</x-app-layout>
