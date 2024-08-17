<div>
    <div> //Create a seperate page where user can see their own post and is able to edit them while the show page includes all blogs
        @foreach($posts as $post)
            <div class="mb-5">
                <x-card url="" title="{{ $post->title }}" message="{{ $post->contents }}"></x-card>

            @foreach($myposts as $mypost)
                        @if($post->user_id === $mypost->user_id)
                            <a href="{{ route("blogs.edit", $mypost->user_id)}}">
                                <x-primary-button>Edit</x-primary-button>
                            </a>
                        @endif
                    @endforeach

            </div>
        @endforeach
    </div>
</div>
