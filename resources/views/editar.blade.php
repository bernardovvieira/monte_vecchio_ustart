@extends('layouts.app')

@section('content')

<style>
    html,
        body {
            background-image: url("https://coredebotucarai.org.br/bernardo/imagens/road.jpg");
            background-repeat: no-repeat;
            background-size: cover;
        }
</style>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Frota') }}
                    <a href="{{ route('home') }}" type="button" class="float-right btn btn-secondary">Voltar</a>
                </div>

                <div class="card-body">
                    {!! Form::open(['class', 'name'=>'form', 'route'=>['atualizar', $frota->id], 'method'=>'put']) !!}
                        @csrf
                        @method('PUT')

                        <div class="col-md-6">
                            <label for="marca" class="form-label">Marca</label>
                            <input type="text" class="form-control" id="marca" name="marca" required value="{{ $frota->marca }}">
                        </div>
                        <div class="col-md-6">
                            <label for="ano" class="form-label">Ano</label>
                            <input type="number" class="form-control" id="ano" name="ano" required value="{{ $frota->ano }}">
                        </div>
                        <div class="col-md-6">
                            <label for="modelo" class="form-label">Modelo</label>
                            <input type="text" class="form-control" id="modelo" name="modelo" required value="{{ $frota->modelo }}">
                        </div>
                        <div class="col-12" style="margin: 15px 0;">
                            <label for="observacao" class="form-label">Observação</label>
                            <textarea class="form-control" id="observacao" name="observacao" required rows="7">{{ $frota->observacao }}</textarea>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Atualizar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
