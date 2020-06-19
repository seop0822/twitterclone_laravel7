@extends('components.app')

@section('content')
    <header class="mb-6 relative">
        <img src="/images/default-profile-banner.jpg"
             alt=""
             class="mb-2"
        >

        <div class="flex justify-between items-center">
            <div>
                <h2 class="font-bold text-2xl mb-2">{{ $user->name }}</h2>
                <p class="text-sm">Joined {{ $user->created_at->diffForHumans() }}</p>
            </div>

            <div class="flex">
                <a href="" class="rounded-full border border-gray-300 py-2 px-4 text-black text-xs mr-2">Edit Profile</a>
                <form action="/profiles/{{ $user->name }}" method="POST">
                    @csrf
                    <button
                        type="submit"
                        class="bg-blue-500 rounded-full shadow py-2 px-2 text-white text-xs">Follow me
                    </button>
                </form>
            </div>
        </div>

        <img src="{{ $user->avatar }}"
             alt="your avatar" class="rounded-full mr-2 absolute"
             style="width:150px; left:calc(50% - 75px); top: 138px "
        >

        <p class="text-sm">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aliquam atque
            consequuntur cumque enimex facilis fugiat illum maiores minus, nam, nobis qui
            quo saepe, similique totam vitae. Odio, placeat!
        </p>
    </header>

    @include('_timeline', [
        'tweets' => $user->tweets
    ])
@endsection
