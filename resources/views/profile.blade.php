@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('profile') }}</div>
                @foreach($data as $data1)
                @endforeach  
                <div class="card-body">
                <a class='btn btn-primary' href = "{{ route('profile.edit',Auth::user()->id) }}">Edit Profile</a>
                    <img src="{{ $data1->path_pic_profile }}">
               
                    <h4>{{ $data1->name }}</</h4>
                    <h5>{{ $data1->email }}</</h5>

                
                </div>
            </div>
            <br>
            <h4>Mypost:</h4>
            <hr>
            @foreach($posts as $post)
                    <h5>{{ $post->title }}</h5>
                    <p>{{ $post->content }}</p>
                    <hr>
            @endforeach

        </div>
    </div>
</div>
@endsection