<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto bg-gray-100 border border-gray-200 p-6 rounded-xl">
            <h1 class="text-center font-bold text-gray-700 text-xl">
                Register
            </h1>
            <form action="/register" method="post" class="mt-10">
                @csrf
                <div class="mb-6">
                    <label for="name" class="block mb-2 uppercase font-bold text-xs text-gray-700">Name</label>
                    <input class="border border-gray-400 p-2 w-full"
                           type="text"
                           name="name"
                           value="{{old('name')}}"
                           id="name"
                           required >
                    @error('name')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="username" class="block mb-2 uppercase font-bold text-xs text-gray-700">Username</label>
                    <input class="border border-gray-400 p-2 w-full"
                           type="text"
                           name="username"
                           value="{{old('username')}}"
                           id="username"
                           required >
                    @error('username')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="email" class="block mb-2 uppercase font-bold text-xs text-gray-700">Email</label>
                    <input class="border border-gray-400 p-2 w-full"
                           type="email"
                           name="email"
                           value="{{old('email')}}"
                           id="email"
                           required >
                    @error('email')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="password" class="block mb-2 uppercase font-bold text-xs text-gray-700">Password</label>
                    <input class="border border-gray-400 p-2 w-full"
                           type="password"
                           name="password"
                           value="{{old('password')}}"
                           id="password"
                           required >
                    @error('password')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <button type="submit" class="bg-blue-500 text-white rounded py-2 px-4 hover:bg-blue-600">Submit</button>
                </div>
            </form>
        </main>
    </section>
</x-layout>
