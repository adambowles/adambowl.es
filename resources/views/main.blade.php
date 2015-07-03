<!doctype html>
<html lang="en">
  <head>
    @include('partials.head')
  </head>

  <body data-spy="scroll" data-target="nav" data-offset="80">
    @include('partials.header')

    @include('partials.navbar')

    @include('partials.about')
    @include('partials.skills')
    @include('partials.portfolio')
    @include('partials.experience')
    @include('partials.contact')

    @include('partials.footer')

    @include('partials.assets.js')
  </body>
</html>
