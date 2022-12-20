<div>
  <div wire:ignore class="w-full">

      <select class="select2 form-control" data-placeholder="{{ __('Select your option') }}" {{ $attributes }}>

          @foreach($options as $key => $value)
              <option value="{{ $key }}">{{ $value }}</option>
          @endforeach
      </select>
  </div>
</div>
