@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">{{ __('Dashboard asdssg') }}</div>

                <div class="card-body">
                    <h4 class="text-center mb-4">fffddfs</h4>
                    @if (session('status'))
                    {{session('status')}}
                    @endif
    
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-6">
                                <div class="auth-form">
    
    
                                    <div class="new-account mt-3">
                                        <p>you Logged in [{{auth()->user()->name}}]
    
                                        <form action="{{route('logout')}}" method="Post">
                                            @csrf
                                            <button class="form-control" type="submit">logout</button>
                                        </form>
                                        </p>
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