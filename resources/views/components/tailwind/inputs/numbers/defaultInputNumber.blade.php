@props(['disabled' => false, 'inputClass' => '','placeholder' => '','format' => 'text', 'class'=>'', 'width'=>'full', 'is_required'=> true])
@php
  $inputClasses = 'p-2 border text-sm placeholder-slate-300 rounded-md shadow-sm border-slate-200 focus:outline-none focus:ring-0 focus:border-blue-300 dark:bg-slate-700 dark:text-white dark:placeholder-slate-400 dark:border-slate-700 text-center [-moz-appearance:_textfield] [&::-webkit-outer-spin-button]:m-0 [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:m-0 [&::-webkit-inner-spin-button]:appearance-none';
@endphp
<div class="{{$span}}">
  @if($label)
    <x-hive-form-label
    name="{{$label}}"
    is_required="{{$is_required}}"/>
  @endif

  <div class="flex items-center gap-1 mt-2">
    @if($showButtons)
    <button
      type="button"
      x-on:click="{{$identification}}--;if({{$identification}} < {{$min}}){{$identification}} = {{$min}};"
      class="items-center justify-center flex w-8 h-8 leading-10 text-gray-600 transition hover:bg-gray-100/75 rounded-md"
    >
      &minus;
    </button>
    @endif

    <input {{ $is_disabled ? 'disabled' : '' }}
    autocomplete="off"
    type="number"
    value="{{$value}}"
    {!! $attributes->merge([
      'class' => $inputClasses.' '.$class.' w-'.$width.' block appearance-none',
      'name' =>  $name ,
      'placeholder' =>  $placeholder ,
      'x-model' => $identification ,
    ]) !!}/>

    @if($showButtons)
    <button
      type="button"
      x-on:click="{{$identification}}++;if({{$identification}} > {{$max}}){{$identification}} = {{$max}};"
      class="items-center justify-center flex w-8 h-8 leading-10 text-gray-600 transition hover:bg-gray-100/75 rounded-md"
    >
      &plus;
    </button>
    @endif

  </div>

</div>
