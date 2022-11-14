<div class="grid">
     <button
       x-on:click="{{$naming}} = {{$naming}} === '{{$id}}' ? false : '{{$id}}'"
       :class="{ 'button-active bg-gray-50': {{$naming}} === '{{$id}}' }"
       class="{{$headerClass}} button flex px-4 py-2.5 items-center hover:bg-gray-200/60 text-gray-600 font-semibold"
     >
       {{$header}}
     </button>
     <div x-cloak x-show="{{$naming}} === '{{$id}}'" x-collapse>
       <div class="{{$bodyClass}} content px-4 py-2 bg-gray-50">
         {{$body}}
       </div>
     </div>
</div>
