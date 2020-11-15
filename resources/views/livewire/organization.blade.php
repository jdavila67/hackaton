<div>
    <div class="org-search">
        <div class="ui grid">
            <div class="stackable one column row">
                <div class="column">
                    <div class="ui fluid icon input big">
                        <input type="text" placeholder="Search a very wide input..." list="tags" wire:model.debounce.750ms="search">
                        <i class="search icon"></i>
                    </div>
                    <span id="advance_search" class="advance_search">Busqueda Avanzada</span>
                    <datalist id="tags">
                        @foreach ($tags as $item)
                            <option value="{{$item->tag}}">
                        @endforeach
                    </datalist>
                </div>
            </div>
        </div>
    </div>
    <div class="ui grid">
        <div class="stackable five column row">
            @foreach ($organizations as $organization)
                <div class="column">
                    <div class="ui card a-m-15-auto">
                        <div class="image">
                            <img src="https://via.placeholder.com/240x160">
                        </div>
                        <div class="content">
                            <a href="{{route('home.organization.profile', ['id' => $organization->id])}}">{{$organization->name}}</a>
                            <div class="meta">
                                <span
                                    class="date">Unida el {{\Illuminate\Support\Carbon::createFromFormat('Y-m-d H:i:s', $organization->created_at)->year}}</span>
                            </div>
                            <div class="description">
                                {{\Illuminate\Support\Str::substr($organization->description, 0, 50) . "..."}}
                            </div>
                        </div>
                        <div class="extra content">
                            <a href="{{route('home.organization.profile', ['id' => $organization->id])}}">
                                <i class="fas fa-users"></i> {{count($organization->volunteers)}} Voluntarios
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="ui modal">
        <div class="header">Busqueda Avanzada</div>
        <div class="content">
            <form class="ui form" wire:submit.prevent="find">
                <div class="field">
                    <label>Nombre</label>
                    <input type="text" name="name" placeholder="Nombre de la Organización" wire:model.defer="title">
                </div>
                <div class="field">
                    <label>Pueblo</label>
                    <input type="text" name="city" placeholder="Pueblo" wire:model.defer="city">
                </div>
                <div class="field full">
                    <label>Tags</label>
                    <select multiple="" class="ui search fluid dropdown" wire:model.defer="search_tag">
                        @foreach ($tags as $item)
                            <option value="{{$item->tag}}">{{$item->tag}}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="ui button">Buscar</button>
                <div class="ui cancel button" onclick="_close()">Cancelar</div>
            </form>
        </div>
    </div>
    @section('scripts')
        <script>
            $('#advance_search').click(function() {
                $('.ui.modal').modal('show');
                $('.ui .dropdown').dropdown({
                    allowAdditions: true
                })
            });
            $('.ui .dropdown').dropdown({
                allowAdditions: true
            })
            function _close() {
                $('.ui.modal').modal('hide');
            }
        </script>
    @endsection
</div>
