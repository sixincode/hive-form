@props(['disabled' => false,'component' => '','inputClass' => '','format' => 'text', 'class'=>'', 'width'=>'full'])
@php
switch ($component) {
    case 'simple':
        $inputClasses = 'focus:ring-blue-400 focus:border-blue-400  focus:bg-gray-50';
         break;
    case 'blue':
        $inputClasses = 'focus:ring-blue-400 focus:border-blue-400  focus:bg-gray-50';
         break;
    case 'slatt';
        $inputClasses = 'font-medidum rounded-lg px-2.5 py-2 focus:ring-blue-300 focus:border-blue-300 bg-slate-300/20 block w-full sm:text-sm focus:bg-slate-300/40 ';
        break;
    case 'crip';
        $inputClasses = 'font-medidum rounded-lg px-2.5 py-2 focus:ring-blue-300 focus:border-blue-300 bg-slate-300/20 block w-full sm:text-sm focus:bg-slate-300/40 ';
        break;
    case 'transparent':
        $inputClasses = 'border-none outline-none bg-transparent  p-1.5';
         break;
    case 'light':
        $inputClasses = 'p-0.5 rounded-md border-transparent focus:border-black focus:ring-black  focus:bg-slate-50  outline-none ';
        break;
    default:
        $inputClasses = 'p-2 px-3 border placeholder-slate-300 rounded text-sm border-slate-200 shadow-sm focus:outline-none focus:border-blue-400 dark:bg-slate-700 dark:text-white dark:placeholder-slate-400 dark:border-slate-700';
        break;
}
@endphp
<div class="{{$span}}">
  <input {{ $disabled ? 'disabled' : '' }}
  autocomplete="off" {!! $attributes->merge([
    'class' => $inputClasses.' '.$class.' w-'.$width.' block appearance-none',
    'name' =>  $name ,
  ]) !!}/>
</div>
