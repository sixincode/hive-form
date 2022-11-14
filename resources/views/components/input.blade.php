@props(['disabled' => false,'type' => 'transparent','inputClass' => '','format' => 'text', 'class'=>'', 'width'=>'full'])
@php
switch ($type) {
    case 'simple':
        $inputClasses = 'focus:ring-blue-400 focus:border-blue-400  focus:bg-gray-50';
         break;
    case 'blue':
        $inputClasses = 'focus:ring-blue-400 focus:border-blue-400  focus:bg-gray-50';
         break;
    case 'slatt';
        $inputClasses = 'font-medidum rounded-lg px-2.5 py-2 focus:ring-blue-300 focus:border-blue-300 bg-slate-300/20 block w-full sm:text-sm focus:bg-slate-300/40 ';
        break;
    case 'transparent':
        $inputClasses = 'border-none outline-none bg-transparent  p-1.5';
         break;
    case 'light':
        $inputClasses = 'p-0.5 rounded-md border-transparent focus:border-black focus:ring-black  focus:bg-slate-50  outline-none ';
        break;
    default:
        $inputClasses = 'p-2 border placeholder-slate-500 rounded-md  border-slate-200 focus:shadow focus:ring-blue-300 focus:border-blue-300 dark:bg-slate-700 dark:text-white dark:placeholder-slate-400 dark:border-slate-700';
        break;
}
@endphp
<div class="{{$span}}">
  <input {{ $disabled ? 'disabled' : '' }}
  type="{{$format}}"
  autocomplete="off" {!! $attributes->merge([
    'class' => $inputClasses.' '.$class.' w-'.$width.' block appearance-none',
    'name' =>  $name ,
  ]) !!}/>
</div>
