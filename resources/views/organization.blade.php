@extends('layouts.default')
@section('content')
   <div class="section-30">
       <div class="a-text-center a-p-b-12">
           <h1>ORGANIZACIONES</h1>
       </div>
       <livewire:organization />
   </div>
@endsection
@section('scripts')
<script>
    $('.ui .dropdown').dropdown({
        allowAdditions: true
    })
</script>
@endsection
