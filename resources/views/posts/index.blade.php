@extends('posts.layout');
@section('content')

<div class="row mt-5">
    <div class="col-md-12">
        <h2>Project</h2>
        <a href="{{ route('posts.create') }}" class="btn btn-success my-3">Add new Project</a>
    </div>
</div>

@if ($message = Session::get('success'))
    <div class="alert alert-success">
        {{ $message }}
    </div>
@endif

<table class="table table-bordered">
    <tr>
        <th>No.</th>
        <th>Project Name</th>
        <th>Language</th>
        <th>Frameworks</th>
        <th width="280px">Action</th>
    </tr>

    @foreach ($data as $key => $value)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $value->name }}</td>
            <td>{{ $value->language }}</td>
            <td>{{ $value->frameworks }}</td>
            <td>
                <form action="{{ route('posts.destroy', $value->id) }}">
                    <a href="{{ route('posts.show', $value->id) }}" class="btn btn-primary">Show</a>
                    <a href="{{ route('posts.edit', $value->id) }}" class="btn btn-success">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>

    @endforeach
</table>

@endsection