@extends('layouts.default')
@section('content')
    <div class="ui container">
        <div class="section-30">
            <div class="color-2 a-text-center a-p-b-12">
                <h1>DONACIONES</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent id quam commodo, bibendum mi vel,
                    ultrices quam. Quisque ultrices purus odio. Curabitur sodales eleifend congue. Phasellus libero eros,
                    convallis at arcu vitae, aliquam pellentesque nisl. Aliquam vitae ultricies lectus. Curabitur non
                    eleifend sapien, a feugiat neque. Praesent a turpis suscipit, bibendum augue ac, sodales nisl. Nunc
                    dignissim enim quam, vel malesuada ligula tincidunt ac. Ut vitae ante quis purus consectetur laoreet in
                    sit amet lacus.</p>
            </div>
           <div class="a-m-15-auto">
               <div class="ui stackable four column grid">
                   <div class="column">
                       <div class="donation">
                           <span>$1.00</span>
                       </div>
                   </div>
                   <div class="column">
                       <div class="donation">
                           <span>$5.00</span>
                       </div>
                   </div>
                   <div class="column">
                       <div class="donation">
                           <span>$10.00</span>
                       </div>
                   </div>
                   <div class="column">
                       <div class="donation">
                           <span>OTRA</span>
                       </div>
                   </div>
               </div>
           </div>
        </div>
    </div>
    @include('shared.inpact')
@endsection
