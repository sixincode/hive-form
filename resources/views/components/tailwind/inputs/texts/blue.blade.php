@php
  $inputClasses = 'focus:ring-blue-400 focus:border-blue-400  focus:bg-gray-50';
@endphp
<div class="{{$span}}">
  <input {{ $is_disabled ? 'disabled' : '' }}
  autocomplete="off" {!! $attributes->merge([
    'class' => $inputClasses.' '.$class.' w-'.$width.' block appearance-none',
    'name' =>  $name ,
  ]) !!}/>
</div>
