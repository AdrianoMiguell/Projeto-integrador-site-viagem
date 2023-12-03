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

            ["caminho" => "/img/imagens_da_cidade/porto_de_galinhas.jpg", "legenda" => "imagem do Forte dos Reis Magos", "viagem_id" => 2],

            ["caminho" => "/img/imagens_da_cidade/forte_dos_reis_magos.jpg", "legenda" => "imagem do Parque das Dunas", "viagem_id" => 3],

            ["caminho" => "/img/imagens_da_cidade/catedral_metropolitana.jpg", "legenda" => "imagem da Praia de Iracema", "viagem_id" => 4],

            ["caminho" => "/img/imagens_da_cidade/praia_de_joaquina.jpg", "legenda" => "imagem do Centro Histórico", "viagem_id" => 5],

            ["caminho" => "/img/imagens_da_cidade/centro_historico.jpg", "legenda" => "imagem do Recife de Fora", "viagem_id" => 6],

            ["caminho" => "/img/imagens_da_cidade/lago_negro.jpg", "legenda" => "imagem da Praia de Itamambuca", "viagem_id" => 7],

            ["caminho" => "/img/imagens_da_cidade/praia_de_itamambuca.jpg", "legenda" => "imagem do Aquário de Ubatuba", "viagem_id" => 8],


            ["caminho" => "/img/imagens_da_cidade/masp.jpg", "legenda" => "imagem d", "viagem_id" => 9],

            ["caminho" => "/img/imagens_da_cidade/cristo_redentor.jpg", "legenda" => "imagem do Cristo Redentor", "viagem_id" => 10],


            [
                // 11
                'caminho' => '/img/imagens_da_cidade/rio_branco.jpg',
                'legenda' => 'imagem da cidade Rio Branco',
                'viagem_id' => 9,
            ],
            [
                // 12
                'caminho' => '/img/imagens_da_cidade/maceio.jpg',
                'legenda' => 'imagem da cidade Maceió',
                'viagem_id' => 10,
            ],
            [
                // 13
                'caminho' => '/img/imagens_da_cidade/macapa.jpg',
                'legenda' => 'imagem da cidade Macapá',
                'viagem_id' => 11,
            ],
            [
                // 14
                'caminho' => '/img/imagens_da_cidade/manaus_imagem_1.jpg',
                'legenda' => 'imagem da cidade Manaus',
                'viagem_id' => 12,
            ],
            [
                // 15
                'caminho' => '/img/imagens_da_cidade/manaus_imagem_2.jpg',
                'legenda' => 'imagem da cidade Manaus',
                'viagem_id' => 12,
            ],
            [
                // 16
                'caminho' => '/img/imagens_da_cidade/brasilia_imagem_1.jpg',
                'legenda' => 'imagem da cidade Brasilia',
                'viagem_id' => 13,
            ],
            [
                // 16
                'caminho' => '/img/imagens_da_cidade/brasilia_imagem_2.jpg',
                'legenda' => 'imagem da cidade Brasilia',
                'viagem_id' => 13,
            ],
            [
                // 17
                'caminho' => '/img/imagens_da_cidade/vitoria.jfif',
                'legenda' => 'imagem da cidade Vitória',
                'viagem_id' => 14,
            ],
            [
                // 18
                'caminho' => '/img/imagens_da_cidade/goiania.jpg',
                'legenda' => 'imagem da cidade Goiânia',
                'viagem_id' => 15,
            ],
            [
                // 19
                'caminho' => '/img/imagens_da_cidade/sao_luis.jpg',
                'legenda' => 'imagem da cidade São Luís',
                'viagem_id' => 16,
            ],
            [
                // 20
                'caminho' => '/img/imagens_da_cidade/cuiaba.jpg',
                'legenda' => 'imagem da cidade Cuiabá',
                'viagem_id' => 17,
            ],
            [
                // 21
                'caminho' => '/img/imagens_da_cidade/campo_grande.jpg',
                'legenda' => 'imagem da cidade Campo Grande',
                'viagem_id' => 18,
            ],
            [
                // 21
                'caminho' => '/img/imagens_da_cidade/belo_horizonte',
                'legenda' => 'imagem da cidade Belo Horizonte',
                'viagem_id' => 19,
            ],
            [
                // 22
                'caminho' => '/img/imagens_da_cidade/belem.jpg',
                'legenda' => 'imagem da cidade Belém',
                'viagem_id' => 20,
            ],
            [
                // 23
                'caminho' => '/img/imagens_da_cidade/joao_pessoa.jpg',
                'legenda' => 'imagem da cidade João Pessoa',
                'viagem_id' => 21,
            ],
            [
                // 24
                'caminho' => '/img/imagens_da_cidade/curitiba.jpg',
                'legenda' => 'imagem da cidade Curitiba',
                'viagem_id' => 24,
            ],
            [
                // 25
                'caminho' => '/img/imagens_da_cidade/recife_imagem_1.jpg',
                'legenda' => 'imagem da cidade Recife',
                'viagem_id' => 25,
            ],
            [
                // 25
                'caminho' => '/img/imagens_da_cidade/recife_imagem_2.jpg',
                'legenda' => 'imagem da cidade Recife',
                'viagem_id' => 25,
            ],
            [
                // 26
                'caminho' => '/img/imagens_da_cidade/teresina.jpg',
                'legenda' => 'imagem da cidade Teresina',
                'viagem_id' => 26,
            ],
            [
                // 27
                'caminho' => '/img/imagens_da_cidade/porto_alegre',
                'legenda' => 'imagem da cidade Porto Alegre',
                'viagem_id' => 27,
            ],
            [
                // 28
                'caminho' => '/img/imagens_da_cidade/porto_velho.jpg',
                'legenda' => 'imagem da cidade Porto Velho',
                'viagem_id' => 28,
            ],
            [
                // 29
                'caminho' => '/img/imagens_da_cidade/boa_vista.jpg',
                'legenda' => 'imagem da cidade Boa Vista',
                'viagem_id' => 29,
            ],
            [
                // 30
                'caminho' => '/img/imagens_da_cidade/aracaju.jpg',
                'legenda' => 'imagem da cidade Aracaju',
                'viagem_id' => 30,
            ],
            [
                // 31
                'caminho' => '/img/imagens_da_cidade/palmas.jpg',
                'legenda' => 'imagem da cidade Palmas',
                'viagem_id' => 31,
            ],


        ]);
    }
}
