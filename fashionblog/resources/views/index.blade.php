@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h1><strong><marquee>IKECHUKWU POSTS</marquee></strong></h1>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('posts.create') }}"> Create New Post</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>NO</th>
            <th>TITLE</th>
            <!-- <th>BODY</th> -->
            <th>TIME CREATED</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($posts as $post)
        <tr>
            <td>{{ ++$a }}</td>
            <td>{{ $post->title }}</td>
            <!-- <td>{{ $post->body }}</td> -->
            <td>{{ $post->created_at }}</td>
            <td>
                <form action="{{ route('posts.destroy',$post->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('posts.show',$post->id) }}">View  Post</a>

                    <a class="btn btn-primary" href="{{ route('posts.edit',$post->id) }}">Edit Post</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $posts->links() !!}

@endsection


GOOGLE_CLIENT_ID=859833068942-p0b5oc41i2jv4hes0stpqf7cp0jed6oi.apps.googleusercontent.com
GOOGLE_CLIENT_SECRET=2C7MjuI46dHhge7wN0xaRpl9
GOOGLE_REDIRECT=https://localhost:8000/auth/google/callback

FACEBOOK_CLIENT_ID=539782493213804
FACEBOOK_CLIENT_SECRET=2311cf994f2dcfc640abf38a8a9f175f
FACEBOOK_CALLBACK_URL=https://localhost:8000/auth/facebook/callback
