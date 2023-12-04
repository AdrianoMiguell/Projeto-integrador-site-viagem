@extends('layouts.app')

@section('content')
    <div class="container-parallax">
        {{-- @if (file_exists(public_path($imagem->caminho))) --}}
            <div style="background-image: url('{{ '/img/pao-de-acucar_rio-de-janeiro.jpg' }}')" class="div-parallax"></div>
        {{-- @endif --}}
    </div>
@endsection
