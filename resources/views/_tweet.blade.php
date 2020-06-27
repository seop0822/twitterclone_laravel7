<div class="flex p-4 {{ $loop->last ? '' : 'border-b border-b-gray-400' }} ">
    <div class="mr-2 flex-shrink-0">
        <a href="{{  $tweet->user->path() }}">
            <img
                src="{{ $tweet->user->avatar }}"
                alt=""
                class="rounded-full mr-4"
                width="50"
                height="50"
            >
        </a>
    </div>

    <div>
        <h5 class="font-bold">
            <a href="{{ route('profile', $tweet->user) }}">
                {{ $tweet->user->name }}
            </a>
        </h5>

        <p class="text-sm mb-4">
            {{ $tweet->body }}
        </p>
    </div>
</div>
