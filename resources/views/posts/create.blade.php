@extends('layouts.app')

@section('title', '| Login')

@section('content')
    @include('components.navbar')

    <div class="min-vh-100 d-flex justify-content-center align-items-center">
        <form class="mw-100" action="/posts/store" method="post" enctype="multipart/form-data">
            @csrf

            <h1 class="text-secondary text-center mb-5">Criar Post</h1>

            <div class="mb-3">
                <input class="form-control" type="file" name="photo" accept="image/*" required>
            </div>

            <div class="mb-3">
                <textarea class="form-control" name="description" id="description" placeholder="Descrição" rows="3"></textarea>
            </div>

            <div class="d-grid gap-2">
                <button class="btn btn-outline-primary" type="submit">Enviar</button>
            </div>
        </form>
    </div>
@endsection
