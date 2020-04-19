@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <form action="{{route('dashboard.post.save', $post->id)}}" method="POST" style="display: contents;">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">Title</div>
                        <div class="card-body">
                            <input class="form-control" name="title" type="text" placeholder="New Blog Post" value="{{ $post->title }}">
                        </div>
                        <div class="card-footer">
                            Blog post's title.
                        </div>
                    </div>
                </div>
                <div class="col-md-12 mt-5">
                    <div class="card">
                        <div class="card-header">Message</div>
                        <textarea class="card-body" name="message">{{ $post->message }}</textarea>
                        <script>
                            CKEDITOR.replace( 'message' );
                        </script>
                        <div class="card-footer">
                            @csrf
                            <button type="submit" class="btn btn-success btn-sm float-right">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
