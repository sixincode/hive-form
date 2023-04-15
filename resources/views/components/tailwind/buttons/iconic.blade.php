@php
  $buttonClasses = 'flex items-center text-sm text-gray-400 bg-slate-100 hover:text-gray-500 hover:bg-slate-300 rounded-full p-1.5 space-x-2';
  $buttonActiveClasses = 'bg-blue-100 text-blue-400 hover:bg-blue-200 hover:text-blue-500';
@endphp

<{{$tag}}
{{ $attributes->merge([
      'class' => "$class $buttonClasses",
      ':class' =>  "{'$buttonActiveClasses':$name}"  ,
      'name' =>  $name ,
  ])
}}
@if ($is_disabled == 'true') disabled="true" @endif
type="{{$button_type}}"
>
<span class="mx-auto">
  {{$slot}}
</span>

</{{$tag}}>
