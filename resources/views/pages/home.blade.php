@extends('layouts.app')

@section('content')
    <h1 class="mb-4">Welcome to AU Universe</h1>

    <div class="row">
        @foreach ($stories as $story)
            <div class="col-md-6">
                <x-story-card :id="$story->id" :cover="$story->cover_image" :title="$story->title" :synopsis="$story->synopsis" />
            </div>
        @endforeach
    </div>
@endsection

@section('sidebar')
    <h5>Latest Updates</h5>
    <ul class="list-group">
        @foreach ($latestStories as $story)
            <li class="list-group-item">
                <a href="{{ route('stories.show', $story->id) }}" class="text-dark">{{ $story->title }}</a>
            </li>
        @endforeach
    </ul>
@endsection
