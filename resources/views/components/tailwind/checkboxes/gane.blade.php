@props([  'title' => '', 'class' => ''])
<div class="relative items-start">
  <input  aria-describedby="{{$identification}}-description" x-model="{{$name}}" type="checkbox"
   class="peer hidden [&:checked_+_label_svg]:block"
  {!! $attributes->merge([
    'name' =>  $name ,
    'id'   =>  $identification ,
    'value'   =>  $value ,
  ]) !!}
  />
 <label for="{{$value}}"
 class="{{$class}} flex cursor-pointer p-2 text-gray-700 border hover:border-gray-200 peer-checked:border-blue-200 peer-checked:bg-blue-50 peer-checked:text-blue-600">
  <div class="min-w-0 flex-1 text-sm leading-6">
    <p class="font-medium">{{$title}}</p>
    <p id="{{$value}}-description" class="text-gray-500">{{$description}}</p>
  </div>
  <div class="ml-3 flex h-6 items-center">
    <svg
      class="hidden h-5 w-5"
      xmlns="http://www.w3.org/2000/svg"
      viewBox="0 0 20 20"
      fill="currentColor"
    >
      <path
        fill-rule="evenodd"
        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
        clip-rule="evenodd"
      />
    </svg>
  </div>
 </label>
</div>
