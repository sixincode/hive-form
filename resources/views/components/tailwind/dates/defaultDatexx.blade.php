@props([
    // determines what type of datepicker to show. Available options: single, range
    'type' => 'single',
    // name of the datepicker. This name is used when posting the form with the datepicker
    'name' => 'bw-datepicker',
    // default date to fill in to the datepicker. Defaults to today. Set to blank to display no default
    'is_required' => '',
    'default_date' => '',
    'defaultDate' => '',
    // date format.. default is yyyy-mm-dd
    // accepted formats are yyyy-mm-dd, mm-dd-yyyy, dd-mm-yyyy, D d M, Y
    'format' => 'yyyy-mm-dd',
    // text to display in the label that identifies the input field
    'label' => '',
    // placeholder text to display if datepicker is empty
    'placeholder' => 'Select a date',
    // is the value of the date field required? used for form validation. default is false
    'required' => 'false',
    // should the datepicker include a timepicker. The timepicker is hidden by default
    'with_time' => 'false',
    'withTime' => 'false',
    // when timepicker is included, what should the time hours be displayed as. Default is 12 hour format
    // available options are 12, 24
    'hours_as' => '12',
    'hoursAs' => '12',
    // what format should the time be displayed in
    'time_format' => 'hh:mm',
    'timeFormat' => 'hh:mm',
    // when the timepicker is included, should the time be displayed with seconds. Default is false
    'show_seconds' => 'false',
    'showSeconds' => 'false',

    //----------- used for range datepickers ----------------------------------
    // what should be the default date for the from date
    'default_date_from' => '',
    'defaultDateFrom' => '',
    // what should be the default date for the to date
    'default_date_to' => '',
    'defaultDateTo' => '',
    // what label should be displayed for the from date. Default is 'From'
    'date_from_label' => 'From',
    'dateFromLabel' => 'From',
    // what label should be displayed for the to date. Default is 'To'
    'date_to_label' => 'To',
    'dateToLabel' => 'To',
    // what names should be used for the from date. Default is 'start_date'
    'date_from_name' => 'start_date',
    'dateFromName' => 'start_date',
    // what name should be displayed for the to date. Default is 'end_date'
    'date_to_name' => 'end_date',
    'dateToName' => 'end_date',
    // should labels be displayed for the datepicker
    // By default only placeholders are displayed in the textbox(es)
    /*** deprecating this as of 1.4.1
        'has_label' => 'false',
        'hasLabel' => 'false',
    ***/
])
@php
    // reset variables for Laravel 8 support
    $default_date = $defaultDate;
    $with_time = $withTime;
    $hours_as = $hoursAs;
    $time_format = $timeFormat;
    $show_seconds = $showSeconds;
    $default_date_from = $defaultDateFrom;
    $default_date_to = $defaultDateTo;
    $date_from_label = $dateFromLabel;
    $date_to_label = $dateToLabel;
    $date_from_name = $dateFromName;
    $date_to_name = $dateToName;
    //--------------------------------------------------------
    $name = preg_replace('/[\s-]/', '_', $name);
    $default_date = ($default_date != '') ? $default_date : '';
@endphp
<div>
@if($label)
  <x-hive-form-label
  name="{{$label}}"
  is_required="{{$is_required}}"/>
@endif
<div class="mt-2">
@if($type == 'single')
<x-hive-form-input
 name="{{$name}}"
 class="pick-date flatpickr-input"
 placeholder="{{$placeholder}}"
 is_required="{{$is_required}}"
 data-id="{{$identification}}"
 readonly="readonly"
 x-ref="{{$identification}}"
 id="{{$identification}}"
   />

@pushOnce('scripts')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
@endPushOnce

@pushOnce('scripts')
<script>
 flatpickr(".pick-date", {
    altInput: true,
    altFormat: "F j, Y",
    dateFormat: "Y-m-d",
    minDate: "today"
});
</script>
@endPushOnce
@else
    <div class="grid grid-cols-2 gap-2">
        <div>
          <x-hive-form-date
                name="{{ $date_from_name }}"
                type="single"
                placeholder="{{$date_from_label}}"
                default_date="{{ $default_date_from??'' }}"
                required="{{ $required }}"
                label="{{$date_from_label}}"
                format="{{$format}}" />
        </div>
        <div>
          <x-hive-form-date
                name="{{ $date_to_name }}"
                type="single"
                placeholder="{{$date_to_label}}"
                default_date="{{ $default_date_to??'' }}"
                required="{{ $required }}"
                label="{{$date_to_label}}"
                format="{{$format}}" />
        </div>
    </div>
