@extends('layouts.app')
@section('title')
     @lang('models/clientes.plural')
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>@lang('models/clientes.plural')</h1>
            <div class="section-header-breadcrumb">
                <a href="{{ route('clientes.create')}}" class="btn btn-primary form-btn">@lang('crud.add_new') <i class="fas fa-plus"></i></a>
            </div>
        </div>
    <div class="section-body">
           <div class="card">
            <div class="card-body">
                <p class="text-right">
                @if($inativo=='-1')
                    <a href="{{ route('clientes.index', ['INATIVO' => '0'])}}" class="btn btn-outline-primary form-btn">Exibir clientes Ativos</i></a>
                @else
                    <a href="{{ route('clientes.index', ['INATIVO' => '-1'])}}" class="btn btn-outline-danger form-btn">Exibir clientes INATIVOS</i></a>
                @endif
                </p>
                @include('clientes.table')
            </div>
       </div>
   </div>
    
    </section>
@endsection



