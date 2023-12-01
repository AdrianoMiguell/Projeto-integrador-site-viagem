<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PontoTuristicoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    //  'titulo',
    //  'descricao',
    //  'viagem_id',

    public function run(): void
    {

        DB::table('ponto_turisticos')->insert([
            [   
                // 1
                'titulo' => 'Palácio Boa Vista',
                'descricao' => 'O imponente Palácio Boa Vista, sede de inverno do Governador de São Paulo, destaca-se por sua arquitetura elegante. Rodeado por belos jardins, o palácio oferece aos visitantes uma visão privilegiada da Serra da Mantiqueira, proporcionando uma experiência única e cultural.',
                'viagem_id' => 1,
            ],
            [
                // 2
                'titulo' => 'Morro do Elefante',
                'descricao' => 'No coração de Campos do Jordão, o Morro do Elefante oferece vistas panorâmicas espetaculares da cidade e das montanhas circundantes. Acesso fácil por teleférico, proporciona uma experiência memorável, especialmente ao pôr do sol, quando as cores se transformam em um espetáculo inigualável.',
                'viagem_id' => 1,
            ],

            [
                // 3
                'titulo' => 'Porto de Galinhas',
                'descricao' => 'Praia de Porto de Galinhas: Celebrada por suas águas claras, piscinas naturais, areias brancas e atividades como mergulho e passeios de jangada.
                Além disso, a região conta com outras praias encantadoras, como Muro Alto e Maracaípe. O turista também pode explorar o centro de Porto de Galinhas, repleto de lojas, restaurantes e animada vida noturna.',
                'viagem_id' => 2,
            ],
            [
                // 4
                'titulo' => 'Forte dos Reis Magos',
                'descricao' => 'Construído no século XVI, é um marco histórico com vistas panorâmicas da cidade. O forte abriga exposições que contam a história local.',
                'viagem_id' => 3,
            ],
            [
                // 5
                'titulo' => 'Parque das Dunas',
                'descricao' => 'Maior parque urbano de dunas do Brasil, é ideal para caminhadas e trilhas, oferecendo uma imersão na natureza preservada.',
                'viagem_id' => 3,
            ],
            [
                // 6
                'titulo' => 'Praia de Ponta Negra',
                'descricao' => 'Com suas águas mornas e a presença do Morro do Careca, é uma das praias mais famosas. Oferece uma ampla faixa de areia, restaurantes e animada vida noturna.',
                'viagem_id' => 3,
            ],


            [
                // 7
                'titulo' => 'Catedral Metropolitana',
                'descricao' => 'Uma imponente igreja neogótica que se destaca na paisagem urbana, oferecendo uma experiência arquitetônica e espiritual única.',
                'viagem_id' => 4,
            ],
            [
                // 8
                'titulo' => 'Praia de Iracema',
                'descricao' => 'O icônico calçadão de Iracema oferece uma atmosfera vibrante, com bares, restaurantes e uma estátua de Iracema, personagem literária de José de Alencar.',
                'viagem_id' => 4,
            ],

            [
                // 9
                'titulo' => 'Praia da Joaquina',
                'descricao' => 'Reconhecida mundialmente por suas ondas ideais para o surf, a Joaquina encanta não apenas os amantes desse esporte, mas também os visitantes que apreciam suas dunas e beleza natural.',
                'viagem_id' => 5,
            ],

            [
                // 10
                'titulo' => 'Centro Histórico',
                'descricao' => 'O berço do Brasil, onde Pedro Álvares Cabral desembarcou em 1500. Ruas de pedra, casarões coloniais e a Igreja Nossa Senhora da Pena destacam-se, proporcionando uma viagem no tempo.',
                'viagem_id' => 6,
            ],
            [
                // 11
                'titulo' => 'Recife de Fora',
                'descricao' => 'Uma experiência única de mergulho em piscinas naturais durante a maré baixa, revelando corais e uma diversidade incrível de vida marinha.',
                'viagem_id' => 6,
            ],

            [
                // 12
                'titulo' => 'Lago Negro',
                'descricao' => 'Um cenário encantador com um lago artificial, cercado de árvores e jardins bem cuidados. Passeios de pedalinho são uma atividade popular.',
                'viagem_id' => 7,
            ],

            [
                // 13
                'titulo' => 'Praia de Itamambuca',
                'descricao' => 'Conhecida por suas ondas ideais para o surfe, Itamambuca encanta com sua beleza natural intocada, cercada por vegetação exuberante e rica em biodiversidade marinha.',
                'viagem_id' => 8,
            ],
            [
                // 14
                'titulo' => 'Aquário de Ubatuba',
                'descricao' => 'Educativo e divertido, o aquário destaca a rica vida marinha da região, com tanques interativos e apresentações informativas.',
                'viagem_id' => 8,
            ],

            [
                // 15
                'titulo' => 'MASP - Museu de Arte de São Paulo',
                'descricao' => 'Destaca-se por sua arquitetura arrojada e acervo que abrange diversos períodos artísticos.',
                'viagem_id' => 9,
            ],
            [
                // 16
                'titulo' => 'Parque Ibirapuera',
                'descricao' => 'O pulmão verde da cidade, oferece vasta área verde, lagos, museus e espaços culturais, como o Auditório Ibirapuera.',
                'viagem_id' => 9,
            ],

            [
                // 17
                'titulo' => 'Cristo Redentor',
                'descricao' => 'Ícone internacional, essa imponente estátua no Morro do Corcovado oferece vistas espetaculares da cidade. Com 30 metros de altura, representa uma síntese da cultura brasileira.',
                'viagem_id' => 10,
            ],
            [
                // 18
                'titulo' => 'Pão de Açúcar',
                'descricao' => 'O teleférico que leva ao topo do Pão de Açúcar proporciona panoramas deslumbrantes da Baía de Guanabara e da cidade. É um dos cartões-postais mais emblemáticos.',
                'viagem_id' => 10,
            ],


        ]);

        // 'titulo',
        // 'descricao',
        // 'viagem_id',

        // Parque Amantikir, o Horto Florestal, o Museu Felícia Leirner e Auditório Claudio Santoro, o Pico do Itapeva, o Bosque do Silêncio, o Mirante da Pedra do Baú e a Vila Capivari 3.
        //
    }
}
