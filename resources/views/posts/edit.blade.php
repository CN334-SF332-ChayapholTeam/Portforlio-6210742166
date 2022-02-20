@extends('posts.layout')

@section('content')

<div class="row mt-5">
    <div class="col-md-12">
        <h2>Edit Project</h2>
        <a href="{{ route('posts.index')}}" class="btn btn-primary">Back</a>
    </div>
</div

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Oops!</strong>
        Something wrong with your input. <br><br>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('posts.update', $post->id) }}" method="post">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-md-12 my-2">
                <div class="form-group">
                    <strong>Project Name:</strong>
                    <input type="text" name="name" value="{{ $post->name }}" class="form-control" placeholder="Enter Project Name">
                </div>
            </div>
            <div class="col-md-12 my-2">
                <div class="form-group">
                    <strong>Programming Language:</strong>
                    <input type="text" name="language" value="{{ $post->language }}" class="form-control" placeholder="Enter Programming language">
                </div>
            </div>
            <div class="col-md-12 my-2">
                <div class="form-group">
                    <strong>Frameworks:</strong>
                    <input type="text" name="frameworks" value="{{ $post->frameworks }}" class="form-control" placeholder="Enter Frameworks">
                </div>
            </div>
            <div class="col-md-12">
                <button type="submit" class="btn btn-success my-3">Update</button>
            </div>
        </div>
    </form>

@endsection