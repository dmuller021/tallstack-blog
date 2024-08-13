<x-app-layout>
    @livewire('refresh-blog')
    <div class="container mx-auto px-4">
        <div class="flex flex-col items-center">
            <a class="my-8 flex self-start" href="{{route('blogs.create')}}">
                <x-primary-button>Post</x-primary-button>
            </a>

            <div class="w-full">
                <x-card url="https://google.com" title="Blog" message="This is an example"></x-card>
            </div>
        </div>
    </div>
</x-app-layout>
