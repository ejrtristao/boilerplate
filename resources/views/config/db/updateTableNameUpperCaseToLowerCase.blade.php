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
                            <p>Para utilizar o pacote Infyom, recomendo que os nomes das tabelas sejam minusculas.<br />
                            Copie todo o conteúdo listado e via HeidiSQL ou outro inclua o conteudo e execute a instrução SQL no Banco de Dados
                            </p>
                            @foreach($listaTabelas as $table)
                                <code>
                                ALTER TABLE {{ $table->Tables_in_fators01  }} RENAME TO {{ strtolower($table->Tables_in_fators01)  }};<br />
                                </code>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection