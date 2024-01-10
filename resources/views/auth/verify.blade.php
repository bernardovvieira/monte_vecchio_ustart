@extends('layouts.app')

@section('content')

<style>
    html,
        body {
            background-image: url("https://bitwise.dev.br/bernardo/laravel/img/road.jpg");
            background-repeat: no-repeat;
            background-size: cover;
        }
</style>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verifique seu E-Mail') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Um link de verificação foi enviado para o seu endereço de email.') }}
                        </div>
                    @endif

                    {{ __('Antes de continuar, por favor procure em seu email o link de verificação.') }}
                    {{ __('Se você não recebeu o email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('clique aqui para solicitar novamente') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
