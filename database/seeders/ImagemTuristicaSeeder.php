<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImagemTuristicaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('imagem_turisticas')->insert([
            [
                // 1
                'caminho' => '/img/pontos_turisticos/palacio_boa_vista.jpg',
                'legenda' => 'Imagem do ponto turistico Palácio Boa Vista',
                'viagem_id' => 1,
                'ponto_turistico_id' => 1,
            ],
            [
                // 2
                'caminho' => '/img/pontos_turisticos/morro_do_elefante.jpg',
                'legenda' => 'Imagem do ponto turistico Morro do Elefante',
                'viagem_id' => 1,
                'ponto_turistico_id' => 2,
            ],

            [
                // 3
                'caminho' => '/img/pontos_turisticos/porto_de_galinhas.jpg',
                'legenda' => 'Imagem do ponto turistico Porto de Galinhas',
                'viagem_id' => 2,
                'ponto_turistico_id' => 3,
            ],
            [
                // 4
                'caminho' => '/img/pontos_turisticos/forte_dos_reis_magos.jpg',
                'legenda' => 'Imagem do ponto turistico Forte dos Reis Magos',
                'viagem_id' => 3,
                'ponto_turistico_id' => 4,
            ],
            [
                // 5
                'caminho' => '/img/pontos_turisticos/parque_das_dunas.jpg',
                'legenda' => 'Imagem do ponto turistico Parque das Dunas',
                'viagem_id' => 3,
                'ponto_turistico_id' => 5,
            ],
            [
                // 6
                'caminho' => '/img/pontos_turisticos/praia_de_ponta_negra.jpg',
                'legenda' => 'Imagem do ponto turistico Praia de Ponta Negra',
                'viagem_id' => 3,
                'ponto_turistico_id' => 6,
            ],


            [
                // 7
                'caminho' => '/img/pontos_turisticos/catedral_metropolitana.jpg',
                'legenda' => 'Imagem do ponto turistico Catedral Metropolitana',
                'viagem_id' => 4,
                'ponto_turistico_id' => 7,
            ],
            [
                // 8
                'caminho' => '/img/pontos_turisticos/praia_de_iracema.jpg',
                'legenda' => 'Imagem do ponto turistico Praia de Iracema',
                'viagem_id' => 4,
                'ponto_turistico_id' => 8,
            ],

            [
                // 9
                'caminho' => '/img/pontos_turisticos/praia_de_joaquina.jpg',
                'legenda' => 'Imagem do ponto turistico Praia da Joaquina',
                'viagem_id' => 5,
                'ponto_turistico_id' => 9,
            ],

            [
                // 10
                'caminho' => '/img/pontos_turisticos/centro_historico.jpg',
                'legenda' => 'Imagem do ponto turistico Centro Histórico',
                'viagem_id' => 6,
                'ponto_turistico_id' => 10,
            ],
            [
                // 11
                'caminho' => '/img/pontos_turisticos/recife_de_fora.jpg',
                'legenda' => 'Imagem do ponto turistico Recife de Fora',
                'viagem_id' => 6,
                'ponto_turistico_id' => 11,
            ],

            [
                // 12
                'caminho' => '/img/pontos_turisticos/lago_negro.jpg',
                'legenda' => 'Imagem do ponto turistico Lago Negro',
                'viagem_id' => 7,
                'ponto_turistico_id' => 12,
            ],

            [
                // 13
                'caminho' => '/img/pontos_turisticos/praia_de_itamambuca.jpg',
                'legenda' => 'Imagem do ponto turistico Praia de Itamambuca',
                'viagem_id' => 8,
                'ponto_turistico_id' => 13,
            ],
            [
                // 14
                'caminho' => '/img/pontos_turisticos/aquario_de_ubatuba.jpg',
                'legenda' => 'Imagem do ponto turistico Aquário de Ubatuba',
                'viagem_id' => 8,
                'ponto_turistico_id' => 14,
            ],

            [
                // 15
                'caminho' => '/img/pontos_turisticos/masp.jpg',
                'legenda' => 'Imagem do ponto turistico MASP - Museu de Arte de São Paulo',
                'viagem_id' => 9,
                'ponto_turistico_id' => 15,
            ],
            [
                // 16 - esse é jpeg, não jpg
                'caminho' => '/img/pontos_turisticos/parque_ibirapuera.jpeg',
                'legenda' => 'Imagem do ponto turistico Parque Ibirapuera',
                'viagem_id' => 9,
                'ponto_turistico_id' => 16,
            ],

            [
                // 17
                'caminho' => '/img/pontos_turisticos/cristo_redentor.jpg',
                'legenda' => 'Imagem do ponto turistico Cristo Redentor',
                'viagem_id' => 10,
                'ponto_turistico_id' => 17,
            ],
            [
                // 18
                'caminho' => '/img/pontos_turisticos/pao_de_acucar.jpg',
                'legenda' => 'Imagem do ponto turistico Pão de Açúcar',
                'viagem_id' => 10,
                'ponto_turistico_id' => 18,
            ],
            // acabouu

            [
                // Rio Branco
                'caminho' => '/img/pontos_turisticos/palacio_rio_branco.jpg',
                'legenda' => 'Imagem do ponto turistico Palácio Rio Branco',
                'viagem_id' => 11,
                'ponto_turistico_id' => 19,
            ],
            [
                // Rio Branco
                'caminho' => '/img/pontos_turisticos/parque_da_maternidade.jpeg',
                'legenda' => 'Imagem do ponto turistico Parque da Maternidade',
                'viagem_id' => 11,
                'ponto_turistico_id' => 20,
            ],

            [
                // Maceió
                'caminho' => '/img/pontos_turisticos/praia_de_ponta_verde.jpg',
                'legenda' => 'Imagem do ponto turistico Praia de Ponta Verde',
                'viagem_id' => 12,
                'ponto_turistico_id' => 21,
            ],
            [
                // Maceió
                'caminho' => '/img/pontos_turisticos/catedral_metropolitana_de_maceio.jpg',
                'legenda' => 'Imagem do ponto turistico Catedral Metropolitana de Maceió',
                'viagem_id' => 12,
                'ponto_turistico_id' => 22,
            ],

            [
                // Macapá
                'caminho' => '/img/pontos_turisticos/fortaleza_de_sao_jose_de_macapa.jpg',
                'legenda' => 'Imagem do ponto turistico Fortaleza de São José de Macapá',
                'viagem_id' => 13,
                'ponto_turistico_id' => 23,
            ],
            [
                // Macapá
                'caminho' => '/img/pontos_turisticos/marco_zero_do_equador.jpg',
                'legenda' => 'Imagem do ponto turistico Marco Zero do Equador',
                'viagem_id' => 13,
                'ponto_turistico_id' => 24,
            ],

            [
                // Manaus
                'caminho' => '/img/pontos_turisticos/teatro_amazonas.jpg',
                'legenda' => 'Imagem do ponto turistico Teatro Amazonas',
                'viagem_id' => 14,
                'ponto_turistico_id' => 25,
            ],
            [
                // Manaus
                'caminho' => '/img/pontos_turisticos/encontro_das_aguas.jpg',
                'legenda' => 'Imagem do ponto turistico Encontro das Águas',
                'viagem_id' => 14,
                'ponto_turistico_id' => 26,
            ],

            [
                // Brasilia
                'caminho' => '/img/pontos_turisticos/congresso_nacional.jpg',
                'legenda' => 'Imagem do ponto turistico Congresso Nacional',
                'viagem_id' => 15,
                'ponto_turistico_id' => 27,
            ],
            [
                // Brasilia
                'caminho' => '/img/pontos_turisticos/catedral_metropolitana_de_brasilia.jpg',
                'legenda' => 'Imagem do ponto turistico Catedral Metropolitana de Brasília',
                'viagem_id' => 15,
                'ponto_turistico_id' => 28,
            ],

            [
                // Vitória
                'caminho' => '/img/pontos_turisticos/convento_da_penha.jpg',
                'legenda' => 'Imagem do ponto turistico Convento da Penha',
                'viagem_id' => 16,
                'ponto_turistico_id' => 29,
            ],
            [
                // Vitória
                'caminho' => '/img/pontos_turisticos/praia_de_camburi.jpg',
                'legenda' => 'Imagem do ponto turistico Praia de Camburi',
                'viagem_id' => 16,
                'ponto_turistico_id' => 30,
            ],

            [
                // Goiânia
                'caminho' => '/img/pontos_turisticos/praca_civica.jpg',
                'legenda' => 'Imagem do ponto turistico Praça Cívica',
                'viagem_id' => 17,
                'ponto_turistico_id' => 31,
            ],
            [
                // Goiânia
                'caminho' => '/img/pontos_turisticos/parque_flamboyant.jpg',
                'legenda' => 'Imagem do ponto turistico Parque Flamboyant',
                'viagem_id' => 17,
                'ponto_turistico_id' => 32,
            ],

            [
                // São Luís
                'caminho' => '/img/pontos_turisticos/centro_historico_de_sao_luis.jpg',
                'legenda' => 'Imagem do ponto turistico Centro Histórico de São Luís',
                'viagem_id' => 18,
                'ponto_turistico_id' => 33,
            ],
            [
                // São Luís
                'caminho' => '/img/pontos_turisticos/lagoa_da_jansen.jpg',
                'legenda' => 'Imagem do ponto turistico Lagoa da Jansen',
                'viagem_id' => 18,
                'ponto_turistico_id' => 34,
            ],

            [
                // Cuiabá
                'caminho' => '/img/pontos_turisticos/centro_historico_de_cuiaba.jpg',
                'legenda' => 'Imagem do ponto turistico Centro Histórico de Cuiabá',
                'viagem_id' => 19,
                'ponto_turistico_id' => 35,
            ],
            [
                // Cuiabá
                'caminho' => '/img/pontos_turisticos/parque_nacional_da_chapada_dos_guimaraes.jpg',
                'legenda' => 'Imagem do ponto turistico Parque Nacional da Chapada dos Guimarães',
                'viagem_id' => 19,
                'ponto_turistico_id' => 36,
            ],

            [
                // Campo Grande
                'caminho' => '/img/pontos_turisticos/parque_das_nacoes_indigenas.jpg',
                'legenda' => 'Imagem do ponto turistico Parque das Nações Indígenas',
                'viagem_id' => 20,
                'ponto_turistico_id' => 37,
            ],
            [
                // Campo Grande
                'caminho' => '/img/pontos_turisticos/morada_dos_bais.jpg',
                'legenda' => 'Imagem do ponto turistico Morada dos Baís',
                'viagem_id' => 20,
                'ponto_turistico_id' => 38,
            ],

            [
                // Belo Horizonte
                'caminho' => '/img/pontos_turisticos/praca_do_papa.jpg',
                'legenda' => 'Imagem do ponto turistico Praça do Papa',
                'viagem_id' => 21,
                'ponto_turistico_id' => 39,
            ],
            [
                // Belo Horizonte
                'caminho' => '/img/pontos_turisticos/mercado_central_de_belo_horizonte.jpg',
                'legenda' => 'Imagem do ponto turistico Mercado Central de Belo Horizonte',
                'viagem_id' => 21,
                'ponto_turistico_id' => 40,
            ],

            [
                // Belém
                'caminho' => '/img/pontos_turisticos/basilica_de_nossa_senhora_de_nazare.jpg',
                'legenda' => 'Imagem do ponto turistico Basílica de Nossa Senhora de Nazaré',
                'viagem_id' => 22,
                'ponto_turistico_id' => 41,
            ],
            [
                // Belém
                'caminho' => '/img/pontos_turisticos/mercado_ver_o_peso.jpg',
                'legenda' => 'Imagem do ponto turistico Ver-o-Peso',
                'viagem_id' => 22,
                'ponto_turistico_id' => 42,
            ],

            [
                // João Pessoa
                'caminho' => '/img/pontos_turisticos/praia_de_tambau.jpg',
                'legenda' => 'Imagem do ponto turistico Praia de Tambau',
                'viagem_id' => 23,
                'ponto_turistico_id' => 43,
            ],
            [
                // João Pessoa
                'caminho' => '/img/pontos_turisticos/centro_historico_de_joao_pessoa.jfif',
                'legenda' => 'Imagem do ponto turistico Centro Histórico de João Pessoa:',
                'viagem_id' => 23,
                'ponto_turistico_id' => 44,
            ],

            [
                // Curitiba
                'caminho' => '/img/pontos_turisticos/jardim_botanico_de_curitiba.jpg',
                'legenda' => 'Imagem do ponto turistico Jardim Botânico de Curitiba',
                'viagem_id' => 24,
                'ponto_turistico_id' => 45,
            ],
            [
                // Curitiba
                'caminho' => '/img/pontos_turisticos/opera_de_arame.jpg',
                'legenda' => 'Imagem do ponto turistico Ópera de Arame',
                'viagem_id' => 24,
                'ponto_turistico_id' => 46,
            ],

            [
                // Recife
                'caminho' => '/img/pontos_turisticos/marco_zero_de_recife.jpg',
                'legenda' => 'Imagem do ponto turistico Marco Zero',
                'viagem_id' => 25,
                'ponto_turistico_id' => 47,
            ],
            [
                // Recife
                'caminho' => '/img/pontos_turisticos/recife_antigo.jpg',
                'legenda' => 'Imagem do ponto turistico Recife Antigo',
                'viagem_id' => 25,
                'ponto_turistico_id' => 48,
            ],
            [
                // Recife
                'caminho' => '/img/pontos_turisticos/praia_de_boa_viagem.jpg',
                'legenda' => 'Imagem do ponto turistico Praia de Boa Viagem',
                'viagem_id' => 25,
                'ponto_turistico_id' => 49,
            ],

            [
                // Teresina
                'caminho' => '/img/pontos_turisticos/parque_estacao_da_cidadania.jpg',
                'legenda' => 'Imagem do ponto turistico Parque Estação da Cidadania',
                'viagem_id' => 26,
                'ponto_turistico_id' => 50,
            ],
            [
                // Teresina
                'caminho' => '/img/pontos_turisticos/ponte_estaiada_joao_isidoro_franca.jpg',
                'legenda' => 'Imagem do ponto turistico Ponte Estaiada João Isidoro França',
                'viagem_id' => 26,
                'ponto_turistico_id' => 51,
            ],

            [
                // Porto Alegre
                'caminho' => '/img/pontos_turisticos/parque_da_redencao.jfif',
                'legenda' => 'Imagem do ponto turistico Parque da Redenção (Parque Farroupilha)',
                'viagem_id' => 27,
                'ponto_turistico_id' => 52,
            ],
            [
                // Porto Alegre
                'caminho' => '/img/pontos_turisticos/usina_do_gasometro.jpg',
                'legenda' => 'Imagem do ponto turistico Usina do Gasômetro',
                'viagem_id' => 27,
                'ponto_turistico_id' => 53,
            ],

            [
                // Porto Velho
                'caminho' => '/img/pontos_turisticos/estrada_de_ferro_madeira-mamore.jpg',
                'legenda' => 'Imagem do ponto turistico Estrada de Ferro Madeira-Mamoré',
                'viagem_id' => 28,
                'ponto_turistico_id' => 54,
            ],
            [
                // Porto Velho
                'caminho' => '/img/pontos_turisticos/parque_natural_de_porto_velho.jpg',
                'legenda' => 'Imagem do ponto turistico Parque Natural de Porto Velho (Parque Ecológico Jorge Teixeira)',
                'viagem_id' => 28,
                'ponto_turistico_id' => 55,
            ],

            [
                // Boa Vista
                'caminho' => '/img/pontos_turisticos/parque_anaua.jpg',
                'legenda' => 'Imagem do ponto turistico Parque Anauá',
                'viagem_id' => 29,
                'ponto_turistico_id' => 56,
            ],
            [
                // Boa Vista
                'caminho' => '/img/pontos_turisticos/orla_taumanan.jpg',
                'legenda' => 'Imagem do ponto turistico Orla Taumanan',
                'viagem_id' => 29,
                'ponto_turistico_id' => 57,
            ],

            [
                // Aracaju
                'caminho' => '/img/pontos_turisticos/orla_de_atalaia.jpg',
                'legenda' => 'Imagem do ponto turistico Orla de Atalaia',
                'viagem_id' => 30,
                'ponto_turistico_id' => 58,
            ],
            [
                // Aracaju
                'caminho' => '/img/pontos_turisticos/centro_historico_de_aracaju.jfif',
                'legenda' => 'Imagem do ponto turistico Centro Histórico de Aracaju',
                'viagem_id' => 30,
                'ponto_turistico_id' => 59,
            ],

            [
                // Palmas
                'caminho' => '/img/pontos_turisticos/praia_da_graciosa.jpg',
                'legenda' => 'Imagem do ponto turistico Praia da Graciosa',
                'viagem_id' => 31,
                'ponto_turistico_id' => 60,
            ],
            [
                // Palmas
                'caminho' => '/img/pontos_turisticos/capim_dourado_shopping.jpg',
                'legenda' => 'Imagem do ponto turistico Capim Dourado Shopping',
                'viagem_id' => 31,
                'ponto_turistico_id' => 61,
            ],


        ]);
    }
}
