@extends('layouts.layout')

@section('title', 'Confirmação de senha')

@section('navbar')
    @include('components.aluno-navbar')
@endsection

@section('main')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <div class="card">
                <div class="card-header">{{ __('Confirme sua senha') }}</div>

                <div class="card-body">
                    {{ __('Por favor, confirme sua senha antes de continuar.') }}

                    <form method="POST" action="{{ route('password.confirm') }}">
                        @csrf
                        <div class="form-group row pt-3">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Senha:') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Confirmar senha') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Esqueci minha senha') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
