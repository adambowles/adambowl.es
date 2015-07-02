<li>
  <div class="timeline-badge primary"><i class="fa fa-{{ $icon or 'check' }}"></i></div>
  <div class="timeline-panel">
    <div class="timeline-heading">
      <h4 class="timeline-title">{{ $title or 'Title' }}</h4>
      <h6 class="timeline-title">{{ $dates or 'Dates' }}</h6>
    </div>
    <div class="timeline-body">
      <p>{{ $description or 'Description' }}<p>
    </div>
  </div>
</li>
