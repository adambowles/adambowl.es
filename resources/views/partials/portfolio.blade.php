<section id="Portfolio" class="content">

  <div class="container portfolio_title">
    <div class="section-title">
      <h2>Portfolio</h2>
      <h6>Lorem ipsum dolor sit amet, consectetur Morbi sagittis, sem quisci ipsum</h6>
    </div>
  </div>

  <div class="portfolio-top"></div>

  <div class="portfolio">
    <div id="filters" class="sixteen columns">
      <ul class="clearfix">
        <li>
          <a id="all" href="#" data-filter="*" class="active">
            <h5>All</h5>
          </a>
        </li>
        <li>
          <a class="" href="#" data-filter=".design">
            <h5>Design</h5>
          </a>
        </li>
        <li>
          <a class="" href="#" data-filter=".development">
            <h5>Development</h5>
          </a>
        </li>
        <li>
          <a class="" href="#" data-filter=".web">
            <h5>Web App</h5>
          </a>
        </li>
        <li>
          <a class="" href="#" data-filter=".mobile">
            <h5>Mobile App</h5>
          </a>
        </li>
      </ul>
    </div>

    <div class="isotope grid" style="position: relative; overflow: hidden; height: 480px;" id="portfolio_wrapper">

      @include('partials.portfolio.item', ['title' => 'Lorem', 'description' => 'Morbi pharetra turpis sit amet est convallis facilisis',  'backgroundURL' => 'http://lorempixel.com/output/city-q-c-825-550-3.jpg', 'class' => 'design'])
      @include('partials.portfolio.item', ['title' => 'Ipsum', 'description' => 'Fusce tristique, erat sed vehicula semper, leo ipsum',  'backgroundURL' => 'http://lorempixel.com/output/city-q-c-825-550-5.jpg', 'class' => 'development'])
      @include('partials.portfolio.item', ['title' => 'Dolor', 'description' => 'Quisque varius, sem vel malesuada rutrum, libero libero',  'backgroundURL' => 'http://lorempixel.com/output/transport-q-c-825-550-10.jpg', 'class' => 'web'])
      @include('partials.portfolio.item', ['title' => 'Sit', 'description' => 'Phasellus vel urna ut felis commodo tincidunt sit amet quis leo',  'backgroundURL' => 'http://lorempixel.com/output/transport-q-c-825-550-8.jpg', 'class' => 'mobile'])
      @include('partials.portfolio.item', ['title' => 'Amet', 'description' => 'Aliquam pretium consectetur dolor, quis lobortis ligula vestibulum non',  'backgroundURL' => 'http://lorempixel.com/output/technics-q-c-825-550-8.jpg', 'class' => 'design'])
      @include('partials.portfolio.item', ['title' => 'Consectetur', 'description' => 'Nunc ultricies quam nec turpis luctus vestibulum eu at purus',  'backgroundURL' => 'http://lorempixel.com/output/technics-q-c-825-550-2.jpg', 'class' => 'development'])
      @include('partials.portfolio.item', ['title' => 'Adipiscing', 'description' => 'Quisque a justo quis arcu feugiat fermentum in vel eros',  'backgroundURL' => 'http://lorempixel.com/output/technics-q-c-825-550-7.jpg', 'class' => 'web'])
      @include('partials.portfolio.item', ['title' => 'Elit', 'description' => 'Fusce in elit tincidunt turpis tempor viverra',  'backgroundURL' => 'http://lorempixel.com/output/sports-q-c-825-550-1.jpg', 'class' => 'mobile'])

    </div>
  </div>

  <div class="portfolio_btm"></div>

  <div id="project_container">
    <div class="clear"></div>
    <div id="project_data"></div>
  </div>
</section>
