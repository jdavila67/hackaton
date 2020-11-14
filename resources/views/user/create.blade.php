<x-app-layout>
    @section('header', 'Crear Usuario')
    <div class="ui container a-p-12">
        <form class="ui form">
            <h3 class="ui dividing header">Información Basica</h3>
            {{--Basic Info--}}
          <div class="two fields">
              <div class="field full">
                  <label>Nombre</label>
                  <input type="text" placeholder="Nombre" name="name" required>
              </div>
              <div class="field full">
                  <label>Apellido</label>
                  <input type="text" placeholder="Apellido" name="last_name" required>
              </div>
          </div>
            <div class="two fields">
                <div class="field">
                    <label>Correo Electrónico</label>
                    <input type="email" name="email" placeholder="Correo Electrónico" required>
                </div>
                <div class="field">
                    <label>Teléfono</label>
                    <input type="text" name="phone_1" placeholder="Teléfono" required>
                </div>
            </div>
            {{--Basic Info--}}

            {{-- Permission --}}
            <h3 class="ui dividing header">Permisos</h3>

            {{-- Permission --}}

            {{-- Action --}}
            <button class="ui primary button" type="submit">
                Guardar
            </button>
            <a class="ui button" href="{{route('user')}}">
                Regresar
            </a>
            {{-- Action --}}
        </form>
    </div>
</x-app-layout>
