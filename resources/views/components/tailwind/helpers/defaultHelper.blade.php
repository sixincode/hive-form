@props(['labelClasses' => '', 'class'=>'', 'name'=>'', 'is_required'=>''])
@php
  $labelClasses = 'block text-sm font-medium text-gray-500';
@endphp
<p id="{{$name}}" class="{{$class}} {{$labelClasses}}">
  {{$description}}
</p>
