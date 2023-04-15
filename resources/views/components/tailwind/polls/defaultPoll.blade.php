<div>
 <div x-data="makeForm">
  <x-hive-display-card component="forms.hiiPanel" >
    <x-hive-form-label
  name="{{__('Poll')}}" />

   <div class="flex justify-between gap-2">
     <div class="gap-4 flex-1">
       <template x-for="(formOption, index) in form_options" :key="index">
         <div class="grid">
           <div class="relative grid">
             <x-hive-form-input
             x-model="formOption.name"
             name="name[]"
             x-bind:placeholder="'Option '+ (index+1)"
             is_required="true"
             wire:model.lazy="formOption.name"
             value="formOption.name"
             class="w-full"
             id="formOption.name" />
            <div class="absolute inset-y-0 right-0 flex p-1 mt-2">
                 <x-hive-form-button
                  id="remove"
                  x-bind:name="'remove'+ index"
                  tag='button'
                  color="slate"
                  size="tiny"
                  type="button"
                  @click="removeFormOption(index)"
                  x-show="form_options.length > 1"
                  />
               <!-- <kbd @click="removeField(index)" class="inline-flex items-center rounded border border-gray-200 px-1 font-sans text-xs text-gray-400">⌘K</kbd> -->
            </div>
          </div>
         </div>
       </template>

     </div>
     <div class="">
       <x-hive-form-button
         id="remove_form_field"
         name="add_form_field"
         tag='button'
         color="slate"
         title="{{__('Add option')}}"
         size="tiny"
         type="button"
         class="mt-2"
         @click="addNewFormOption()"
         />
     </div>
   </div>
   <x-slot name="footer">
     <div class="">
       <div class="grid sm:grid-cols-2 gap-2">
         <div class="">
           <x-hive-form-number
             name="form_limit"
             label="{{__('Possible selections')}}"
             value="{{ old('form_limit', '') }}"
             x-model="form_limit"
             min='1'
             max="10"
             id="form_limit" />
         </div>
         <div class="">
           <x-hive-form-date
             name="poll_deadline"
             time=true
             placeholder="{{__('Pick deadline')}}"
             date="true"
             label="{{__('Poll deadline')}}"
             value="{{ old('poll_deadline', '') }}"
             id="poll_deadline" />
         </div>
       </div>
     </div>
   </x-slot>
 </x-hive-display-card>

</div>
</div>
@pushOnce('scripts')
  <script type="text/javascript">
    function makeForm() {
      return {
        form_options: [{name:'',value:'',position:1},{name:'',value:'',position:2}],
        form_limit: 1,
        addNewFormOption() {
            this.form_options.push({
                name: '',
                value: '',
                position: ''
             });
          },
        removeFormOption(index) {
          if (this.form_options.length > 2) {
            this.form_options.splice(index, 1);
          }
         }
      }
    }
  </script>
@endPushOnce
