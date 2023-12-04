<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('estados')->insert([
            [
                // id = 1
                'nome' => 'São Paulo',
                'descricao' => 'São Paulo é um estado brasileiro da região Sudeste. Trata-se da unidade de federação mais populosa do país, com 46 milhões de pessoas, e abriga também a cidade com maior concentração de habitantes do Brasil, que é a sua capital.',
                'bandeira' => '/img/bandeiras_dos_estados/sao_paulo.png',
                'pais' => 'Brasil'
            ],
            [
                // 2
                'nome' => 'Pernambuco',
                'descricao' => 'Pernambuco, no Brasil, é um estado encantador que cativa os visitantes com sua rica herança cultural, praias deslumbrantes e festivais animados. Destacam-se as belezas históricas de Olinda e Recife, o fervor do Carnaval, as águas cristalinas de Porto de Galinhas e as manifestações culturais únicas, como o frevo e o maracatu. Com uma mistura vibrante de tradição e modernidade, Pernambuco é um destino turístico diversificado e emocionante.',
                'bandeira' => '/img/bandeiras_dos_estados/pernambuco.png',
                'pais' => 'Brasil'
            ],
            [
                // 3
                'nome' => 'Rio Grande do Norte',
                'descricao' => 'O Rio Grande do Norte, no Brasil, encanta turistas com suas praias paradisíacas, como Pipa e Genipabu, dunas impressionantes, como as de Jenipabu, e a cultura rica, destacando-se em Natal com o Forte dos Reis Magos e o Maior Cajueiro do Mundo. O estado oferece uma experiência única e diversificada.',
                'bandeira' => '/img/bandeiras_dos_estados/rio_grande_do_norte.png',
                'pais' => 'Brasil'
            ],
            [
                // 4
                'nome' => 'Ceara',
                'descricao' => 'O Ceará, no Brasil, encanta turistas com suas praias paradisíacas, como Jericoacoara e Canoa Quebrada, dunas imponentes, culinária rica em sabores locais, como a tradicional carne de sol, e festivais culturais animados, destacando-se como um destino turístico diversificado e vibrante no nordeste brasileiro.',
                'bandeira' => '/img/bandeiras_dos_estados/ceara.png',
                'pais' => 'Brasil'
            ],
            [
                // 5
                'nome' => 'Santa Catarina',
                'descricao' => 'Santa Catarina, Brasil, encanta turistas com sua diversidade, oferecendo praias paradisíacas, como Florianópolis e Balneário Camboriú, e cenários montanhosos, como na Serra Catarinense. A cultura açoriana, gastronomia única e festivais locais complementam a experiência, tornando Santa Catarina um destino turístico vibrante e acolhedor.',
                'bandeira' => '/img/bandeiras_dos_estados/santa_catarina.png',
                'pais' => 'Brasil'
            ],
            [
                // 6
                'nome' => 'Bahia',
                'descricao' => 'A Bahia, no Brasil, encanta turistas com suas praias paradisíacas, como Porto Seguro e Morro de São Paulo, sua rica cultura afro-brasileira expressa no Pelourinho, em Salvador, e festas populares como o Carnaval, destacando-se como um destino vibrante, repleto de diversidade e calor humano.',
                'bandeira' => '/img/bandeiras_dos_estados/bahia.png',
                'pais' => 'Brasil'
            ],
            [
                // 7
                'nome' => 'Rio Grande do Sul',
                'descricao' => 'O turismo no Rio Grande do Sul, Brasil, destaca-se pela diversidade de paisagens, como as serras gaúchas, com vinícolas em Bento Gonçalves, as belezas naturais de Gramado e Canela, as Missões Jesuíticas em São Miguel das Missões, e a cultura gaucha em Porto Alegre, oferecendo uma experiência única e rica.',
                'bandeira' => '/img/bandeiras_dos_estados/rio_grande_do_sul.png',
                'pais' => 'Brasil'
            ],
            [
                // 8
                'nome' => 'Rio de Janeiro',
                'descricao' => 'O Rio de Janeiro é um estado brasileiro situado na região Sudeste do país. É a quarta menor unidade da federação em área, mas a terceira mais populosa. As belas paisagens naturais e a rica cultura fluminense fazem do estado um dos principais destinos turísticos no país.
                ',
                'bandeira' => '/img/bandeiras_dos_estados/rio_de_janeiro.png',
                'pais' => 'Brasil'
            ],
            [
                // 9
                'nome' => 'Acre (AC)',
                'descricao' => '',
                'bandeira' => '/img/bandeiras_dos_estados/acre.png',
                'pais' => 'Brasil'
            ],
            [
                // 10
                'nome' => 'Alagoas (AL)',
                'descricao' => '',
                'bandeira' => '/img/bandeiras_dos_estados/alagoas.png',
                'pais' => 'Brasil'
            ],
            [
                // 11
                'nome' => 'Amapá (AP)',
                'descricao' => '',
                'bandeira' => '/img/bandeiras_dos_estados/amapa.png',
                'pais' => 'Brasil'
            ],
            [
                // 12
                'nome' => 'Amazonas (AM)',
                'descricao' => '',
                'bandeira' => '/img/bandeiras_dos_estados/amazonas.png',
                'pais' => 'Brasil'
            ],
            [
                // 13
                'nome' => 'Distrito Federal (DF)',
                'descricao' => '',
                'bandeira' => '/img/bandeiras_dos_estados/distrito_federal.png',
                'pais' => 'Brasil'
            ],
            [
                // 14
                'nome' => 'Espírito Santo (ES)',
                'descricao' => '',
                'bandeira' => '/img/bandeiras_dos_estados/espirito_santo.png',
                'pais' => 'Brasil'
            ],
            [
                // 15
                'nome' => 'Goiás (GO)',
                'descricao' => '',
                'bandeira' => '/img/bandeiras_dos_estados/goias.png',
                'pais' => 'Brasil'
            ],
            [
                // 16
                'nome' => 'Maranhão (MA)',
                'descricao' => '',
                'bandeira' => '/img/bandeiras_dos_estados/maranhao.png',
                'pais' => 'Brasil'
            ],
            [
                // 17
                'nome' => 'Mato Grosso (MT)',
                'descricao' => '',
                'bandeira' => '/img/bandeiras_dos_estados/mato_grosso.png',
                'pais' => 'Brasil'
            ],
            [
                // 18
                'nome' => 'Mato Grosso do Sul (MS)',
                'descricao' => '',
                'bandeira' => '/img/bandeiras_dos_estados/mato_grosso_do_sul.png',
                'pais' => 'Brasil'
            ],
            [
                // 19
                'nome' => 'Minas Gerais (MG)',
                'descricao' => '',
                'bandeira' => '/img/bandeiras_dos_estados/minas_gerais.png',
                'pais' => 'Brasil'
            ],
            [
                // 20
                'nome' => 'Pará (PA)',
                'descricao' => '',
                'bandeira' => '/img/bandeiras_dos_estados/para.png',
                'pais' => 'Brasil'
            ],
            [
                // 21
                'nome' => 'Paraíba (PB)',
                'descricao' => '',
                'bandeira' => '/img/bandeiras_dos_estados/paraiba.png',
                'pais' => 'Brasil'
            ],
            [
                // 22
                'nome' => 'Paraná (PR)',
                'descricao' => '',
                'bandeira' => '/img/bandeiras_dos_estados/parana.png',
                'pais' => 'Brasil'
            ],
            [
                // 23
                'nome' => 'Piauí (PI)',
                'descricao' => '',
                'bandeira' => '/img/bandeiras_dos_estados/piaui.png',
                'pais' => 'Brasil'
            ],
            [
                // 24
                'nome' => 'Rondônia (RO)',
                'descricao' => '',
                'bandeira' => '/img/bandeiras_dos_estados/rondonia.png',
                'pais' => 'Brasil'
            ],
            [
                // 25
                'nome' => 'Roraima (RR)',
                'descricao' => '',
                'bandeira' => '/img/bandeiras_dos_estados/roraima.png',
                'pais' => 'Brasil'
            ],
            [
                // 26
                'nome' => 'Sergipe (SE)',
                'descricao' => '',
                'bandeira' => '/img/bandeiras_dos_estados/sergipe.png',
                'pais' => 'Brasil'
            ],
            [
                // 27
                'nome' => 'Tocantins (TO)',
                'descricao' => '',
                'bandeira' => '/img/bandeiras_dos_estados/tocantins.png',
                'pais' => 'Brasil'
            ],

        ]);
    }
}
