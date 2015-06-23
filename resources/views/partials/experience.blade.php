<section id="experience">
  <div class="container">
    <section id="news" class="white-bg padding-top-bottom">
      <div class="container">
        <div class="timeline">

          <div class="date-title">
            <span>2015</span>
          </div>

          <div class="row news-row">
            @include('partials.experience.item', ['date' => 'Oct', 'company' => 'Company',  'jobTitle' => 'Job title1',  'specificDates' => 'Specific date range',  'jobDescription' => 'Job description lorem ipsum'])
            @include('partials.experience.item', ['date' => 'Jul', 'company' => 'Company',  'jobTitle' => 'Job title1',  'specificDates' => 'Specific date range',  'jobDescription' => 'Job description lorem ipsum'])
          </div>

          <div class="row news-row">
            @include('partials.experience.item', ['date' => 'Apr', 'company' => 'Company',  'jobTitle' => 'Job title1',  'specificDates' => 'Specific date range',  'jobDescription' => 'Job description lorem ipsum'])
            @include('partials.experience.item', ['date' => 'Jan', 'company' => 'Company',  'jobTitle' => 'Job title1',  'specificDates' => 'Specific date range',  'jobDescription' => 'Job description lorem ipsum'])
          </div>

          <div class="date-title">
            <span>2013</span>
          </div>

          <!-- <div class="row news-row">
            @include('partials.experience.item', ['date' => 'Jun', 'company' => 'Roxel (UK Rocket Motors) Ltd',  'jobTitle' => 'Software Engineer',  'specificDates' => 'June 2013 - present',  'jobDescription' => 'Job description lorem ipsum'])
          </div>

          <div class="date-title">
            <span>2011</span>
          </div>

          <div class="row news-row">
            @include('partials.experience.item', ['date' => 'Jun', 'company' => 'Aston Active Software Engineering',  'jobTitle' => 'Software Engineer',  'specificDates' => 'June 2011',  'jobDescription' => 'One month contract job working for Aston Univeristy student company during summer break from studies. Worked as part of a Agile team implementing scrum practices to develop a CV writing website in PHP'])
          </div> -->

        </div>
      </div>
    </section>
  </div>
</section>
