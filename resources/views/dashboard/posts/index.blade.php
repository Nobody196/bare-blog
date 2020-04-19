@extends('layouts.app')

@section('content')
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{route('dashboard.index')}}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Posts</li>
            </ol>
        </nav>
        <table class="table table-dark">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Date</th>
            </tr>
            </thead>
            <tbody>
            @foreach($posts as $post)
                <tr>
                    <th scope="row">{{ $post->id }}</th>
                    <td><a href="{{route('dashboard.post', $post->id)}}">{{ $post->title }}</a></td>
                    <td>{{ $post->created_at }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $posts->links() }}
        <a href="{{route('dashboard.posts.create')}}" class="btn btn-success btn-sm float-right">New Post</a>
    </div>
@endsection
