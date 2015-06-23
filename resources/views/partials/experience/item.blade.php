<div class="col-sm-6 news-item">
  <div class="news-content">
    <div class="date">
      <p>{{ $date or 'Jan' }}</p>
    </div>
    <h2 class="news-title">{{ $company or 'Company' }}</h2>
    <span>{{ $jobTitle or 'Job title' }}</span>
    <p>{{ $specificDates or 'Month YYYY - Month YYYY (X months/years)' }}</p>
    <p>{{ $jobDescription or 'Lorm ipsum dolor sit amet' }}</p>
    <a class="read-more" href="#">Read More</a>
  </div>
</div>
