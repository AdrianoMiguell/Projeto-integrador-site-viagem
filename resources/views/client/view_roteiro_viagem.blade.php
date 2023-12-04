@extends('layouts.app')

@section('sessao-viagem')
    @if (empty($viagem[0]->id))
        <section>
            Sem dados da viagem no momento.
            <br>
            Perdão pelo transtorno!
        </section>
    @elseif(count($viagem) > 1)
        <div class="container div-viagens m-5">
            <h1> Roteiros para {{ $viagem[0]->cidade->nome }} </h1>
            @foreach ($viagem as $v)
                {{-- @foreach ($estados_pesquisados as $estado) --}}
                <div class="link-viagem my-2">
                    <a href="{{ route('view.user.viagem', ['cidade_id' => $v->cidade_id, 'viagem_id' => $v->id]) }}">
                        <h3 class="fs-5 title">
                            {{ $v->titulo }}
                        </h3>
                        <div class="d-flex align-items-center gap-1">
                            <span class="cidade">
                                {{ $v->cidade->nome }}
                            </span>
                            <span>-</span>
                            <span class="estado">
                                {{ $v->cidade->estado->nome }}
                            </span>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    @else
        <!-- Exibir imagem pelo metodo asset-->
        @if (isset($imagens_cidade[0]->caminho) && !empty($imagens_cidade[0]->caminho))
            <div class="container-parallax container-parallax-back">
                @if (file_exists(public_path($imagens_cidade[0]->caminho)))
                    <div class="div-parallax" style="background-image: url('{{ $imagens_cidade[0]->caminho }}')"
                        alt="{{ $imagens_cidade[0]->legenda }}">
                    @else
                        <div class="div-parallax"
                            style="background-image: url('{{ asset('storage/' . $imagens_cidade[0]->caminho) }}')"
                            alt="{{ $imagens_cidade[0]->legenda }}">
                @endif

                <div class="text-parallax">
                    <span class="title-cidade"> {{ $viagem[0]->cidade->nome }} </span>
                    <span class="title-estado"> {{ $viagem[0]->cidade->estado->nome }} </span>
                </div>
            </div>
        @endif

        {{-- 
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
        </section> --}}


        <section class="container mx-auto sessao-informacoes-viagem">
            {{-- <div class="descricao-cidade my-3">
                <p> {{ $viagem[0]->cidade->descricao }} </p>
            </div> --}}

            <div class="descricao-viagem mt-5">
                <h1 class="title-viagem mb-5 text-center"> {{ $viagem[0]->titulo }} </h1>
                <p> {{ $viagem[0]->descricao }} </p>
            </div>

            @if (isset($pontos_turisticos) && count($pontos_turisticos) > 0)
                <h2 class="my-5 mb-3">Pontos Turisticos</h2>
                <div class="sessao-pontos-turistica">
                    @foreach ($pontos_turisticos as $ponto)
                        <div class="div-ponto-turistico">
                            <div class="informacoes" style="flex-grow: 2;">
                                <h3>{{ $ponto->titulo }}</h3>
                                <p>{{ $ponto->descricao }}</p>
                            </div>
                            <div class="imagens" style="flex-grow: 1;">
                                @foreach ($imagens_turisticas as $imagem)
                                    @if ($imagem->ponto_turistico_id == $ponto->id)
                                        <div class="imagem">
                                            @if (file_exists(public_path($imagem->caminho)))
                                                <img src="{{ $imagem->caminho }}" alt="">
                                            @else
                                                <img src="{{ asset('storage/' . $imagem->caminho) }}" alt="">
                                            @endif

                                            <span class="legenda"> {{ $imagem->legenda }} </span>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif

            @if (isset($roteiros) && count($roteiros) > 0)
                <div class="sessao-roteiros">

                    <h2 class="my-5 mb-3">Roteiro para a Viagem</h2>
                    @foreach ($roteiros as $key_roteiro => $roteiro)
                        <div class="my-3 d-flex justify-content-between gap-2 align-items-center">
                            <h3>{{ $roteiro->titulo }}</h3>
                        </div>
                        <div class="my-4">
                            <h4 class="my-3"> {{ $roteiro->subtitulo_manha }} </h4>
                            <p>
                                {{ $roteiro->manha }}
                            </p>
                        </div>
                        <div class="my-4">
                            <h4 class="my-3"> {{ $roteiro->subtitulo_tarde }} </h4>
                            <p>
                                {{ $roteiro->tarde }}
                            </p>
                        </div>
                        <div class="my-4">
                            <h4 class="my-3"> {{ $roteiro->subtitulo_noite }} </h4>
                            <p>
                                {{ $roteiro->noite }}
                            </p>
                        </div>
                    @endforeach
                </div>
            @endif

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
