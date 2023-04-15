<div x-data="{ {{$name}}:'{{$default}}'}">
<fieldset class="flex flex-wrap gap-4">
  @foreach($radios as $index => $radio)
  <div>
    <input
      type="radio"
      name="{{$name}}"
      x-model="{{$name}}"
      value="{{$index}}"
      id="{{$index}}"
      checked
      class="peer hidden [&:checked_+_label_svg]:block"
    />

    <label
      for="{{$index}}"
      class="flex cursor-pointer items-center justify-center gap-2 rounded-md border border-gray-100 p-2 text-gray-700 hover:border-gray-200 peer-checked:border-blue-200 peer-checked:bg-blue-50 peer-checked:text-blue-600"
    >
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
      <span class="flex flex-1">
        <span class="flex flex-col">
          <span id="project-type-0-label" class="block text-sm font-medium">{{$radio[0]}}</span>
          <span id="project-type-0-description-0" class="flex items-center text-sm text-gray-500">{{$radio[1]}}</span>
        </span>
      </span>
     </label>
  </div>
  @endforeach
</fieldset>

{{$slot}}
</div>
