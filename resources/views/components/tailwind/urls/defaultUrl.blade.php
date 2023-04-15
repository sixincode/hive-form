<div>

 <div x-data="addUrls">
  <x-hive-display-card component="forms.hiiPanel" >
    <x-hive-form-label
  name="{{__('Links')}}" />
   <div class="flex justify-between gap-2">
     <div class="gap-4 flex-1 -mt-4">
       <template x-for="(url, index) in urls" :key="index">
         <div class="grid mt-4">
           <div class="flex justify-between space-x-2">
             <div class="flex-1">
               <x-hive-form-input
               x-model="url.title"
               name="title[]"
               x-bind:placeholder="'Description '+ (index+1)"
               is_required="true"
               wire:model.lazy="url.title"
               value="url.title"
               class="w-full"
               id="url.title" />
              <div class="relative rounded-md shadow-sm">
               <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3.5">
                 <span class="text-gray-500 sm:text-sm">https://</span>
               </div>
               <x-hive-form-input
               x-model="url.link"
               name="link[]"
               component="slatt"
               x-bind:placeholder="'www.example.com'"
               is_required="true"
               wire:model.lazy="url.link"
               value="url.link"
               class="w-full pl-16"
               id="url.link" />
             </div>
           </div>
            <div class="flex">
              <x-hive-form-button
                id="remove_link"
                x-bind:name="'remove'+ index"
                tag='button'
                color="slate"
                size="tiny"
                type="button"
                class="h-8 h-8 mt-2"
                @click="removeUrl(index)"
                x-show="urls.length > 1"
                />
             </div>
          </div>
         </div>
       </template>

     </div>
     <div class="">
       <x-hive-form-button
         id="remove"
         name="add_new_url"
         tag='button'
         color="slate"
         title="{{__('Add link')}}"
         size="tiny"
         type="button"
         class="mt-2"
         @click="addNewUrl()"
         />
     </div>
   </div>
   <x-slot name="footer">

   </x-slot>
 </x-hive-display-card>

</div>
</div>

@pushOnce('scripts')
<script type="text/javascript">
function addUrls() {
  return {
    urls: [{title:'',type: '',link: '',position: 1}],
    main: '',
    addNewUrl() {
        this.urls.push({
            title: '',
            type: '',
            link: '',
            position: ''
         });
      },
    removeUrl(index) {
      if (this.urls.length > 1) {
        this.urls.splice(index, 1);
      }
     }
  }
}
</script>
@endPushOnce
