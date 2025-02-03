@php
    $countTot = 0;

    if ($estados_pesquisados != null) {
        $countTot += count($estados_pesquisados);
    }
    if ($cidades_pesquisadas != null) {
        $countTot += count($cidades_pesquisadas);
    }

@endphp

@extends('layouts.app')

@section('content')
    <section class="container m-5 p-2">
        @if (empty($cidades_pesquisadas[0]->id) && empty($estados_pesquisados[0]->id))
            <span class="d-block text-center">Nenhuma viagem encontrada</span>
        @else
            <h1>Dados da Pesquisa</h1>

            <div class="div-viagens my-5">
                @foreach ($viagens as $viagem)
                    @if (!empty($cidades_pesquisadas[0]->id) && empty($estados_pesquisados[0]->id))
                        @foreach ($cidades_pesquisadas as $cidade)
                            {{-- @foreach ($estados_pesquisados as $estado) --}}
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
                            {{-- @endif --}}
                        @endforeach
                    @elseif (!empty($estados_pesquisados[0]->id))
                        @foreach ($estados_pesquisados as $estado)
                            @if ($estado->nome == $viagem->cidade->estado->nome)
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

            @if ($countTot > 14)
                {{ $viagens->links('pagination::simple-bootstrap-5') }}
            @endif
        @endif


    </section>


@endsection
