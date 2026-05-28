@extends('layouts.app')

@section('title', 'Sistema de Reservas')

@section('content')

<div class="hero-section">

    <div class="row align-items-center">

        <div class="col-lg-6">

            <span class="badge-home">
                Sistema Inteligente
            </span>

            <h1 class="hero-title">

                Gerencie reservas
                de salas com facilidade

            </h1>

            <p class="hero-text">

                Organize horários, evite conflitos
                e controle reservas em um sistema
                moderno, rápido e intuitivo.

            </p>

            <div class="mt-4">

                <a href="/reservas"
                   class="btn btn-modern btn-primary-modern me-2">

                    Ver Reservas

                </a>

                <a href="/reservas/create"
                   class="btn btn-modern btn-success-modern">

                    Nova Reserva

                </a>

            </div>

        </div>

        <div class="col-lg-6 text-center">

            <div class="hero-card">

                <div class="hero-icon">
                    📅
                </div>

                <h3>
                    Controle Total
                </h3>

                <p>

                    Visualize reservas,
                    horários e disponibilidade
                    em tempo real.

                </p>

            </div>

        </div>

    </div>

</div>

<div class="row mt-5">

    <div class="col-md-4 mb-4">

        <div class="feature-card">

            <h4>
                Reservas Rápidas
            </h4>

            <p>
                Crie reservas em poucos segundos.
            </p>

        </div>

    </div>

    <div class="col-md-4 mb-4">

        <div class="feature-card">

            <h4>
                Sem Conflitos
            </h4>

            <p>
                O sistema verifica horários automaticamente.
            </p>

        </div>

    </div>

    <div class="col-md-4 mb-4">

        <div class="feature-card">

            <h4>
                Interface Moderna
            </h4>

            <p>
                Visual limpo e responsivo.
            </p>

        </div>

    </div>

</div>

@endsection