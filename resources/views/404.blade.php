@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Página não encontrada') }}</div>

                    <div class="card-body">
                        <h2>{{ __('Erro 404') }}</h2>
                        <p>{{ __('Desculpe, a página que você está procurando não foi encontrada.') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
