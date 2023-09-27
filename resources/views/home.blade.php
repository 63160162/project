@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('New Post Today') }}</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if ($message = Session::get('success'))  
                        <div class="alert alert-success alert-block">  
                             
                            <strong>{{ $message }}</strong>  
                        </div>  
                    @endif  

                    {{ __('You are logged in!') }}

                    You are nomal user.

                    </br>
                    <a class='btn btn-primary' href = "{{ route('home.create') }}">Create New Post</a>
                    </br>


                    @foreach($new_post as $post)
                    <div class="card-body">
                        <h5>{{ $post->title }}</h5>
                        <p>{{ $post->content }}</p>
                    <hr>
                    </div>

                    @endforeach
                    
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