@endif
</div>
</div>
@pushOnce('scripts')
<script>
    const january = '{{ __("JAN") }}';
    const february = '{{ __("FEB") }}';
    const march = '{{ __("MAR") }}';
    const april = '{{ __("APR") }}';
    const may = '{{ __("MAY") }}';
    const june = '{{ __("JUN") }}';
    const july = '{{ __("JUL") }}';
    const august = '{{ __("AUG") }}';
    const september = '{{ __("SEP") }}';
    const october = '{{ __("OCT") }}';
    const november = '{{ __("NOV") }}';
    const december = '{{ __("DEC") }}';

    const monday = '{{ __("MON") }}';
    const tuesday = '{{ __("TUE") }}';
    const wednesday = '{{ __("WED") }}';
    const thursday = '{{ __("THU") }}';
    const friday = '{{ __("FRI") }}';
    const saturday = '{{ __("SAT") }}';
    const sunday = '{{ __("SUN") }}';

    const MONTH_NAMES = [
        january, february, march, april, may, june, july, august,
        september, october, november, december,
    ];
    const MONTH_SHORT_NAMES = [
        january.substr(0,3), february.substr(0,3), march.substr(0,3),
        april.substr(0,3), may.substr(0,3), june.substr(0,3), july.substr(0,3),
        august.substr(0,3), september.substr(0,3), october.substr(0,3),
        november.substr(0,3), december.substr(0,3)
    ];
    const DAYS = [
        sunday.substr(0,3), monday.substr(0,3), tuesday.substr(0,3), wednesday.substr(0,3),
        thursday.substr(0,3), friday.substr(0,3), saturday.substr(0,3)
    ];
</script>
<script>
function app(selected_date='',date_format) {
      return {
        showDatepicker: false,
        datepickerValue: "",
        selectedDate: selected_date,
        dateFormat: date_format, //"YYYY-MM-DD",
        month: "",
        year: "",
        no_of_days: [],
        blankdays: [],
        initDate() {
          let today;
          if (this.selectedDate) {
            today = new Date(Date.parse(this.selectedDate));
          } else {
            today = '';
          }
          if(today !== '') {
            this.month = today.getMonth();
            this.year = today.getFullYear();
            this.datepickerValue = this.formatDateForDisplay(
              today
            );
          } else{
            this.month = new Date().getMonth();
            this.year = new Date().getFullYear();
          }
        },
        formatDateForDisplay(date) {
          let formattedDay = DAYS[date.getDay()];
          let formattedDate = ("0" + date.getDate()).slice(
            -2
          ); // appends 0 (zero) in single digit date
          let formattedMonth = MONTH_NAMES[date.getMonth()];
          let formattedMonthShortName =
            MONTH_SHORT_NAMES[date.getMonth()];
          let formattedMonthInNumber = (
            "0" +
            (parseInt(date.getMonth()) + 1)
          ).slice(-2);
          let formattedYear = date.getFullYear();
          if (this.dateFormat === "DD-MM-YYYY") {
            return `${formattedDate}-${formattedMonthInNumber}-${formattedYear}`; // 02-12-2021
          }
          if (this.dateFormat === "MM-DD-YYYY") {
            return `${formattedMonthInNumber}-${formattedDate}-${formattedYear}`; // 12-02-2021
          }
          if (this.dateFormat === "YYYY-MM-DD") {
            return `${formattedYear}-${formattedMonthInNumber}-${formattedDate}`; // 2021-12-02
          }
          if (this.dateFormat === "D d M, Y") {
            return `${formattedDay} ${formattedDate} ${formattedMonthShortName} ${formattedYear}`; // Tue 02 Dec 2021
          }
          return `${formattedDay} ${formattedDate} ${formattedMonth} ${formattedYear}`;
        },
        isSelectedDate(date) {
          const d = new Date(this.year, this.month, date);
          return this.datepickerValue ===
            this.formatDateForDisplay(d) ?
            true :
            false;
        },
        isToday(date) {
          const today = new Date();
          const d = new Date(this.year, this.month, date);
          return today.toDateString() === d.toDateString() ?
            true :
            false;
        },
        getDateValue(date, format) {
          let selectedDate = new Date(
            this.year,
            this.month,
            date
          );
          this.datepickerValue = this.formatDateForDisplay(
            selectedDate
          );
          this.isSelectedDate(date);
          this.showDatepicker = false;
        },
        getNoOfDays() {
          let daysInMonth = new Date(
            this.year,
            this.month + 1,
            0
          ).getDate();
          // find where to start calendar day of week
          let dayOfWeek = new Date(
            this.year,
            this.month
          ).getDay();
          let blankdaysArray = [];
          for (var i = 1; i <= dayOfWeek; i++) {
            blankdaysArray.push(i);
          }
          let daysArray = [];
          for (var i = 1; i <= daysInMonth; i++) {
            daysArray.push(i);
          }
          this.blankdays = blankdaysArray;
          this.no_of_days = daysArray;
        },
      };
    }
</script>
@endpushOnce
