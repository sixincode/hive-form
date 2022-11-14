@props([
    // name of the input field for use in forms
    'name' => '',
    'rows' => 6,
    'type' => '',
    'label' => '',
    'required' => 'false',
    'inputClass' => '',
    'class' => '',
    'span' => '',
    'placeholder' => '', // placeholder text',
])
@php
switch ($type) {
    case 'simple':
        $inputClasses = 'focus:ring-blue-400 focus:border-blue-400  focus:bg-gray-50';
         break;
    case 'blue':
        $inputClasses = 'focus:ring-blue-400 focus:border-blue-400  focus:bg-gray-50';
         break;
    case 'transparent':
        $inputClasses = 'form-textarea border-none outline-none bg-transparent resize-none rounded';
         break;
    default:
        $inputClasses = 'p-2 border placeholder-slate-500 rounded-md shadow-sm border-slate-200 focus:shadow focus:ring-blue-300 focus:border-blue-300 dark:bg-slate-700 dark:text-white dark:placeholder-slate-400 dark:border-slate-700';
        break;
}
@endphp
<div class="{{$span}}">
    <textarea
      x-data="{
        resizeTextarea() {
          $el.style.minHeight = '30px';
          $el.style.height = `${$el.scrollHeight }px`
        }
      }"
      x-init="resizeTextarea()"
      x-on:input="resizeTextarea()"
      {!! $attributes->merge([
      'class' => $class.' block w-full '.$inputClasses,
      'placeholder' => $placeholder,
      'name' => $name,
      'rows' =>  $rows ,
        ]) !!}></textarea>
 </div>
