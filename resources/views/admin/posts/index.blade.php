@extends('layouts.admin')


@section('content')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">titolo</th>
                <th scope="col">slug</th>
            </tr>
        </thead>
        @foreach ($posts as $post)
            <tr>
                <td scope="row">{{ $post->id }}</td>
                <td scope="row">{{ $post->title }}</td>
                <td colspan="2">{{ $post->slug }}</td>
                <td>
                    <a href="{{ route('admin.posts.show', ['post' => $post->id]) }}"><button
                            class="btn btn-primary">vedi</button></a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
