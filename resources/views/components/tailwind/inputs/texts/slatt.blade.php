@php
  $inputClasses = 'font-medidum rounded-md px-2.5 py-2 border border-slate-100 focus:outline-none focus:ring-0 focus:border-blue-300 bg-slate-200/20 block w-full sm:text-sm focus:bg-slate-300/40 ';
@endphp
<div class="{{$span}}">
  @if($label)
    <x-hive-form-label
    name="{{$label}}"
    is_required="{{$is_required}}"/>
  @endif
  <div class="mt-2">
  <input {{ $is_disabled ? 'disabled' : '' }}
  autocomplete="off" {!! $attributes->merge([
    'class' => $inputClasses.' '.$class.' w-'.$width.' block appearance-none',
    'name' =>  $name ,
    'placeholder' =>  $placeholder ,
    'x-model' => $identification ,
  ]) !!}/>
 </div>
</div>
