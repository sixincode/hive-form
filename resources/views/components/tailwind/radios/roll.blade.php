<div>
  <fieldset class="flex flex-wrap gap-4">
  @foreach($radios as $index => $radio)
  <label
  for="{{$index}}"
  class="relative flex cursor-pointer rounded-md border bg-white p-4 focus:outline-none peer-checked:border-blue-500 peer-checked:bg-blue-500 peer-checked:text-white">
  <input type="radio" name="{{$identification}}"
  x-model="{{$name}}"
  value="{{$index}}"
  class="peer hidden [&:checked_+_label_svg]:block"
  aria-labelledby="{{$name}}-{{$index}}-label"
  aria-describedby="{{$name}}-{{$index}}-description-{{$index}}">
  <span class="flex flex-1">
    <span class="flex flex-col">
      <span id="project-type-0-label" class="block text-sm font-medium text-gray-900">{{$radio}}</span>
      <span id="project-type-0-description-0" class="mt-1 flex items-center text-sm text-gray-500">Last message sent an hour ago</span>
    </span>
  </span>
  <!-- Not Checked: "invisible" -->
  <svg x-show="{{$name}}" class="h-5 w-5 text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd" />
  </svg>
  <span class="pointer-events-none absolute -inset-px rounded-lg border-2" aria-hidden="true"></span>
</label>
@endforeach
</fieldset>

{{$slot}}
</div>
