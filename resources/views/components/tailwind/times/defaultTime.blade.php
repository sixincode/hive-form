@props([
    // name of the datepicker. This name is used when posting the form with the datepicker
    'name' => 'bw-datepicker',
    // text to display in the label that identifies the input field
    'label' => '',
    // is the value of the date field required? used for form validation. default is false
    'is_required' => 'false',
      // what should the time hours be displayed as. Default is 12 hour format
    // available options are 12, 24
    'hours_as' => '12',
    'hoursAs' => '12',
    // what format should the time be displayed in
    'time_format' => 'hh:mm',
    'timeFormat' => 'hh:mm',
    // when the timepicker is included, should the time be displayed with seconds. Default is false
    'show_seconds' => 'false',
    'showSeconds' => 'false',

    'selected_hours' => '',
    'selectedHours' => '',
    'selected_minutes' => '',
    'selectedMinutes' => '',
    'selected_seconds' => '',
    'selectedSeconds' => '',
    'placeholder' => '',

    // By default only placeholders are displayed in the textbox(es)
    'has_label' => 'false',
    'hasLabel' => 'false',
])
@php
    // reset variables for Laravel 8 support
    $hours_as = $hoursAs;
    $time_format = $timeFormat;
    $show_seconds = $showSeconds;
    $selected_hours = $selectedHours;
    $selected_minutes = $selectedMinutes;
    $selected_seconds = $selectedSeconds;
    $has_label = $hasLabel;
    //--------------------------------------------------------

    $name = preg_replace('/[\s-]/', '_', $name);
 @endphp
<div class="{{$span}}">
@if($label)
  <x-hive-form-label
  name="{{$label}}"
  is_required="{{$is_required}}"/>
@endif
 <div class="mt-2">
   <x-hive-form-input
    name="{{$name}}"
    class="pick-time flatpickr-input"
    is_required="{{$is_required}}"
    data-id="{{$identification}}"
    readonly="readonly"
    id="{{$identification}}"
    {{ $attributes->merge([
      'placeholder' =>  $placeholder ,
      'x-model'=> $identification,

    ]) }}
      />

 </div>
</div>
@pushOnce('scripts')
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
  <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
  <script>
    flatpickr(".pick-time", {
      enableTime: true,
      noCalendar: true,
      dateFormat: "H:i",
    });
  </script>
@endPushOnce
