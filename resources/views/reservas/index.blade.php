@extends('layouts.app')

@section('title', 'Reservas')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">

    <h1 class="page-title">
        Reservas
    </h1>

    <a href="/reservas/create"
       class="btn btn-modern btn-success-modern">

        Nova Reserva

    </a>

</div>

<div class="custom-card">

    <table class="table table-modern align-middle mb-0">

        <thead>

            <tr>

                <th>Sala</th>
                <th>Data</th>
                <th>Início</th>
                <th>Fim</th>

            </tr>

        </thead>

        <tbody>

            @forelse($reservas as $r)

            <tr>

                <td>{{ $r->sala }}</td>

                <td>{{ $r->data }}</td>

                <td>{{ $r->inicio }}</td>

                <td>{{ $r->fim }}</td>

            </tr>

            @empty

            <tr>

                <td colspan="4" class="text-center py-4">

                    Nenhuma reserva cadastrada.

                </td>

            </tr>

            @endforelse

        </tbody>

    </table>

</div>

@endsection
