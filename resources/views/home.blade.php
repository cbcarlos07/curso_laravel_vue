@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <painel titulo="Dashboard">
                    Teste de conteudo..
                    <div class="row">
                        <div class="col-md-4">
                            <painel titulo="Conteudo 1">
                                Teste de conteudo..
                            </painel>                        
                        </div>
                        <div class="col-md-4">
                            <painel titulo="Conteudo 2">
                                Teste de conteudo..
                            </painel>                        
                        </div>
                        <div class="col-md-4">
                            <painel titulo="Conteudo 3">
                                Teste de conteudo..
                            </painel>                        
                        </div>
                    </div>
                    
                </painel>
            </div>
        </div>
    </div>
@endsection
