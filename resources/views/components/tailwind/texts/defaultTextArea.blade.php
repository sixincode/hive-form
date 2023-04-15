@props([
    // name of the input field for use in forms
    'name' => '',
    'rows' => '',
    'type' => '',
    'label' => '',
    'required' => 'false',
    'inputClass' => '',
    'class' => '',
    'span' => '',
    'placeholder' => '', // placeholder text',
    'is_required'=>true
])
@php
  $inputClasses = 'p-2 border text-sm placeholder-slate-300 rounded-md shadow-sm border-slate-200 focus:outline-none focus:ring-0 focus:border-blue-300 dark:bg-slate-700 dark:text-white dark:placeholder-slate-400 dark:border-slate-700';
@endphp
<div class="{{$span}}">
  @if($label)
    <x-hive-form-label
    name="{{$label}}" />
  @endif
  <div class="mt-2">
    <textarea
      x-data="{
        resizeTextarea() {
          $el.style.minHeight = '{{$height}}';
          $el.style.height = `${$el.scrollHeight }px`
        }
      }"
      x-init="resizeTextarea()"
      x-on:input="resizeTextarea()"
      {!! $attributes->merge([
      'class' => $inputClasses.' block w-full '.$class,
      'name' => $name,
      'rows' =>  $rows ,
      'placeholder' =>  $placeholder ,
      'x-model'=> $identification,

      ]) !!}/></textarea>
    </div>
</div>
