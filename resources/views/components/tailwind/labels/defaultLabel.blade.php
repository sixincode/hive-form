@props(['labelClasses' => '', 'class'=>'', 'name'=>'', 'is_required'=>''])
@php
  $labelClasses = 'block text-sm font-medium text-gray-500';
@endphp
<div class="flex space-x-2">
<label for="{{$name}}" class="{{$class}} {{$labelClasses}}">
  {{$name}}
</label>
@if($is_required)
<span class="text-red-500" id="{{$name}}-required">*</span>
@endif
</div>
