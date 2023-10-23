@props(['disabled' => false, 'inputClass' => '','placeholder' => '','format' => 'text', 'class'=>'', 'width'=>'full', 'is_required'=> true, 'text_size' => 'text-sm'])
@php
  $inputClasses = 'p-2 pl-10 border placeholder-slate-300  shadow-sm border-slate-200 focus:outline-none focus:ring-0 focus:border-blue-300 dark:bg-slate-700 dark:text-white dark:placeholder-slate-400 dark:border-slate-700';
@endphp
<div class="{{$span}}">
  @if($label)
    <x-hive-form-label
    name="{{$label}}"
    is_required="{{$is_required}}"/>
  @endif
  <div class="relative mt-2 rounded-md shadow-sm">
    <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
      <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
        <path d="M3 4a2 2 0 00-2 2v1.161l8.441 4.221a1.25 1.25 0 001.118 0L19 7.162V6a2 2 0 00-2-2H3z" />
        <path d="M19 8.839l-7.77 3.885a2.75 2.75 0 01-2.46 0L1 8.839V14a2 2 0 002 2h14a2 2 0 002-2V8.839z" />
      </svg>
    </div>
    <input {{ $is_disabled ? 'disabled' : '' }}
    autocomplete="off"
    {!! $attributes->merge([
      'class' => $class.' '.$rounded.' '.$text_size.' '.$inputClasses.' w-'.$width.' block appearance-none',
      'name' =>  $name ,
      'placeholder' =>  $placeholder ,
    ]) !!}/>
  </div>
</div>
