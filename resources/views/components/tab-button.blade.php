@props(['disabled' => false,'type' => '','naming' => '','buttonClass' => '','activeClass' => '', 'class'=>'', 'iconWidth'=>'1', 'width'=>'full'])
@php
switch ($type) {
    case 'simple':
        $buttonClass = 'focus:ring-blue-400 focus:border-blue-400  focus:bg-gray-50';
         break;
    case 'blue':
        $buttonClass = 'focus:ring-blue-400 focus:border-blue-400  focus:bg-gray-50';
         break;
    case 'transparent':
        $buttonClass = 'border-none outline-none bg-transparent px-3 py-2';
         break;
    default:
        $buttonClass = 'border border-transparent bg-white hover:bg-blue-50 hover:text-blue-500 font-medium text-sm rounded-full';
        $activeClass = 'bg-blue-500 text-white font-semibold';
        break;
}
@endphp

<a href="#"
   :class="{ '{{$activeClass}}' : {{$naming}} === '{{$url}}' }"
   class="{{$class}} {{$buttonClass}} flex items-center space-x-2 py-2 px-4"
   @click.prevent="{{$naming}} = '{{$url}}'"
>
<x-hive-form-icon
path='{{$icon}}'
class='m-0'
width='6'
height='6'
iconWidth='{{$iconWidth}}'
/>
   <span class="hidden lg:block font-semibold">{{$title}}</span>
   <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
      <path fill-rule="evenodd" d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd"></path>
    </svg>
 </a>
