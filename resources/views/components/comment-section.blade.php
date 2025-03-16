<div class="mt-4">
    <h5 class="fw-bold">Comments</h5>
    <div class="list-group">
        @foreach($comments as $comment)
            <div class="list-group-item bg-light">
                <strong>{{ $comment->user->username }}</strong>: {{ $comment->comment }}
            </div>
        @endforeach
    </div>
</div>
