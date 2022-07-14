@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Titlo: {{$post->title}}
        @if ($post->category->name)
        <span class="badge bg-primary p-2">{{$post->category->name}}</span>
        @else
        <span class="badge bg-primary p-2">no category</span>
        @endif
    </h2>
    <div>
        @forelse ($post->tags as $tag )
            <span class="badge badge-success">{{$tag->name}}</span>
        @empty
            <span class="badge badge-success">no tags</span>
        @endforelse
    </div>
    <h3>{{$post->title}} description:</h3>
    <p>{{$post->description}}</p>
</div>
@endsection
