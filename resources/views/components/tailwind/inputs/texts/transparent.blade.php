@php
  $inputClasses = 'border-none outline-none bg-transparent  p-1.5';
@endphp
<div class="{{$span}}">
  <input {{ $is_disabled ? 'disabled' : '' }}
  autocomplete="off" {!! $attributes->merge([
    'class' => $inputClasses.' '.$class.' w-'.$width.' block appearance-none',
    'name' =>  $name ,
  ]) !!}/>
</div>
