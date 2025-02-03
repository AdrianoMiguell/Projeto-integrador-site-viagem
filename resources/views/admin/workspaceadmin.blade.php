@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-center my-2">
        <div class="mt-5 d-flex gap-3">

            <button id="botaoSessao1" class="botaoSessao botao-active" onclick="toggleSessao('sessao1')"> Roteiros de Viagens
                </button>

            @if (isset($cidades) && count($cidades) > 0)
                <button id="botaoSessao2" class="botaoSessao" onclick="toggleSessao('sessao2')"> Estados | Cidades
                </button>
            @endif
        </div>
    </div>


    <div class="container">

        <div id="sessao1" class="sessoes active">
            <div class="d-flex justify-content-end gap-2 mt-1 mb-3">
                @include('admin.viagem.modal-create-viagem')
            </div>
            @include('admin.viagem.table-viagem')
        </div>

        @include('admin.cidade.table-cidades')

        {{ $viagens->links('pagination::simple-bootstrap-5') }}
    </div>


    <script src="/js/alternar_sessao.js"></script>
@endsection
