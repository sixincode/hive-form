@props(['disabled' => false,'type' => '','inputClass' => '', 'class'=>'', 'width'=>'full'])
@php
switch ($type) {
    case 'simple':
        $inputClasses = 'focus:ring-blue-400 focus:border-blue-400 block  focus:bg-gray-50';
         break;
    case 'primary':
        $inputClasses = 'focus:ring-blue-400 focus:border-blue-400 block  focus:bg-gray-50';
         break;
    case 'transparent':
        $inputClasses = 'border-none outline-none bg-transparent  p-1';
         break;
    default:
        $inputClasses = ' border border-gray-300 text-gray-900 text-sm rounded-md p-1.5 focus:bg-gray-100 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-400 dark:focus:border-blue-400';
        break;
}
@endphp
<input {{ $disabled ? 'disabled' : '' }}  {!! $attributes->merge(['class' => $inputClasses.' '.$class.' w-'.{{$width}}.' block rounded', ]) !!}/>
