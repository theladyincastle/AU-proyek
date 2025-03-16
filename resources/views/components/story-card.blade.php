<div class="card shadow-sm border-0" style="background-color: #FFFFF0;">
    <img src="{{ $cover }}" class="card-img-top" alt="Story Cover">
    <div class="card-body">
        <h5 class="card-title">{{ $title }}</h5>
        <p class="card-text text-muted">{{ Str::limit($synopsis, 100) }}</p>
        <a href="{{ route('stories.show', $id) }}" class="btn btn-outline-dark">Read More</a>
    </div>
</div>
