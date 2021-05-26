@extends('layouts.app')

@section('title', 'Administrativo')
@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Atualizar Banco de Dados</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="text-center">Atualizar Banco de dados</h3>
                            <ul>
                                <li><a href="{{ route('updateTimestamp') }}">Inserir Timestamp</a></li>
                                <li><a href="{{ route('updateUpperLower') }}">Alterar Nome das tabelas de Maiusculo para Minusculo</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection