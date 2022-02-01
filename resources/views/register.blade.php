@extends('layouts.app')

@section('title', '| Registrar')

@section('content')
    <div class="min-vh-100 d-flex justify-content-center align-items-center">
        <form class="mw-100" action="{{ route('signup') }}" method="post" style="width: 400px;">
            @csrf

            <div class="text-center mb-5">
                <img src="{{ asset('images/logo.png') }}" width="150">
            </div>

            <div class="mb-3">
                <input class="form-control" name="name" placeholder="Nome" required>
            </div>

            <div class="mb-3">
                <input class="form-control" type="email" name="email" placeholder="E-mail" required>
            </div>

            <div class="mb-3">
                <input class="form-control" type="password" name="password" placeholder="Senha" required>
            </div>

            <div class="d-grid gap-2">
                <button class="btn btn-outline-primary" type="submit">Cadastrar</button>
                <a class="link-secondary" href="{{ route('login') }}">Login</a>
            </div>
        </form>
    </div>
@endsection
