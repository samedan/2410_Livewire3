<div>
    
    <form>
    
    <div class="mt-2">

        <input type="text" 
            class="p-4 w-9/12 border rounded-md bg-gray-700 text-white"            
            wire:model.live.debounce="searchText"
            placeholder="type your search data"
        >
        <button
        wire:click.prevent="clear()"
        {{empty($searchText) ? 'disabled': ''}}
        class="text-white font-medium rounded-md p-4
        disabled:bg-indigo-200 bg-indigo-500">
            Clear
        </button>
    </div>

    <div class="mt-4">
        @foreach ($results as $result)
            <div class="pt-2">
                <a href="/articles/{{$result->id}}">{{$result->title}}</a>
            </div>
        @endforeach
    </div>
   
</form>

</div>
