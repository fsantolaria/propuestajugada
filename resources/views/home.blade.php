@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Bienvenido a Propuesta Jugada</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @foreach ($numeros as $numero)
                        <div class="row">
                            <div id="balls" class="small-12 medium-6 columns">
                                @foreach (explode(" ",$numero->numero) as $bolilla)
                                    <div class="ball blue">
                                        <div><span>{{$bolilla}}</span></div>
                                    </div>
                                @endforeach
                            </div>
                    @endforeach

                <div class="card-deck mb-3 text-center">
                    <div class="card mb-4 shadow-sm">
                      <div class="card-header">
                        <h4 class="my-0 font-weight-normal">Agregar Numero</h4>
                      </div>
                      <div class="card-body">
                        <h1 class="card-title pricing-card-title">$ 3,90<small class="text-muted">/ mes</small></h1>
                        <ul class="list-unstyled mt-3 mb-4">
                          <li>1 número de loteria</li>
                          <li></li>
                          <li></li>
                          <li>Aumenta tus chances de Ganar</li>
                        </ul>
                        <button type="button" class="btn btn-lg btn-block btn-primary">Agregar</button>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
