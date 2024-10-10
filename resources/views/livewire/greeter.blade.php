<div>
    
    <form 
    wire:submit="changeGreeting()"
    >
    <div>
        <select type="text" 
        id='newName'
        class="p-4 border rounded-md bg-gray-700 text-white"
        {{-- "name" comed from Greeter.php --}}
        wire:model.fill="greeting"
        >
        @foreach ($greetings as $item)
            <option value="{{$item->greeting}}">{{$item->greeting}}</option>
        @endforeach
    </select>
        <input type="text" 
        class="p-4 border rounded-md bg-gray-700 text-white"
        {{-- "name" comed from Greeter.php --}}
        wire:model="name"
        >
    </div>
    <div>
        @error('name')
            {{$message}}
        @enderror
    </div>
    <div class="mt-2">
        <button 
        type="submit"
        class="text-white font-medium rounded-md px-4 py-2 bg-blue-600"
        
        >Greet</button>

    </div>
</form>
@if($greetingMessage != '')
    <div class="mt-5">            
        {{$greetingMessage}}
    </div>
@endif
</div>
