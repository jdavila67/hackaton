@extends('layouts.default')
@section('content')
    <livewire:organization />
@endsection
@section('scripts')
<script>
    $('.ui .dropdown').dropdown({
        allowAdditions: true
    })
</script>
@endsection
