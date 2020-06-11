<div class="flex p-4 border-b ">
    <div class="mr-2 flex-shrink-0">
        <img src="{{ $tweet->user->avatar }}"
             alt="" class="rounded-full mr-4">
    </div>

    <div>
        <h5 class="font-bold">{{ $tweet->user->name }}</h5>

        <p class="text-sm mb-4">
            {{ $tweet->body }}
        </p>
    </div>
</div>
