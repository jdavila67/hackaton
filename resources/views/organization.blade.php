@extends('layouts.default')
@section('content')
    <div class="ui grid">
        <div class="stackable four column row">
            @foreach ($organizations as $organization)
                <div class="column">
                    <div class="ui card a-m-5-auto">
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
                            <a>
                                <i class="fas fa-users"></i> {{count($organization->volunteers)}} Voluntarios
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
