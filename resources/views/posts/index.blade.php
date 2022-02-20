<div class="dropdown">
    <nav>
        <img class="logo" src="https://pngimage.net/wp-content/uploads/2018/06/png-portfolio-3.png">
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/about">About me</a></li>
            <li><a href="/education">Education</a></li>
            <li><a href="/skills">Skills</a></li>
            <li><a href="/posts">Project</a></li>
            <li><a href="/contact">Contact</a></li>
        </ul>
    </nav>
</div>
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
            <form action="{{ route('posts.destroy', $value->id) }}" method="post">
                <a href="{{ route('posts.show', $value->id) }}" class="btn btn-primary">Show</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>

    @endforeach
</table>

{!! $data->links() !!}

@endsection