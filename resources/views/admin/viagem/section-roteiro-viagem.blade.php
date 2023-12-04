{{-- @dd($pontos_turisticos[0]->); --}}
{{-- @dd($pontos_turisticos[0]->imagem_turistica->id); --}}

@extends('layouts.app')

@section('content')
    @if (isset($viagem) && !empty($viagem))
        <section class="container my-5">

            <div class="my-5 d-flex justify-content-end align-items-center gap-2">
                @include('admin.viagem.modal-create-ponto_turistico')
                @include('admin.viagem.modal-create-imagem_cidade')
            </div>

            <h2 class="text-center my-5 text-capitalize"> {{ $viagem->titulo }}
            </h2>

            <div class="my-3">
                <h3 class="my-5 mx-3"> Descrição </h3>
                <p>
                    {{ $viagem->descricao }}
                </p>
            </div>

            <div class="my-3">
                <h3 class="my-5 mx-3"> Sugestões </h3>
                <p>
                    {{ $viagem->sugestoes }}
                </p>
            </div>

            <div class="my-5">
                @include('admin.viagem.modal-create-roteiro')
            </div>

            {{-- TODO: Criar edit e delete para o roteiro --}}
            @if (isset($roteiros) && count($roteiros) > 0)
                <div class="my-3">
                    <h3 class="my-4 mx-3"> Roteiros da viagem
                    </h3>
                    <div>
                        @foreach ($roteiros as $key_roteiro => $roteiro)
                            <div class="my-3 d-flex justify-content-between gap-2 align-items-center">
                                <h4>{{ $roteiro->titulo }}</h4>
                                <div class="d-flex justify-content-between gap-2 align-items-center">
                                    @include('admin.viagem.modal-edit-roteiro')
                                    @include('admin.viagem.form-delete-roteiro')
                                </div>
                            </div>
                            <div class="my-2">
                                <h5 class="fs-5"> {{ $roteiro->subtitulo_manha }} </h5>
                                <p>
                                    {{ $roteiro->manha }}
                                </p>
                            </div>
                            <div class="my-2">
                                <h5 class="fs-5"> {{ $roteiro->subtitulo_tarde }} </h5>
                                <p>
                                    {{ $roteiro->tarde }}
                                </p>
                            </div>
                            <div class="my-2">
                                <h5 class="fs-5"> {{ $roteiro->subtitulo_noite }} </h5>
                                <p>
                                    {{ $roteiro->noite }}
                                </p>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif

            @if (isset($imagens_cidades) && count($imagens_cidades) > 0)
                <div class="my-3">
                    <h3 class="my-5 mx-3"> Imagens da cidade
                        <span style="font-size: 9.5pt;">(Observação: Clique na imagem para editá-la) </span>
                    </h3>
                    <div>
                        @foreach ($imagens_cidades as $key_img_cid => $imagem_cidade)
                            <button type="button" class="btn btn-light bg-light p-1" data-bs-toggle="modal"
                                data-bs-target="#editarImagemCidade{{ isset($key_img_cid) ? $key_img_cid : '' }}">
                                <div class="imagem_cidade d-grid">
                                    <!-- Exibir imagem pelo metodo asset-->
                                    <img src="{{ asset('storage/' . $imagem_cidade->caminho) }}"
                                        alt="{{ $imagem_cidade->legenda }}" width="250px">
                                    <span class="legenda" style="font-size: 10pt;"> {{ $imagem_cidade->legenda }} </span>
                                </div>
                            </button>
                            @include('admin.viagem.modal-edit-imagem_cidade')
                        @endforeach
                    </div>
                </div>
            @endif

            @if (isset($pontos_turisticos) && count($pontos_turisticos) > 0)
                <h3 class="my-5 mx-3 d-inline-block">
                    <span>Pontos Turisticos</span>
                    <span style="font-size: 9.5pt;">(Observação: Clique na imagem para editá-la) </span>
                </h3>
                @foreach ($pontos_turisticos as $key => $ponto)
                    <div class="d-flex justify-content-between gap-2 align-items-center my-3">
                        <h4>{{ $ponto->titulo }}</h4>
                        <div class="d-flex gap-2">
                            @include('admin.viagem.form-delete-ponto_turistico')
                            @include('admin.viagem.modal-edit-ponto_turistico')
                        </div>
                    </div>
                    <p>
                        {{ $ponto->descricao }}
                    </p>
                    <div class="d-flex justify-content-around flex-wrap my-2 gap-2">
                        @if (isset($imagens_turisticas) && count($imagens_turisticas) > 0)
                            @foreach ($imagens_turisticas as $key_img => $imagem)
                                @if ($imagem->ponto_turistico_id == $ponto->id)
                                    {{-- Botão para editar imagem turistica  --}}
                                    <button type="button" class="btn btn-light bg-light p-1" data-bs-toggle="modal"
                                        data-bs-target="#editarImagemTuristica{{ isset($key_img) ? $key_img : '' }}">
                                        <div class="imagem_ponto_turistico">
                                            <img src="{{ asset('storage/' . $imagem->caminho) }}" alt=""
                                                class="imagem_turistica">
                                            <span class="legenda"> {{ $imagem->legenda }} </span>
                                        </div>
                                    </button>
                                    @include('admin.viagem.modal-edit-imagem_turistica')
                                @endif
                            @endforeach
                        @endif
                    </div>
                    <div class="d-flex justify-content-end align-items-center gap-2">
                        @include('admin.viagem.modal-create-imagem_turistica')
                    </div>
                @endforeach
            @endif

        </section>
    @endif
@endsection
