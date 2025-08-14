@extends('posts.master')
@section('title')
    All Posts
@endsection
@section('content')
    <table class="table mt-3">
        <a href="" class="btn btn-success"> create post</a>
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">title</th>
                <th scope="col">body</th>
                <th scope="col">postedby</th>
                <th scope="col">actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($allposts as $post)
                <tr>

                    <td>{{ $post['id'] }}</td>
                    <td>{{ $post['title'] }}</td>
                    <td>{{ $post['body'] }}</td>
                    <td>{{ $post['posted_by'] }}</td>
                    <td class="col">
                        <a href="{{ route('posts.show', ['post' => $post['id']]) }}" class="btn btn-info">View</a>
                        <a href="" class="btn btn-warning">Edit</a>
                        <a href="" class="btn btn-danger">Delete</a>
                    </td>

                </tr>
            @endforeach

        </tbody>
    </table>
@endsection
