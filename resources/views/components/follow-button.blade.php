@if(current_user()->isNot($user))
    <form action="{{ route('follow', $user->username) }}" method="POST">
        @csrf
        <button
            type="submit"
            class="bg-blue-500 rounded-full shadow py-2 px-2 text-white text-xs"
        >
            {{ current_user()->following($user) ? '언팔로우' : '팔로우' }}
        </button>
    </form>
@endif
