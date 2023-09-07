@php
  $buttonClasses = 'rounded text-sm font-semibold p-2 px-4 cursor-pointer flex items-center';
@endphp

<{{$tag}}
{{ $attributes->merge([
      'class' => "$class $buttonClasses $size $color $text_color",
      'name' =>  $name ,
  ])
}}
@if ($is_disabled == 'true') disabled="true" @endif
type="{{$button_type}}"
>
@if($title)
<span class="mx-auto">
  {{ $title ??''}}
</span>
@else
   {{ $slot ??''}}
 @endif
</{{$tag}}>
