<x-app-layout>
    <div class="container mx-auto px-4">
        <div class="flex flex-col items-center">
            <a class="my-8 flex self-start" href="{{route('blogs.create')}}">
                <x-primary-button>Post</x-primary-button>
            </a>


            <div class="w-full mb-5">
                @livewire('refresh-blog')
            </div>
        </div>
    </div>
</x-app-layout>
