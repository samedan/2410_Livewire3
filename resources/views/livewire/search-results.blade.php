<div>
    <div class="mt-4">
        @foreach ($results as $result)
            <div class="pt-2">
                <a href="/articles/{{$result->id}}">{{$result->title}}</a>
            </div>
        @endforeach
    </div>
</div>
 