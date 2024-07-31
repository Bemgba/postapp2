@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">{{ __('Posts') }}</div>

                <div class="card-body">
                    <h4 class="text-center mb-4">Posts</h4>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <div class="basic-form">
                        @auth
                        <form action="{{ url('posts/') }}" method="Post">
                        {{-- <form action="{{route('posts')}}" method="Post"> --}}
                            @csrf
                            <div class="form-group">
                                <textarea class="form-control" rows="4" id="comment" required name="body">

                             </textarea>
                            </div>

                            <div class="text-center mt-4, col-xl-8 col-lg-4">
                                <button type="submit" class="btn btn-primary btn-block">post</button>
                            </div>
                        </form>
                        @endauth
                        @if ($posts->count())
                        <div class="form-group mx-sm-3 mb-2">
                            @foreach ($posts as $post)
                            <div class="mb-1">
                                <!--class="font-weight-bolder"-->
                                <a href="{{route('users.posts',$post->user)}}" class="font-weight-bold">
                                    {{$post->user->name }}</a>
                                <!--one way to format time in laravel, this will show  only the time of the action
                               {$post->created_at->toTimestring()} -->
                                <span class="font-italic">
                                    {{$post->created_at->diffForHumans()}}</span>
                            </div>
                            <div class="list-group-item d-flex justify-content-between">
                                <p class="text-black-50">
                                    {{$post->body}}
                                </p>

                                <div class="d-flex align-items-center">

                                    @auth
                                    {{-- if AUTH user had liked this post, show unlike but if not, show like botton --}}
                                    @if($post->ownedBy(auth()->user()))
                                    <small>
                                        <div>
                                            <form action="{{route('posts.destroy', $post)}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <input type="hidden" name="post_id" value="{{$post->id}}">
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                            <a class="btn btn-info" href="{{ route('posts.show',$post->id) }}">Show</a>
                                        </div>
                                    </small>
                                    @endif

                                    @if(!$post->LikedBy(auth()->user()))
                                    <small>
                                        <form action="{{route('posts.likes', $post)}} " method="POST" class="md-1">
                                            @csrf
                                            <input type="hidden" name="user_id" value="{{\Auth::user()->id}}">

                                            <input type="hidden" name="post_id" value="{{$post->id}}">

                                            <button type="submit" class="btn btn-success"> like
                                            </button>

                                        </form>
                                    </small>

                                    @else
                                    <small>
                                        <form action="{{route('posts.likes', $post)}}" method="Post" class="md-1">
                                            <input type="hidden" name="user_id" value="{{\Auth::user()->id}}">

                                            <input type="hidden" name="post_id" value="{{$post->id}}">
                                            {{-- SPOOFING --}}
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-gray"> unlike
                                            </button>

                                        </form>
                                    </small>
                                    @endif

                                    @endauth
                                    <small> <span>{{$post->likes->count()}}
                                            {{Str::plural('like',
                                            $post->likes->count()) }}</span>
                                    </small>
                                    <!-- LARAVEL STRING HELPER CLASS
                            to automatically pluralize "like" if a post has more than 1 like
                                Str::plural('like', $post->likes->count())-->

                                </div>
                            </div>


                            @endforeach
                        </div>
                        {{ $posts->links() }}
                        @else
                        <p>No posts </p>
                        @endif
                    </div>
                </div>
            </div>



            @endsection
