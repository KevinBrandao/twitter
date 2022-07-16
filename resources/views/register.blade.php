@extends('layouts.app')
@section('content')

<div class="d-flex flex-column justify-content-center align-items-center" style="height: 100vh;">
            <h1>Registre-se</h1>

            <form action="/signup" method="post">
                @csrf
                <input name="name" placeholder="Nome" class="form-control mb-3">
                <input type="email" name="email" placeholder="E-mail" class="form-control mb-3">
                <input type="password" name="password" placeholder="Senha" class="form-control mb-3">
                <button type="submit" class="btn btn-primary">Salvar</button>
            </form>
        </div>

@endsection