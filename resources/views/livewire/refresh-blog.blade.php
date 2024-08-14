<div>
    <div>
        @foreach($posts as $post)
            <div class="mb-5">
                <x-card url="https://google.com" title="{{ $post->title }}" message="{{ $post->contents }}"></x-card>
            </div>
        @endforeach
    </div>
</div>
