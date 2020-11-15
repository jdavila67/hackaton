<section class="events">
    <div class="ui container a-text-center">
        <h1 class="section-title">Nuestro Eventos Recientes</h1>
        <p class="section-sub-title">Nuestros esfuerzos han llevado a resultados notables:</p>
        <div class="inpact-content">
            <div class="ui grid">
                <div class="stackable three column row">
                    @foreach ($events as $item)
                        <div class="column">
                            <div class="ui card a-m-15-auto">
                                <div class="image">
                                    <img src="https://via.placeholder.com/240x160">
                                </div>
                                <div class="content">
                                    <a href="">{{$item->event_title}}</a>
                                    <div class="meta">
                                        <span  class="date"></span>
                                    </div>
                                    <div class="description">
                                        {{\Illuminate\Support\Str::substr($item->event_desc, 0, 50) . "..."}}
                                    </div>
                                </div>
                                <div class="content">
                                    {{date('m/d/Y', strtotime($item->event_date))}} {{date(' h:ma', strtotime($item->event_time_from))}} - {{date(' h:ma', strtotime($item->event_time_to))}}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
