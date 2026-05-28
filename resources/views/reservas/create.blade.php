@extends('layouts.app')

@section('title', 'Nova Reserva')

@section('content')

<div class="row justify-content-center">

    <div class="col-lg-7">

        <div class="custom-card">

            <h1 class="page-title">
                Nova Reserva
            </h1>

            @if(session('erro'))

                <div class="alert alert-danger">

                    {{ session('erro') }}

                </div>

            @endif

            <form action="/reservas/salvar"
                  method="POST">

                @csrf

                <div class="mb-3">

                    <label class="mb-2">
                        Sala
                    </label>

                    <select name="sala"
                            class="form-control">

                        <option>Sala 1</option>
                        <option>Sala 2</option>
                        <option>Sala 3</option>

                    </select>

                </div>

                <div class="mb-3">

                    <label class="mb-2">
                        Data
                    </label>

                    <input type="date"
                           name="data"
                           class="form-control"
                           required>

                </div>

                <div class="row">

                    <div class="col-md-6 mb-3">

                        <label class="mb-2">
                            Horário Inicial
                        </label>

                        <input type="time"
                               name="inicio"
                               class="form-control"
                               required>

                    </div>

                    <div class="col-md-6 mb-4">

                        <label class="mb-2">
                            Horário Final
                        </label>

                        <input type="time"
                               name="fim"
                               class="form-control"
                               required>

                    </div>

                </div>

                <button class="btn btn-modern btn-primary-modern w-100">

                    Reservar Sala

                </button>

            </form>

        </div>

    </div>

</div>

@endsection