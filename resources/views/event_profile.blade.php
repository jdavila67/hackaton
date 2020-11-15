@extends('layouts.default')
@section('content')
    <div class="section-30">
        <div class="ui container">
            <div class="profile">
                <div class="ui grid">
                    <div class="doubling two column row">
                        <div class="column">
                            <img style="width: 320px; height: 260px" class="ui image" src="https://via.placeholder.com/320x160">
                        </div>
                        <div class="column a-text-left">
                            <div class="profile-title">
                                <h2>{{$data->event_title}}</h2>
                                <p>{{$data->organizations->name}}</p>
                                <div>
                                    @foreach ($data->organizations->organizationTags as $tag)
                                        <span class="a-tag">{{$tag->tag}}</span>
                                    @endforeach
                                </div>
                            </div>
                            <div class="profile-address py-6">
                                {{$data->event_desc}}
                            </div>
                            <div class="ui grid">
                                <div class="doubling two column row">
                                    <div class="column">
                                        <p><i class="far fa-calendar-alt"></i> {{$data->event_date}}</p>
                                    </div>
                                    <div class="column">
                                        <p><i class="far fa-clock"></i> {{$data->event_time_from}} hasta {{$data->event_time_to}}</p>
                                    </div>
                                </div>
                            </div>
                            <br/>
                            <div class="a-m-12">
                                <button class="ui primary button">
                                    Registrarte
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                @if ($organizations && count($organizations) > 0)
                    <h3>Organizaciones Relacionada</h3>
                @endif
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
            </div>
        </div>
    </div>
@endsection
