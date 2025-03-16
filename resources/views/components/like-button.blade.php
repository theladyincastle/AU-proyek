<form action="{{ route('stories.like', $storyId) }}" method="POST">
    @csrf
    <button type="submit" class="btn btn-outline-danger">
        ❤️ {{ $likesCount }}
    </button>
</form>
