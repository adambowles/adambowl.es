@if(isset($mobile) == 'true')
  @include('materialize.nav.item', ['text' => 'Top',   'url' => '#top'])
@endif
@include('materialize.nav.item', ['text' => 'About Me',   'url' => '#about'])
@include('materialize.nav.item', ['text' => 'My Skills',  'url' => '#skills'])
@include('materialize.nav.item', ['text' => 'Portfolio',  'url' => '#portfolio'])
@include('materialize.nav.item', ['text' => 'Experience', 'url' => '#experience'])
@include('materialize.nav.item', ['text' => 'Contact',    'url' => '#contact'])
