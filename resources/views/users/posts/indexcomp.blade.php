@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <h4 class="text-center mb-4">View Posts</h4>

                    <div class="basic-form">
                        
                        <h1 class="text-2xl font-medium mb-1">{{$user->name}}</h1>
                        <p>posted{{$posts->count()}} {{Str::plural('post',$posts->count())}} and recieved {{$user->recievedLikes()->count();}} likes
    
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <h4 class="text-center mb-4">All posts footer</h4>
           <div>
               @if($posts->count())
               @foreach($posts as $post)
               < x-post :post="$post" />
               @endforeach

               {{$posts->links()}}
                 @else
               <p>{{$user->name}}does not have any post
               @endif
           </div>
        </div>
    </div>

</div>
@endsection