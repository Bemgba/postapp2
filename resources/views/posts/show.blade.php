@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">{{ __('Dashboard asdssg') }}</div>

                <div class="card-body">
                    <h4 class="text-center mb-4">show single post</h4>
                    @if (session('status'))
                    {{session('status')}}
                    @endif

                    <div class="authincation-content">

                        <div class="card">
                            <div class="card-body">
                                <h4 class="text-center mb-4">gg</h4>
                                <div class="card">
                                    <div class="card-body">
                                        <div class="basic-form">
                                             {{-- < x-post :post="$post" /> --}}


                                            <div class="row">
                                                <div class="col-lg-12 margin-tb">
                                                    <div class="pull-left">
                                                        <h2> Show single post</h2>
                                                    </div>
                                                    <div class="pull-right">
                                                        <a class="btn btn-primary" href="{{ route('posts') }}"> Back</a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12 col-md-12">
                                                    <div class="form-group">
                                                        <strong>Title:</strong>
                                                        {{ $post->id }}
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-12 col-md-12">
                                                    <div class="form-group">
                                                        <strong>Body:</strong>
                                                        {{ $post->body }}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        lloo another card
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>


@endsection
