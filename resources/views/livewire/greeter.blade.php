<div>
    <div>
        {{-- Nothing in the world is as soft and yielding as water. --}}
        Hello, {{$name}}
    </div>
    <div class="mt-2">
        <button 
        class="text-white font-medium rounded-md px-4 py-2 bg-blue-600"
        wire:click="changeName('cur')"
        >Greet</button>

    </div>
</div>
