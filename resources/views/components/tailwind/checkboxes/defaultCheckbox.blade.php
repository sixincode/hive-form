@props(['value' => 'false', 'title' => ''])

<div class="relative flex items-start" x-data="{ {{$identification}}: {{ $value ? 'true' : 'false'  }} }">
  <div class="flex h-5 items-center">
    <input aria-describedby="{{$identification}}-description"
    type="checkbox"  x-model="{{$identification}}"
    class="h-4 w-4 rounded border-gray-300 text-blue-600 focus:ring-blue-400 focus:ring-offset-0"
    {!! $attributes->merge([
      'name' =>  $name ,
      'id'   =>  $identification ,
    ]) !!}>
  </div>
  <div class="ml-3 text-sm">
    <label for="{{$identification}}" class="font-medium text-gray-700 cursor-pointer">{{$title}}</label>
    <p id="{{$identification}}-description" class="text-gray-500">
      {{$description}}
    </p>
  </div>
</div>
