@extends('layouts.app')

@section('sessao-viagem')
    @if (empty($viagem[0]->id))

        <section>
            sem dados de viagem
        </section>
    @else
        <section class="container mx-auto sessao-informacoes-iniciais">
            <div class="div-informacoes d-grid gap-4">
                <div class="div-title">
                    <h1 class="title-cidade"> {{ $viagem[0]->cidade->nome }} </h1>
                    <span class="title-estado"> {{ $viagem[0]->cidade->estado->nome }} </span>
                </div>
                <div class="imagem_inicial_da_cidade">
                    @if (count($imagens_cidade) > 1)
                        @if (file_exists(public_path($imagens_cidade[0]->caminho)))
                            <!-- Exibir imagem na publica-->
                            <img src="{{ $imagens_cidade[0]->caminho }}" alt="{{ $imagens_cidade[0]->legenda }}">
                        @else
                            <!-- Exibir imagem pelo metodo asset-->
                            <img src="{{ asset('storage/' . $imagens_cidade[0]->caminho) }}"
                                alt="{{ $imagens_cidade[0]->legenda }}">
                        @endif
                    @endif
                </div>
                <div class="descricao-cidade">
                    <p> {{ $viagem[0]->cidade->descricao }} </p>
                </div>
            </div>
            <div class="sessao_imagens_cidade">
                <div class="div-title">
                    <h1 class="title-cidade"> {{ $viagem[0]->cidade->nome }} </h1>
                    <span class="title-estado"> {{ $viagem[0]->cidade->estado->nome }} </span>
                </div>
                <div class="my-5 div_imagem_cidade">
                    @if (isset($imagens_cidade) && count($imagens_cidade) > 0)
                        @foreach ($imagens_cidade as $key_imagem => $imagem)
                            @if ($key_imagem != 0 || count($imagens_cidade) == 1)
                                <div class="imagem"
                                    style="background-image: url('{{ asset('storage' . $imagem->caminho) }}'); ">
                                </div>
                            @endif
                        @endforeach
                    @endif
                </div>
            </div>
        </section>

        <section class="container mx-auto my-4 sessao-roteiros-viagem">
            <h2 class="my-2 mb-5">Pontos Turisticos</h2>
            @foreach ($pontos_turisticos as $ponto)
                <h3>{{ $ponto->titulo }}</h3>
                <p>{{ $ponto->descricao }}</p>
            @endforeach
        </section>

        {{-- <section class="container mx-auto my-4 sessao-roteiros-viagem">
            <h2 class="my-2 mb-5">Pontos Turisticos</h2>
            @foreach ($pontos_turisticos as $ponto)
                <h3>{{ $ponto->titulo }}</h3>
                <p>{{ $ponto->descricao }}</p>
            @endforeach
        </section> --}}

    @endif
@endsection
