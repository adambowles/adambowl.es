<div class="progress">
  <div class="progress-bar" role="progressbar" aria-valuenow="{{ $progress or '100' }}" aria-valuemin="0" aria-valuemax="{{ $progress or '100' }}" style="width: {{ $progress or '100' }}%">
    <span class="sr-only">{{ $progress or '100' }}% Complete</span>
  </div>
  <span class="progress-type">JavaScript / jQuery{{ $name or 'Skill name' }}</span>
  <span class="progress-completed">{{ $progress or '100' }}%</span>
</div>
