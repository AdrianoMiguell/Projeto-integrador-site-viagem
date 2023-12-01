<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CidadeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cidades')->insert([
            [
                // 1
                'nome' => 'Campos do Jordão',
                'descricao' => 'Campos do Jordão é um município brasileiro localizado no interior do estado de São Paulo, mais precisamente na Serra da Mantiqueira. A cidade é conhecida como a “Suíça Brasileira” devido à sua arquitetura tardia baseada em construções europeias e pelo seu clima mais frio que a média brasileira. Ela é um destino turístico popular, especialmente durante a estação do inverno, quando muitos visitantes vêm para desfrutar do clima frio e das paisagens naturais. Alguns dos pontos turísticos mais populares incluem o Parque Amantikir, o Horto Florestal, o Museu Felícia Leirner e Auditório Claudio Santoro, o Pico do Itapeva, o Bosque do Silêncio, o Mirante da Pedra do Baú e a Vila Capivari 3.',
                'estado_id' => 1,
            ],
            [
                // 2
                'nome' => 'Ipojuca',
                'descricao' => 'Ipojuca, em Pernambuco, destaca-se pelo turismo devido às suas praias paradisíacas, sendo a mais famosa Porto de Galinhas. Com águas cristalinas e piscinas naturais, a região atrai visitantes em busca de relaxamento e atividades aquáticas. Além disso, o município abriga o Complexo de Suape, importante polo industrial e portuário.',
                'estado_id' => 2,
            ],
            [
                // 3
                'nome' => 'Natal',
                'descricao' => 'Natal é a capital do estado do Rio Grande do Norte, localizada na região Nordeste do Brasil. A cidade é um importante centro turístico, conhecida por suas belas praias, como a Praia de Ponta Negra, a Praia dos Artistas, a Praia do Meio e a Praia do Forte, além de seus monumentos históricos, como o Forte dos Reis Magos, o Teatro Alberto Maranhão e a Catedral Metropolitana. A cidade também é famosa por sua culinária, que inclui pratos como a ginga com tapioca, o camarão na moranga e o bolo de rolo. O clima de Natal é tropical, com temperaturas médias anuais de 26°C e chuvas concentradas entre os meses de março e julho.
                ',
                'estado_id' => 3,
            ],
            [
                // 4
                'nome' => 'Fortaleza',
                'descricao' => 'Fortaleza, capital do Ceará, encanta turistas com suas praias deslumbrantes, como a Praia do Futuro, e a agitada vida noturna na Avenida Beira-Mar. O Mercado Central e o Centro Dragão do Mar são pontos turísticos imperdíveis, oferecendo cultura, artesanato e gastronomia regional.',
                'estado_id' => 4,
            ],
            [
                // 5
                'nome' => 'Florianópolis',
                'descricao' => 'Florianópolis, em Santa Catarina, destaca-se por suas praias deslumbrantes, como Joaquina e Campeche, que atraem surfistas e amantes do sol. A Ilha da Magia também oferece uma rica cultura açoriana, centros históricos encantadores e uma vida noturna vibrante, tornando-a um destino turístico diversificado e cativante.',
                'estado_id' => 5,
            ],
            [
                // 6
                'nome' => 'Porto Seguro',
                'descricao' => 'Porto Seguro, localizada no estado da Bahia, é uma cidade turística conhecida por suas praias paradisíacas, história colonial e animada vida noturna. Oferecendo uma combinação única de belezas naturais e patrimônio histórico, a região atrai visitantes em busca de sol e diversão. As praias, como Taperapuã e Arraial d\'Ajuda, são destinos populares para relaxar e desfrutar de atividades aquáticas. O centro histórico preserva construções do período colonial, incluindo a Igreja de Nossa Senhora da Pena e oF Marco do Descobrimento, marcando a chegada dos portugueses ao Brasil em 1500. Além disso, a vida noturna agitada, com barracas de praia, restaurantes e festas, contribui para a atmosfera vibrante de Porto Seguro, tornando-a uma escolha atrativa para turistas em busca de diversidade e entretenimento.',
                'estado_id' => 6,
            ],
            [
                // 7
                'nome' => 'Gramado',
                'descricao' => 'Gramado, no Rio Grande do Sul, encanta turistas com seu charme europeu, clima frio e eventos anuais, como o Natal Luz. A cidade oferece atrações como o Lago Negro, o Mini Mundo e a Rua Coberta, onde visitantes desfrutam de gastronomia refinada, arquitetura encantadora e experiências culturais, tornando-a um destino turístico memorável.
                ',
                'estado_id' => 7,
            ],
            [
                // 8
                'nome' => 'Ubatuba',
                'descricao' => 'Ubatuba, localizada no litoral norte de São Paulo, encanta turistas com suas mais de 100 praias paradisíacas, como Praia Grande e Itamambuca. A cidade oferece opções para amantes de esportes aquáticos, trilhas e ecoturismo, destacando-se pela biodiversidade da Mata Atlântica. Seus encantos naturais a tornam um destino privilegiado para quem busca relaxamento à beira-mar.',
                'estado_id' => 1,
            ],
            [
                // 9
                'nome' => 'São Paulo',
                'descricao' => 'São Paulo, a maior cidade do Brasil, oferece um cenário turístico diversificado, destacando-se por seus museus de classe mundial, como o MASP e o Museu do Ipiranga, a vibrante cena gastronômica, os parques urbanos como o Ibirapuera, e a agitada Avenida Paulista, repleta de lojas, teatros e restaurantes.',
                'estado_id' => 1,
            ],
            [
                // 10
                'nome' => 'Rio de Janeiro',
                'descricao' => 'O Rio de Janeiro, conhecido como a "Cidade Maravilhosa", encanta turistas com suas praias icônicas, como Copacabana e Ipanema, o famoso Cristo Redentor no Corcovado, e o Pão de Açúcar. Além disso, a vibrante cena cultural, o Carnaval exuberante e a diversidade gastronômica contribuem para uma experiência turística única e inesquecível.',
                'estado_id' => 8,
            ],

            [
                // 10
                'nome' => 'Rio Branco',
                'descricao' => '',
                'estado_id' => 9,
            ],
            [
                // 10
                'nome' => 'Maceió',
                'descricao' => '',
                'estado_id' => 10,
            ],
            [
                // 10
                'nome' => 'Macapá',
                'descricao' => '',
                'estado_id' => 11,
            ],
            [
                // 10
                'nome' => 'Manaus',
                'descricao' => '',
                'estado_id' => 12,
            ],
            [
                // 10
                'nome' => 'Brasilia',
                'descricao' => '',
                'estado_id' => 13,
            ],
            [
                // 10
                'nome' => 'Rio Branco',
                'descricao' => '',
                'estado_id' => 14,
            ],
            [
                // 10
                'nome' => 'Rio Branco',
                'descricao' => '',
                'estado_id' => 15,
            ],
            [
                // 10
                'nome' => 'Rio Branco',
                'descricao' => '',
                'estado_id' => 16,
            ],
            [
                // 10
                'nome' => 'Rio Branco',
                'descricao' => '',
                'estado_id' => 17,
            ],
            [
                // 10
                'nome' => 'Rio Branco',
                'descricao' => '',
                'estado_id' => 18,
            ],
            [
                // 10
                'nome' => 'Rio Branco',
                'descricao' => '',
                'estado_id' => 19,
            ],
            [
                // 10
                'nome' => 'Rio Branco',
                'descricao' => '',
                'estado_id' => 20,
            ],
            [
                // 10
                'nome' => 'Rio Branco',
                'descricao' => '',
                'estado_id' => 21,
            ],
            [
                // 10
                'nome' => 'Rio Branco',
                'descricao' => '',
                'estado_id' => 22,
            ],
            [
                // 10
                'nome' => 'Rio Branco',
                'descricao' => '',
                'estado_id' => 23,
            ],
            [
                // 10
                'nome' => 'Rio Branco',
                'descricao' => '',
                'estado_id' => 24,
            ],
            [
                // 10
                'nome' => 'Rio Branco',
                'descricao' => '',
                'estado_id' => 24,
            ],
            [
                // 10
                'nome' => 'Rio Branco',
                'descricao' => '',
                'estado_id' => 24,
            ],
            [
                // 10
                'nome' => 'Rio Branco',
                'descricao' => '',
                'estado_id' => 24,
            ],
            [
                // 10
                'nome' => 'Rio Branco',
                'descricao' => '',
                'estado_id' => 25,
            ],
            [
                // 10
                'nome' => 'Rio Branco',
                'descricao' => '',
                'estado_id' => 26,
            ],
            [
                // 10
                'nome' => 'Rio Branco',
                'descricao' => '',
                'estado_id' => 27,
            ],
        ]);
    }
}
