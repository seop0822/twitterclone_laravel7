<div class="border border-blue-400 rounded-lg px-8 py-6 mb-8">
    <form method="POST" action="/tweets">
        @csrf
        <textarea name="body"
                  class="w-full"
                  placeholder="what't up"
                  required
                  autofocus
        >

        </textarea>

        <hr class="my-4">

        <footer class="flex justify-between items-center">
            <img src="{{ auth()->user()->avatar }}"
                 alt="your avatar" class="rounded-full mr-2"
                 width="50"
                 height="50"

            >

            <button type="submit"
                    class="bg-blue-500 hover:bg-blue-600 shadow text-white text-sm rounded-lg px-10 py-2 h-10">
                Tweeat-a-rool
            </button>
        </footer>
    </form>

    @error('body')
        <p class="text-red-500 test-sm">{{ $message }}</p>
    @enderror
</div>
