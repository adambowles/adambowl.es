<div class="navbar-fixed">
  <nav class="white" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="#" class="brand-logo">Adam Bowles</a>
      <ul class="right hide-on-med-and-down">
        @include('materialize.nav.list')
      </ul>

      <ul id="nav-mobile" class="side-nav">
        @include('materialize.nav.list', ['mobile' => 'true'])
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>
</div>
