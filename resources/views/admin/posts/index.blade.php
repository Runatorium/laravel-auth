@extends('layouts.admin')


@section('content')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">titolo</th>
                <th scope="col">slug</th>
            </tr>
        </thead>
        @foreach ($posts as $post)
            <tr>
                <td scope="row">{{ $post->title }}</td>
                <td colspan="2">{{ $post->slug }}</td>
            </tr>
        @endforeach
    </table>
@endsection
