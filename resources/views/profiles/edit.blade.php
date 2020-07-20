<x-app>
    회원정보 수정
    <form action="{{ $user->path() }}" method="POST">
        @csrf
        @method('PATCH')

        <div class="mb-6">
            <label class="block mb-2 uppercase font-bold text-xs text-grey-700"
                   for="name`">
                Name`
            </label>

            <input class="border border-grey-400 p-2 w-full"
                   type="text"
                   name="name`"
                   id="name`"
                   required>

            @error('name`')
            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>
    </form>
</x-app>
