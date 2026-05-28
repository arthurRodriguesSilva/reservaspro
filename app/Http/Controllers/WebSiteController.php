<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Reserva;

class WebSiteController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function index()
    {
        $reservas = Reserva::orderBy('data')
            ->orderBy('inicio')
            ->get();

        return view(
            'reservas.index',
            compact('reservas')
        );
    }

    public function create()
    {
        return view('reservas.create');
    }

    public function store(Request $request)
    {

        $dataReserva = Carbon::parse($request->data);

        $hoje = Carbon::today();

        if($dataReserva->lt($hoje)){

            return back()->with(
                'erro',
                'Não é possível reservar datas passadas.'
            );

        }

        $conflito = Reserva::where('sala', $request->sala)

            ->where('data', $request->data)

            ->where(function($query) use ($request){

                $query->where(function($q) use ($request){

                    $q->where(
                        'inicio',
                        '<',
                        $request->fim
                    )

                    ->where(
                        'fim',
                        '>',
                        $request->inicio
                    );

                });

            })

            ->exists();

        if($conflito){

            return back()->with(
                'erro',
                'Horário já reservado!'
            );

        }

        Reserva::create([

            'sala' => $request->sala,

            'data' => $request->data,

            'inicio' => $request->inicio,

            'fim' => $request->fim

        ]);

        return redirect('/reservas');
    }
}

