@auth()

    <x-panel>
        <form action="/posts/{{$post->slug}}/comments" method="post">
            @csrf

            <header class="flex items-center">
                <img src="https://i.pravatar.cc/60?u={{ auth()->id() }}" alt="avatar" width="40"
                     height="40" class="rounded-full">
                <h2 class="ml-4"> Want to participate?</h2>

            </header>
            <div class="mt-6">
                <textarea
                    name="body"
                    rows="5"
                    class="w-full text-sm focus:outline-none focus-ring"
                    placeholder="Quick, thing of something  to say!"
                    required
                ></textarea>
                @error('body')
                <span class="text-xs text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div class="flex justify-end mt-6 pt-6 border-t border-gray-200">
                <x-submit-button>Post</x-submit-button>
            </div>
        </form>
    </x-panel>
@else
    <p class="font-semibold">
        <a class="text-blue-500 hover:underline" href="/register">Register </a> or
        <a class="text-blue-500 hover:underline" href="/login">Log in </a>to leave a comment!
    </p>

@endauth
