@props([
        'disabled' => false,
        'inputClass' => '',
        'placeholder' => 'Street address or P.O. Box',
        'format' => 'text',
        'class'=>'',
        'width'=>'full',
        'is_required'=> true
        ])
@php
  $inputClass = 'p-2 border text-sm placeholder-slate-300 rounded-md shadow-sm border-slate-200 focus:outline-none focus:ring-blue-300 focus:border-blue-300 dark:bg-slate-700 dark:text-white dark:placeholder-slate-400 dark:border-slate-700';
@endphp
<div class="{{$span}}">
  @if($label)
    <x-hive-form-label
    name="{{$label}}"
    is_required="{{$is_required}}"/>
  @endif
  <div class="mt-2 relative">
    <input
    {{ $is_disabled ? 'disabled' : '' }}
    autocomplete="off" {!! $attributes->merge([
      'class' => $inputClass.' '.$class.' w-'.$width.' block appearance-none',
      'name' =>  $name ,
      'placeholder' =>  $placeholder ,
      'x-model'=> $identification,

    ]) !!}/>
    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
  <!-- Heroicon name: mini/question-mark-circle -->
      <svg class="h-5 w-5 text-gray-200" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" stroke="none" aria-hidden="true">
        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
        <path stroke-linecap="round" fill="white" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
      </svg>
    </div>
  </div>
  <div class="">
    <x-hive-form-input
      name="{{$identification}}_2"
      placeholder="{{__('Apt, Suite, Unit, Building')}}"
      is_required="false"
      value="{{ old($name.'_2', '') }}"
      x-model="{{$identification.'_2'}}"
      id="{{$identification.'_2'}}" />
  </div>
  <div class="grid gap-4 sm:grid-cols-2 mt-2 hidden">
    <x-hive-form-input
      name="{{$identification}}_long"
      placeholder="longitude"
      is_required="false"
      type="hidden"
      value="{{ old($name.'_long', '') }}"
      id="{{$identification.'_long'}}" />

    <x-hive-form-input
      name="{{$identification}}_lat"
      placeholder="latitude"
      is_required="false"
      type="hidden"
      value="{{ old($name.'_lat', '') }}"
      id="{{$identification.'_lat'}}" />
  </div>
</div>
