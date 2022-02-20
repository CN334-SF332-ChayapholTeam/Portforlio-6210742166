@extends('posts.layout')

@section('content')

<div class="row mt-5">
    <div class="col-md-12">
        <h2>Project</h2>
        <a href="{{ route('posts.index')}}" class="btn btn-primary my-3">Back</a>
    </div>
</div>

<div class="row">
    <div class="card p-3">
        <div class="card-title">
            <strong>Project Name:</strong>
            {{ $post->name }}
        </div>
        <div class="card-title">
            <strong>Programming Language:</strong>
            {{ $post->language }}
        </div>
        <div class="card-title">
            <strong>Frameworks:</strong>
            {{ $post->frameworks }}
        </div>
    </div>
</div>

@endsection