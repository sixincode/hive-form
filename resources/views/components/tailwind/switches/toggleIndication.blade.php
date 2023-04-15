@props(['value' => 'false',])
<div>
 <div class="flex items-center ml-4" x-data="{ checked: {{ $value ? 'true' : 'false'  }} }">
   <div class="text-sm text-slate-400 italic mr-2" x-text="checked  ? '{{$on ?? _('Yes')}}' : '{{ $off ?? _('No')}}'">{{$value}}</div>
   <label class="relative inline-flex items-center cursor-pointer">
     <input type="checkbox" class="sr-only peer" x-model="checked" {!! $attributes->merge([
       'name' =>  $name ,
     ]) !!}>
     <div class="w-11 h-6 bg-gray-200 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
   </label>
 </div>
</div>
