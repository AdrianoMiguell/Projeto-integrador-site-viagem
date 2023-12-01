<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImagemCidadeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        DB::table('imagem_cidades')->insert([
            ["caminho" => "/img/imagens_da_cidade/palacio_boa_vista.jpg", "legenda" => "imagem do Palácio Boa Vista.", "viagem_id" => 1],
            ["caminho" => "/img/imagens_da_cidade/morro_do_elefante.jpg", "legenda" => "imagem do Morro do Elefante", "viagem_id" => 1],
            ["caminho" => "/img/imagens_da_cidade/porto_de_galinhas.jpg", "legenda" => "imagem do Forte dos Reis Magos", "viagem_id" => 2],

            ["caminho" => "/img/imagens_da_cidade/forte_dos_reis_magos.jpg", "legenda" => "imagem do Parque das Dunas", "viagem_id" => 3],
            ["caminho" => "/img/imagens_da_cidade/parque_das_dunas.jpg", "legenda" => "imagem da Praia de Ponta Negra", "viagem_id" => 3],
            ["caminho" => "/img/imagens_da_cidade/praia_de_ponta_negra.jpg", "legenda" => "imagem da Catedral Metropolitana", "viagem_id" => 3],

            ["caminho" => "/img/imagens_da_cidade/catedral_metropolitana.jpg", "legenda" => "imagem da Praia de Iracema", "viagem_id" => 4],
            ["caminho" => "/img/imagens_da_cidade/praia_de_iracema.jpg", "legenda" => "imagem da Praia da Joaquina", "viagem_id" => 4],

            ["caminho" => "/img/imagens_da_cidade/praia_de_joaquina.jpg", "legenda" => "imagem do Centro Histórico", "viagem_id" => 5],

            ["caminho" => "/img/imagens_da_cidade/centro_historico.jpg", "legenda" => "imagem do Recife de Fora", "viagem_id" => 6],
            ["caminho" => "/img/imagens_da_cidade/recife_de_fora.jpg", "legenda" => "imagem do Lago Negro", "viagem_id" => 6],

            ["caminho" => "/img/imagens_da_cidade/lago_negro.jpg", "legenda" => "imagem da Praia de Itamambuca", "viagem_id" => 7],

            ["caminho" => "/img/imagens_da_cidade/praia_de_itamambuca.jpg", "legenda" => "imagem do Aquário de Ubatuba", "viagem_id" => 8],
            ["caminho" => "/img/imagens_da_cidade/aquario_de_ubatuba.jpg", "legenda" => "imagem do Museu de Arte de São Paulo", "viagem_id" => 8],

            ["caminho" => "/img/imagens_da_cidade/masp.jpg", "legenda" => "imagem d", "viagem_id" => 9],
            ["caminho" => "/img/imagens_da_cidade/parque_ibirapuera.jpeg", "legenda" => "imagem do Parque Ibirapuera", "viagem_id" => 9],

            ["caminho" => "/img/imagens_da_cidade/cristo_redentor.jpg", "legenda" => "imagem do Cristo Redentor", "viagem_id" => 10],
            ["caminho" => "/img/imagens_da_cidade/pao_de_acucar.jpg", "legenda" => "imagem do Morro Pão de Açucar", "viagem_id" => 10],
        ]);
    }
}
