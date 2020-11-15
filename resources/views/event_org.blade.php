@extends('layouts.default')
@section('content')
    <div class="section-30">
        <div class="color-2 a-text-center a-p-b-12">
            <h1>EVENTOS</h1>
        </div>
        <div class="ui grid">
            <div class="stackable five column row">
                @foreach ($events as $item)
                    <div class="column">
                        <div class="ui card a-m-15-auto">
                            <div class="image">
                                <img src="https://via.placeholder.com/240x160">
                            </div>
                            <div class="content">
                                <a href="{{route('home.event.profile', ['id' => $item->id])}}">{{$item->event_title}}</a>
                                <div class="meta">
                                    <span class="date">{{$item->organizations->name}}</span>
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
@endsection
