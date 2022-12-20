@props([ 'component' => '', 'name'=>'','class'=>'', 'labelClasses' => ''])
@php
switch ($component) {
    case 'simple':
        $labelClasses = 'focus:ring-blue-400 focus:border-blue-400  focus:bg-gray-50';
         break;

    case 'transparent':
        $labelClasses = ' ';
         break;
    case 'light':
        $labelClasses = 'p-0.5 rounded-md border-transparent focus:border-black focus:ring-black  focus:bg-slate-50  outline-none ';
        break;
    default:
        $labelClasses = 'block text-sm font-medium mb-1';
        break;
}
@endphp
<label {!! $attributes->merge([
  'class' =>  $labelClasses,
]) !!}/>{{$name}}</label>
