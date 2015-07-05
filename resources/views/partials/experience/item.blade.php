<li>
  <div class="timeline-badge red"><i class="fa fa-{{ $icon or 'check' }}"></i></div>
  <div class="timeline-panel">
    <div class="timeline-heading">
      <h4 class="timeline-title">{{ $company or 'Company' }}</h4><br>
      <h5 class="timeline-title">{{ $jobTitle or 'Job Title' }}</h5><br>
      <h6 class="timeline-title">{{ $dates or 'Dates' }}</h6>
    </div>
    <div class="timeline-body">
      <p>{{ $description or 'Description description description description description description description description' }}<p>
    </div>
  </div>
</li>
