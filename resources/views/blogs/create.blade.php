<x-app-layout>
    <form action="{{ route('blogs.store') }}" method="POST">
        @csrf
        <div class="container mx-auto px-4 mt-5">
            <div class="flex flex-col items-center">
                <h1>Title:</h1>

                <div class="container mx-auto px-4 flex justify-center">
                    <x-text-input type="text" name="title"></x-text-input>
                </div>
            </div>
        </div>

        <div class="container mx-auto px-4 mt-5">
            <div class="flex flex-col items-center">
                <h1>Description:</h1>

                <div class="container mx-auto px-4 flex justify-center">
                    <x-text-input type="text" name="contents"></x-text-input>
                </div>

                <div class="mt-5">
                    <x-primary-button>Add</x-primary-button>
                </div>
            </div>
        </div>
    </form>


</x-app-layout>
