<div class="col-md-4 col-sm-4">
  <div class="left-sidebar">
    <div class="search-block">
      <form class="example" wire:submit.prevent="filter">
        <input type="text" wire:model="search" placeholder="Find scholarship..." name="search">
        <button type="submit"><i class="fa fa-search"></i></button>
      </form>
    </div>
    <div class="filter">
      <h5>{{ __('Filter') }}</h5>
      <a href="javascript:void(0)" wire:click="resetFilter" class="reset-filter">{{ __('Clear filters') }}</a>
    </div>
    <div class="study-level study-level-media">
      <h3>{{ __('Study Level') }}</h3>
      <ul>
        @foreach ($levels as $level)
          <li>
            <input type="checkbox" wire:change="filter" wire:model="level" id="level_{{ $level->value }}" value="{{ $level->value }}">
            <label for="level_{{ $level->value }}">{{ $level->value }}</label>
          </li>
        @endforeach
      </ul>
    </div>
    <div class="study-level study-level-media">
      <h3>{{ __('Study Area') }}</h3>
      <ul>
        @foreach ($studyAreas as $studyArea)
          <li>
            <input type="checkbox" wire:change="filter" wire:model="studyArea" id="studyArea_{{ $studyArea->id }}" value="{{ $studyArea->id }}">
            <label for="studyArea_{{ $studyArea->id }}">{{ $studyArea->name }}</label>
          </li>
        @endforeach
      </ul>
    </div>
    <div class="study-level study-level-media">
      <h3>{{ __('Student type') }}</h3>
      <ul>
        @foreach ($studentTypes as $studentType)
          <li>
            <input type="checkbox" wire:change="filter" wire:model="studentType" id="studentType_{{ $studentType->value }}" value="{{ $studentType->value }}">
            <label for="studentType_{{ $studentType->value }}">{{ $studentType->value }}</label>
          </li>
        @endforeach
      </ul>
    </div>
    <div class="study-level study-level-media">
      <h3>{{ __('Scholarship type') }}</h3>
      <ul>
        @foreach ($scholarshipTypes as $scholarshipType)
          <li>
            <input type="checkbox" wire:change="filter" wire:model="scholarshipType" id="scholarshipType_{{ $scholarshipType->value }}" value="{{ $scholarshipType->value }}">
            <label for="scholarshipType_{{ $scholarshipType->value }}">{{ $scholarshipType->value }}</label>
          </li>
        @endforeach
      </ul>
    </div>
    <div class="study-level">
      <h3>{{ __('Application Deadline') }}</h3>
      <input type="date" wire:change="filter" wire:model="applicationDeadline">
      {{-- <input autocomplete="off" type="text" wire:change="filter" wire:model="applicationDeadline" hidden id="inputDateFilter"> --}}
      {{-- <div class="calendar-box" id="filterApplicationDeadlineWrap" wire:ignore>
        <input autocomplete="off" type="text" id="dateInput" placeholder="{{ __('Search by Date') }}" value="{{ request()->get('applicationDeadline') }}">
        <div class="calendar" id="calendar">
          <div class="header">
            <button id="prevBtn"><i class="fa fa-angle-left"></i></button>
            <h2 id="monthYear">{{ __('Month Year') }}</h2>
            <button id="nextBtn"><i class="fa fa-angle-right"></i></button>
          </div>
          <div class="days" id="daysContainer"></div>
        </div>
      </div> --}}
    </div>
    <div class="study-level">
        <h3>{{ __('Location') }}</h3>
        <x-form.autocomplete :results="$countries" label="" name="country" placeholder="Search by Country"/>
    </div>
    <div class="study-level">
        <h3>{{ __('University') }}</h3>
        <x-form.autocomplete :results="$universities" label="" name="university" placeholder="Search by University"/>
    </div>
  </div>
</div>

@push('bottom_scripts')
<script>
  $(document).ready(function() {
    $(document).on('click', '.day', function(e) {
      if ($('#inputDateFilter').val() != $('#filterApplicationDeadlineWrap #dateInput').val()) {
        let selectedVal = $('#filterApplicationDeadlineWrap > input').val();

        console.log(selectedVal);

        var inputElement = document.getElementById('inputDateFilter');
        inputElement.value = selectedVal;
        inputElement.dispatchEvent(new Event('input'));
        inputElement.dispatchEvent(new Event('change'));
      }
    });

    $(document).on('click', '#filterUniversityWrap .select-items div', function(e) {
      let selectedVal = $(this).attr('data-value');

      var selectElement = document.getElementById('selectUniversityFilter');
      selectElement.value = selectedVal;
      var event = new Event('change');
      selectElement.dispatchEvent(event);
    });

    $(document).on('click', '.autocomplete-items div', function(e) {
      var vals = $("#selectLocationFilter").val();
      vals.push($(this).find('input').attr('data-name'));
      $("#selectLocationFilter").val(vals);
      $("#locationInput").val("")

      reloadLocationSelected();
    });

    $(document).on('click', '#filterLocationWrap .rounded-circle', function(e) {
      var vals = $("#selectLocationFilter").val();
      vals = vals.filter((item) => item != $(this).attr('data-name'));
      $("#selectLocationFilter").val(vals);
      $("#locationInput").val("")

      reloadLocationSelected();
    });

    function reloadLocationSelected() {
      $('#filterLocationWrap .tags').empty();
      $("#selectLocationFilter :selected").map(function(i, el) {
          $('#filterLocationWrap .tags').append('\
              <div class="tag d-inline-flex align-items-center rounded-pill ps-3 pe-2 py-1 me-2 mb-2 text-white fw-medium small lh-1">\
                  <span>' + $(el).text() + '</span>\
                  <button class="btn p-0 border-0 rounded-circle" data-id="' + $(el).val() + '"  data-name="' + $(el).text() + '">\
                      <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">\
                          <path d="M4.79989 13.9904L4.00952 13.2L8.20952 9.00001L4.00952 4.80001L4.79989 4.00964L8.99989 8.20964L13.1999 4.00964L13.9903 4.80001L9.79026 9.00001L13.9903 13.2L13.1999 13.9904L8.99989 9.79038L4.79989 13.9904Z" fill="white"></path>\
                      </svg>\
                  </button>\
              </div>'
          );
      }).get();

      var event = new Event('change');
      document.getElementById('selectLocationFilter').dispatchEvent(event);
    }
  });
</script>
@endpush