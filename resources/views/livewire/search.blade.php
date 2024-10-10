<div>
    
    <form>
    
    <div class="mt-2">

        <input type="text" 
            class="p-4 w-9/12 border rounded-md bg-gray-700 text-white"            
            wire:model.live.debounce="searchText"
            placeholder="{{$placeholder}}"
        >
        <button
        wire:click.prevent="clear()"
        {{empty($searchText) ? 'disabled': ''}}
        class="text-white font-medium rounded-md p-4
        disabled:bg-indigo-200 bg-indigo-500">
            Clear
        </button>
    </div>

    
   
</form>

<livewire:search-results>

</div>
