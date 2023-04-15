@props(['disabled' => false, 'inputClass' => '','placeholder' => '','format' => 'text', 'class'=>'', 'width'=>'full', 'is_required'=> true])
@php
  $inputClasses = 'p-2 border text-sm placeholder-slate-300 rounded-md shadow-sm border-slate-200 focus:outline-none focus:ring-blue-300 focus:border-blue-300 dark:bg-slate-700 dark:text-white dark:placeholder-slate-400 dark:border-slate-700';
@endphp
<div class="{{$span}}">
  @if($label)
    <x-hive-form-label
    name="{{$label}}"
    is_required="{{$is_required}}"/>
  @endif
  <div class="mt-2">
    <input {{ $is_disabled ? 'disabled' : '' }}
    autocomplete="off"
    {!! $attributes->merge([
      'class' => $inputClasses.' '.$class.' w-'.$width.' block appearance-none',
      'name' =>  $name ,
      'placeholder' =>  $placeholder ,
      'x-model' => $identification ,
    ]) !!}/>
  </div>
</div>
