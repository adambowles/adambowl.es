<figure style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="{{ $class or '' }} portfolio-item one-four isotope-item effect-oscar">
  <div class="portfolio_img">
    <img src="{{ $backgroundURL or 'http://lorempixel.com/output/sports-q-c-825-550-5.jpg' }}">
  </div>
  <figcaption>
    <div>
      <a href="{{ $backgroundURL or 'http://lorempixel.com/output/sports-q-c-825-550-5.jpg' }}" class="fancybox">
        <h2>{{  $title or 'Lorem Ipsum' }}</h2>
        <p>{{ $description or 'Description placeholder; lorem ipsum dolor sit amet' }}</p>
      </a>
    </div>
  </figcaption>
</figure>
