@extends('layouts.default')
@section('content')
    <div class="ui container">
        <div class="profile">
            <div class="ui grid">
                <div class="doubling two column row">
                    <div class="column">
                        <img style="width: 320px; height: 260px" class="ui image" src="{{$data->org_logo}}">
                    </div>
                    <div class="column a-text-left">
                        <div class="profile-title">
                            <h2>{{$data->name}}</h2>
                        </div>
                        <div class="profile-address py-6">
                            <h5>{{$data->addresses->address_line_one }},</h5>
                            <h5>{{$data->addresses->city . ", " . $data->addresses->state . " " . $data->addresses->country . ", " . $data->addresses->zip_code}}</h5>
                        </div>
                        <div class="ui grid">
                            <div class="doubling two column row">
                                <div class="column">
                                    <p><i class="fas fa-phone-alt"></i> {{$data->phone_number_one}}</p>
                                </div>
                                <div class="column">
                                    <p><i class="fas fa-phone-alt"></i> {{$data->phone_number_two}}</p>
                                </div>
                            </div>
                            <div class="doubling one column row">
                                <div class="column">
                                    <p><i class="far fa-envelope"></i> <a
                                            href="mail:{{$data->email}}">{{$data->email}}</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="profile-about">
                <h3>Sobre Nosotros</h3>
                <p>{{$data->description}}</p>
            </div>
            <div class="ui grid">
                <div class="doubling two column row">
                    <div class="column">
                        <h3>Misión</h3>
                        <p>{{$data->mission}}</p>
                    </div>
                    <div class="column">
                        <h3>Vision</h3>
                        <p>{{$data->vision}}</p>
                    </div>
                </div>
            </div>

            {{--Equipo--}}
            <div class="profile-volunatarios">
                <h3>Nuestro Equipo</h3>
                @if ($data->organizationMembers)
                    <div class="ui grid">
                        <div class="four column row stackable">
                            @foreach ($data->organizationMembers as $item)
                                <div class="column a-m-12">
                                    <div class="ui fluid card">
                                        <div class="image">
                                            <img src="{{$item->picture}}">
                                        </div>
                                        <div class="content a-text-center">
                                            <h3>{{$item->name}}</h3>
                                            <span>{{$item->role}}</span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            @if ($data->volunteers)
                                @foreach ($data->volunteers as $item)
                                    <div class="column a-m-12">
                                        <div class="ui fluid card">
                                            <div class="image">
                                                <img src="https://via.placeholder.com/150">
                                            </div>
                                            <div class="content a-text-center">
                                                <h3>{{$item->name}}</h3>
                                                <span>Voluntario</span>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                @endif
            </div>
            {{--Equipo--}}
        </div>
    </div>
@endsection
