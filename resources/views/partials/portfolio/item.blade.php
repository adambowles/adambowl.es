<figure style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="mobile portfolio-item one-four isotope-item effect-oscar">
  <div class="portfolio_img">
    <img src="{{ isset($backgroundURL) ? $backgroundURL : 'http://lorempixel.com/output/sports-q-c-825-550-5.jpg' }}">
  </div>
  <figcaption>
    <div>
      <a href="{{ isset($backgroundURL) ? $backgroundURL : 'http://lorempixel.com/output/sports-q-c-825-550-5.jpg' }}" class="fancybox">
        <h2>{{ isset($title) ? $title : Lorem Ipsum }}</h2>
        <p>{{ isset($description) ? $description : 'Description placeholder; lorem ipsum dolor sit amet' }}</p>
      </a>
    </div>
  </figcaption>
</figure>
