<div class="border border-gray-300 rounded-lg">
{{--    @forelse 는 @if 와 @foreach 의 결합이다. 뷰로 넘어온 배열에 값이 있으면 @forelse 를 타고, 그렇지 않으면 @empty 를 탄다. --}}
    @forelse($tweets as $tweet)
        @include('_tweet')
    @empty
        <p class="p-4">아직 트윗이 아무것도 없다</p>
    @endforelse

    {{ $tweets->links() }}
</div>
