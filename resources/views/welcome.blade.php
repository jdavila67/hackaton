@extends('layouts.default')
@section('content')
@include('shared.inpact')
@include('shared.event', ['event' => $events])
@endsection
