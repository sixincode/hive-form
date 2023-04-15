<div>
  <x-hive-form-label
name="{{__('Publisher')}}" />

  <div x-data="pickPublisher" class="mt-2">


   <x-hive-display-dropdown>
    <x-slot name="trigger">

      <x-hive-form-button
        tag="button"
        size="full"
        type="button"
        color="simple"
        text_color="text-gray-900"
        class="py-1.5 pl-3 pr-10 rounded-md"
         >
        <span class="flex items-center">
          <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" class="h-7 w-7 flex-shrink-0 rounded-full">
          <div class="ml-3 grid truncate">
            <span class="-mt-0.5 text-gray-900" x-text="publisher.name"></span>
            <span class="text-gray-500 text-xs -mt-1" x-text="'@'+ publisher.username"></span>
          </div>
        </span>
        <span class="pointer-events-none absolute inset-y-0 right-0 ml-3 flex items-center pr-2">
          <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
            <path fill-rule="evenodd" d="M10 3a.75.75 0 01.55.24l3.25 3.5a.75.75 0 11-1.1 1.02L10 4.852 7.3 7.76a.75.75 0 01-1.1-1.02l3.25-3.5A.75.75 0 0110 3zm-3.76 9.2a.75.75 0 011.06.04l2.7 2.908 2.7-2.908a.75.75 0 111.1 1.02l-3.25 3.5a.75.75 0 01-1.1 0l-3.25-3.5a.75.75 0 01.04-1.06z" clip-rule="evenodd" />
          </svg>
        </span>
      </x-hive-form-button>

    </x-slot>
    <x-slot name="content">
      <ul class="sm:text-sm sm:leading-6 text-left text-gray-900 divide-y divide-slate-100">
        <template x-for="(publisherOption, index) in publishers" :key="index">
          <li class="hover:bg-slate-50 relative">
            <x-hive-form-button
              tag="button"
              size="full"
              type="button"
              color="transparent"
              class="py-2 pl-3 pr-10 border-none"
              @click="selectPublisher(publisherOption.username)"
              >
              <span class="flex items-center">
                <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" class="h-7 w-7 flex-shrink-0 rounded-full">
                <div class="ml-3 grid truncate">
                  <span class="-mt-0.5" x-text="publisherOption.name"></span>
                  <span class="text-gray-500 text-xs -mt-1" x-text="'@'+ publisherOption.username"></span>
                </div>
              </span>
              <span class="pointer-events-none absolute inset-y-0 right-0 ml-3 flex items-center pr-2">
                <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M10 3a.75.75 0 01.55.24l3.25 3.5a.75.75 0 11-1.1 1.02L10 4.852 7.3 7.76a.75.75 0 01-1.1-1.02l3.25-3.5A.75.75 0 0110 3zm-3.76 9.2a.75.75 0 011.06.04l2.7 2.908 2.7-2.908a.75.75 0 111.1 1.02l-3.25 3.5a.75.75 0 01-1.1 0l-3.25-3.5a.75.75 0 01.04-1.06z" clip-rule="evenodd" />
                </svg>
              </span>
            </x-hive-form-button>
          </li>
        </template>

      </ul>
    </x-slot>
  </x-hive-display-dropdown>
 </div>
</div>
@pushOnce('scripts')
  <script type="text/javascript">
    function pickPublisher() {
      return {
        publishers: [
          {username: 'johndoe', name: 'John Doe', picture: ''},
          {username: 'anonymous', name: 'Anonymous', picture: ''}
        ],
        publisher: {username: 'johndoe', name: 'John Doe', picture: ''},
        selectPublisher(e) {
          let obj = this.publishers.find(o => o.username === e);
          this.publisher = obj;
        },
      }
    }
  </script>
@endPushOnce
