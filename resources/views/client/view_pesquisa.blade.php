@extends('layouts.app')

@section('content')
    <section class="container m-5">
        @if (empty($cidades_pesquisadas[0]->id) && empty($estados_pesquisadas[0]->id))
            <span class="d-block text-center">Nenhuma viagem encontrada</span>
        @else
            <h1>Dados da Pesquisa</h1>

            <style>
                .div-viagens {
                    display: grid;
                    gap: 5px;
                }

                .div-viagens .link-viagem {
                    background-color: rgb(var(--sec-c)) !important;
                    opacity: .9;
                    padding: 1px;
                    border-radius: 10px;
                }

                .div-viagens .link-viagem:hover {
                    opacity: 1;
                }

                .div-viagens .link-viagem a {
                    display: block;
                    padding: 10px 5px;
                    margin: 0 5px;
                    color: rgb(var(--tert-c));
                    text-decoration: none;
                }

                .div-viagens .link-viagem a:hover {
                    color: rgb(var(--main-c)) !important;
                }
            </style>

            <div class="div-viagens my-5">
                @foreach ($viagens as $viagem)
                    @if (!empty($cidades_pesquisadas[0]->id))
                        @foreach ($cidades_pesquisadas as $cidade)
                            @if ($cidade->nome == $viagem->cidade->nome)
                                <div class="link-viagem my-2">
                                    <a href="{{ route('view.user.viagem', ['cidade_id' => $cidade->id]) }}">
                                        <h3 class="fs-5 title">
                                            {{ $viagem->titulo }}
                                        </h3>
                                        <div class="d-flex align-items-center gap-1">
                                            <span class="cidade">
                                                {{ $viagem->cidade->nome }}
                                            </span>
                                            <span>-</span>
                                            <span class="estado">
                                                {{ $viagem->cidade->estado->nome }}
                                            </span>
                                        </div>
                                    </a>
                                </div>
                            @endif
                        @endforeach
                    @endif

                    @if (!empty($estados_pesquisadas[0]->id))
                        @foreach ($estados_pesquisadas as $estado)
                            @if ($estado->nome == $viagem->cidade->estado->nome)
                                {{-- //  || $estado->nome == $viagem->estado->estado > nome) --}}
                                <div class="link-viagem my-2">
                                    <div class="link-viagem my-2">
                                        <a href="{{ route('view.user.viagem', ['cidade_id' => $viagem->cidade_id]) }}">
                                            <h3 class="fs-5 title">
                                                {{ $viagem->titulo }}
                                            </h3>
                                            <div class="d-flex align-items-center gap-1">
                                                <span class="cidade">
                                                    {{ $viagem->cidade->nome }}
                                                </span>
                                                <span>-</span>
                                                <span class="estado">
                                                    {{ $viagem->cidade->estado->nome }}
                                                </span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    @endif
                @endforeach
            </div>
        @endif
    </section>
@endsection
