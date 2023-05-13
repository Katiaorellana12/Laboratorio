@extends('layouts.app')

@section('template_title')
    {{ $transaccione->name ?? "{{ __('Show') Transaccione" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Transaccione</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('transacciones.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Institucion Destino:</strong>
                            {{ $transaccione->institucion_destino }}
                        </div>
                        <div class="form-group">
                            <strong>Numero De Cuenta:</strong>
                            {{ $transaccione->numero_de_cuenta }}
                        </div>
                        <div class="form-group">
                            <strong>Monto:</strong>
                            {{ $transaccione->monto }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
