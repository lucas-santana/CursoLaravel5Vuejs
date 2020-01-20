@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-0">
                <painel titulo="Dashboard">
                    <div class="row">
                        <div class="col-md-4">
                            <painel titulo="Conteúdo 1" cor="blue">
                                Teste de Conteúdo...
                            </painel>
                        </div>
                        <div class="col-md-4">
                            <painel titulo="Conteúdo 2" cor="panel-warning">
                                Teste de Conteúdo...
                            </painel>
                        </div>
                        <div class="col-md-4">
                            <painel titulo="Conteúdo 3" cor="panel-info">
                                Teste de Conteúdo...
                            </painel>
                        </div>
                    </div>
                </painel>
             </div>
        </div>
</div>
@endsection
