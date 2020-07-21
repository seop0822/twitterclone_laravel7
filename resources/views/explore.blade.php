<x-app>
    <div>
        @foreach($users as $user)
            <a href="{{ $user->path() }}" class="flex mb-5 items-center">
                <img src="{{ $user->avatar }}"
                     alt="{{ $user->username }}'s avatar"
                     width="60"
                     class="mr-4 rounded"
                >

                <div>
                    <h4 class="font-bold">{{'@'. $user->username }}</h4>

                </div>
            </a>
        @endforeach

        {{ $users->links() }}
    </div>
</x-app>
