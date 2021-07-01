@if( session()->has('success'))
    <div x-data ="{show: true }"
         x-init="setTimeout( () => show = false,4000)"
         x-show="show"
         class="fixed bg-green-500 text-white px-4 py-2  rounded-xl bottom-3 right-3 text-sm">
        <p>{{ session()->get('success') }}</p>
    </div>
@endif
