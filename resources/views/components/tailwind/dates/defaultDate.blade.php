@props([
    // determines what type of datepicker to show. Available options: single, range
    'type' => 'single',

    // name of the datepicker. This name is used when posting the form with the datepicker
    'time' => 'false',
    'defaultDate' => '',
    'is_required' => false,
    'defaultDateFormat' => 'F j, Y',
    'altFormat' => "F j, Y H:i"

])

<div>
@if($label)
  <x-hive-form-label
  name="{{$label}}"
  is_required="{{$is_required}}"/>
@endif
<div class="mt-2">
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
    altFormat: "{{$altFormat}}",
    dateFormat: "Y-m-d",
    minDate: "today",
    enableTime: {{$time}},
    defaultDate: new Date(),
    allowInput: true,
});
</script>
@endPushOnce

</div>
</div>
