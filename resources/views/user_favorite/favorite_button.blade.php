@if (Auth::id() != $micropost->id)
    {{-- Favorite/Unfavorite ボタンのフォーム --}}
    <form method="POST" action="{{ Auth::user()->is_favorite($micropost->id) ? route('unfavorite', $micropost->id) : route('favorite', $micropost->id) }}">
        @csrf
        @if (Auth::user()->is_favorite($micropost->id))
            {{-- Unfavorite ボタン --}}
            <button type="submit" class="btn btn-error btn-block normal-case" 
                onclick="return confirm('id = {{ $micropost->id }} お気に入りを外します。よろしいですか？')">Unfavorite</button>
        @else
            {{-- Favorite ボタン --}}
            <button type="submit" class="btn btn-primary btn-block normal-case">Favorite</button>
        @endif
    </form>
@endif