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
                    <div class="card-header">{{ __('Controle de veículos') }}
                        <a href="{{ route('criar') }}" type="button" class="float-right btn btn-primary">Adicionar
                            Veículo</a>
                    </div>

                    @php
                        use Illuminate\Support\Facades\DB;
                        $frotas = DB::select('SELECT * FROM frota ORDER BY id ASC');
                    @endphp

                    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                    <script>
                        var msg = '{!! Session::get('create') !!}';
                        var exist = '{!! Session::has('create') !!}';
                        if (exist) {
                            Swal.fire({
                                position: 'top-end',
                                icon: 'success',
                                title: 'Adicionado!',
                                text: msg,
                                showConfirmButton: false,
                                timer: 1500
                            })
                        }
                    </script>
                    <script>
                        var msg = '{!! Session::get('update') !!}';
                        var exist = '{!! Session::has('update') !!}';
                        if (exist) {
                            Swal.fire({
                                position: 'top-end',
                                icon: 'success',
                                title: 'Atualizado!',
                                text: msg,
                                showConfirmButton: false,
                                timer: 1500
                            })
                        }
                    </script>
                    <script>
                        var msg = '{!! Session::get('delete') !!}';
                        var exist = '{!! Session::has('delete') !!}';
                        if (exist) {
                            Swal.fire({
                                position: 'top-end',
                                icon: 'success',
                                title: 'Excluído!',
                                text: msg,
                                showConfirmButton: false,
                                timer: 1500,
                                timerProgressBar: true
                            })
                        }
                    </script>

                    <div class="card-body">
                        @if (isset($frotas))
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Marca</th>
                                        <th scope="col">Modelo</th>
                                        <th scope="col">Ano</th>
                                        <th scope="col">Observação</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($frotas as $frota)
                                        <tr>
                                            <th scope="row">{{ $frota->id }}</th>
                                            <td>{{ $frota->marca }}</td>
                                            <td>{{ $frota->modelo }}</td>
                                            <td>{{ $frota->ano }}</td>
                                            <td>{{ $frota->observacao }}</td>
                                            <td class="row">
                                                <a href="{{ route('editar', $frota->id) }}" type="button"
                                                    class="btn btn-secondary" style="margin-left: 10px;">Editar</a>
                                                {!! Form::open(['class', 'name' => 'form', 'route' => ['excluir', $frota->id], 'method' => 'delete']) !!}
                                                @method('delete')
                                                @csrf
                                                <button type="submit" class="btn btn-danger"
                                                    style="margin-left: 10px;">Excluir</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
