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
            ["caminho" => "/img/imagens_da_cidade/campos_do_jordao.jpg", "legenda" => "Imagem do Palácio Campos do Jordão.", "viagem_id" => 1],

            ["caminho" => "/img/imagens_da_cidade/ipojuca.jpg", "legenda" => "Imagem da cidade de Ipojuca", "viagem_id" => 2],

            ["caminho" => "/img/imagens_da_cidade/natal.jpg", "legenda" => "Imagem da cidade Natal", "viagem_id" => 3],

            ["caminho" => "/img/imagens_da_cidade/fortaleza.jpeg", "legenda" => "Imagem da cidade Fortaleza", "viagem_id" => 4],

            ["caminho" => "/img/imagens_da_cidade/florianopolis.jpg", "legenda" => "Imagem da cidade Florianópolis", "viagem_id" => 5],

            ["caminho" => "/img/imagens_da_cidade/porto_seguro.jpeg", "legenda" => "Imagem da cidade Porto Seguro", "viagem_id" => 6],

            ["caminho" => "/img/imagens_da_cidade/gramado.jpg", "legenda" => "Imagem da cidade  Gramado", "viagem_id" => 7],

            ["caminho" => "/img/imagens_da_cidade/ubatuba.jpg", "legenda" => "Imagem da cidade Ubatuba", "viagem_id" => 8],


            ["caminho" => "/img/imagens_da_cidade/sao_paulo.png", "legenda" => "Imagem dde São Paulo", "viagem_id" => 9],

            ["caminho" => "/img/imagens_da_cidade/rio_de_janeiro.jpg", "legenda" => "imagem da cidade Rio de Janeiro", "viagem_id" => 10],


            [
                // 11
                'caminho' => '/img/imagens_da_cidade/rio_branco.png',
                'legenda' => 'imagem da cidade Rio Branco',
                'viagem_id' => 11,
            ],
            [
                // 12
                'caminho' => '/img/imagens_da_cidade/maceio.jpg',
                'legenda' => 'imagem da cidade Maceió',
                'viagem_id' => 12,
            ],
            [
                // 13
                'caminho' => '/img/imagens_da_cidade/macapa.jpg',
                'legenda' => 'imagem da cidade Macapá',
                'viagem_id' => 13,
            ],
            [
                // 15
                'caminho' => '/img/imagens_da_cidade/manaus.jpg',
                'legenda' => 'imagem da cidade Manaus',
                'viagem_id' => 14,
            ],
            [
                // 16
                'caminho' => '/img/imagens_da_cidade/brasilia.jpg',
                'legenda' => 'imagem da cidade Brasilia',
                'viagem_id' => 15,
            ],
            [
                // 17
                'caminho' => '/img/imagens_da_cidade/vitoria.jpg',
                'legenda' => 'imagem da cidade Vitória',
                'viagem_id' => 16,
            ],
            [
                // 18
                'caminho' => '/img/imagens_da_cidade/goiania.jpg',
                'legenda' => 'imagem da cidade Goiânia',
                'viagem_id' => 17,
            ],
            [
                // 19
                'caminho' => '/img/imagens_da_cidade/sao_luis.png',
                'legenda' => 'imagem da cidade São Luís',
                'viagem_id' => 18,
            ],
            [
                // 20
                'caminho' => '/img/imagens_da_cidade/cuiaba.jpg',
                'legenda' => 'imagem da cidade Cuiabá',
                'viagem_id' => 19,
            ],
            [
                // 21
                'caminho' => '/img/imagens_da_cidade/campo_grande.png',
                'legenda' => 'imagem da cidade Campo Grande',
                'viagem_id' => 20,
            ],
            [
                // 21
                'caminho' => '/img/imagens_da_cidade/belo_horizonte.jpg',
                'legenda' => 'imagem da cidade Belo Horizonte',
                'viagem_id' => 21,
            ],
            [
                // 22
                'caminho' => '/img/imagens_da_cidade/belem.jpg',
                'legenda' => 'imagem da cidade Belém',
                'viagem_id' => 22,
            ],
            [
                // 23
                'caminho' => '/img/imagens_da_cidade/joao_pessoa.jpg',
                'legenda' => 'imagem da cidade João Pessoa',
                'viagem_id' => 23,
            ],
            [
                // 24
                'caminho' => '/img/imagens_da_cidade/curitiba.jpg',
                'legenda' => 'imagem da cidade Curitiba',
                'viagem_id' => 24,
            ],
            [
                // 25
                'caminho' => '/img/imagens_da_cidade/recife.jpg',
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
                'caminho' => '/img/imagens_da_cidade/porto_alegre.jpg',
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
