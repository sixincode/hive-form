@php
  $inputClasses = 'p-0.5 rounded-md border-transparent focus:border-black focus:ring-black  focus:bg-slate-50  outline-none ';
@endphp
<div class="{{$span}}">
  <input {{ $is_disabled ? 'disabled' : '' }}
  autocomplete="off" {!! $attributes->merge([
    'class' => $inputClasses.' '.$class.' w-'.$width.' block appearance-none',
    'name' =>  $name ,
  ]) !!}/>
</div>
