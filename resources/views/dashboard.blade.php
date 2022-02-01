@extends('layouts.app')

@section('title', '| Dashboard')

@section('content')
    
    @include('components.navbar')

    <div class="min-vh-100 d-flex flex-column justify-content-center align-items-center" style="margin-top: 100px;">
        @foreach ($posts as $post)
            @include('components.post-card', compact('post', 'user'))
        @endforeach
    </div>
@endsection
