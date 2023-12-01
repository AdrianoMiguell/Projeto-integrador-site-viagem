<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ViagemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    // 'titulo',
    //     'descricao',
    //     'sugestoes',
    //     'cidade_id',
    public function run(): void
    {
        // 'titulo',
        // 'descricao',
        // 'sugestoes',
        // 'cidade_id',

        DB::table('viagems')->insert([
            [
                // 1
                'titulo' =>  'Viagem para Campos do Jordão: Guia de Viagem, Dicas, Roteiro e Promoções',
                'descricao' => 'Embarque em uma jornada de encanto e serenidade nas colinas da Serra da Mantiqueira, explorando a majestosa Campos do Jordão. Entre arquitetura europeia e paisagens deslumbrantes, esta cidade é um refúgio de beleza natural e clima ameno. Deixe-se envolver pelo charme das ruas floridas, deguste delícias gastronômicas e respire a tranquilidade das montanhas. Campos do Jordão é mais que um destino, é uma experiência que desperta os sentidos e cria memórias inesquecíveis. Viaje para recarregar a alma e se perder na beleza única desta joia no coração do Brasil.',
                'cidade_id' => 1,
            ],
            [
                // 2
                'titulo' =>  'Roteiro de viagem para Ipojuca',
                'descricao' => 'Embarque em uma jornada única de descobertas e encantos em Ipojuca, Pernambuco. De praias paradisíacas, como Porto de Galinhas, a experiências culturais vibrantes, essa cidade promete memórias inesquecíveis. Descubra o calor humano, a culinária exuberante e as belezas naturais que tornam Ipojuca um destino imperdível. Sua próxima aventura aguarda!',
                'cidade_id' => 2,
            ],
            [
                // 3
                'titulo' =>  'Roteiros de passeio no Natal',
                'descricao' => 'Explore o encanto tropical de Natal, onde as praias douradas se encontram com dunas deslumbrantes e cultura vibrante. Deixe-se envolver pela hospitalidade calorosa, desfrute de atividades aquáticas emocionantes e descubra a alegria única desta cidade. Natal aguarda para transformar suas viagens em memórias inesquecíveis.',
                'cidade_id' => 3,
            ],
            [
                // 4 -
                'titulo' =>  'Viagem para Fortaleza: Guia de Viagem, Dicas, Roteiro e Promoções',
                'descricao' => 'Desperte seus sentidos em Fortaleza, onde as praias de águas cristalinas, a cultura vibrante e a culinária deliciosa se entrelaçam em uma experiência inigualável. Descubra o calor humano, o sol radiante e as belezas naturais que tornam Fortaleza um destino irresistível. Embarque nessa jornada e deixe-se envolver pela magia do Nordeste brasileiro.',
                'cidade_id' => 4,
            ],
            [
                // 5
                'titulo' =>  'Roteiro Florianópolis',
                'descricao' => 'Explore a magia de Florianópolis, onde praias paradisíacas se encontram com uma rica cultura. Descubra a beleza natural da Ilha da Magia, mergulhe em suas águas cristalinas, e deixe-se envolver pela atmosfera acolhedora. Uma viagem única aguarda, repleta de experiências inesquecíveis e cenários deslumbrantes. Embarque nessa jornada em Florianópolis!',
                'cidade_id' => 5,
            ],
            [
                // 6
                'titulo' =>  'Roteiros de passeio no Porto Seguro',
                'descricao' => 'Explore as maravilhas históricas e as praias paradisíacas de Porto Seguro. Nesta cidade encantadora, cada esquina revela um capítulo da história do Brasil, enquanto as areias douradas e as águas cristalinas proporcionam um refúgio relaxante. Embarque nessa viagem e descubra o encanto único desta joia baiana.',
                'cidade_id' => 6,
            ],
            [
                // 7
                'titulo' =>  'Viagem para Gramado: Guia de Viagem, Dicas, Roteiro e Promoções',
                'descricao' => 'Embarque em uma jornada encantadora rumo a Gramado, onde a beleza da natureza se mistura à arquitetura europeia, criando um cenário mágico. Explore os charmosos bosques, delicie-se com a gastronomia refinada e viva momentos inesquecíveis. Descubra em cada esquina a magia que torna Gramado um destino único e inspirador.',
                'cidade_id' => 7,
            ],
            [
                // 8
                'titulo' =>  'Roteiro Ubatuba',
                'descricao' => 'Explore a beleza selvagem de Ubatuba, onde praias paradisíacas se encontram com a exuberância da Mata Atlântica. Em cada canto, descubra aventuras aquáticas, trilhas deslumbrantes e uma atmosfera descontraída. Em Ubatuba, cada momento é uma descoberta, convidando você a se perder na natureza e se encontrar na serenidade do litoral.',
                'cidade_id' => 8,
            ],
            [
                // 9
                'titulo' =>  'São Paulo',
                'descricao' => 'Em São Paulo, a cidade que nunca dorme, descubra a energia pulsante da cultura, gastronomia e diversidade. Dos arranha-céus imponentes ao charme dos bairros históricos, cada esquina revela uma história. Explore museus de renome, saboreie a culinária global e mergulhe na vida noturna agitada. São Paulo, onde cada visita é uma jornada inesquecível.',
                'cidade_id' => 9,
            ],
            [
                // 10
                'titulo' =>  'Roteiros de passeio no Rio de Janeiro',
                'descricao' => 'Explore o Rio de Janeiro, onde a energia pulsante da cidade encontra praias deslumbrantes e paisagens icônicas. Do Cristo Redentor ao calor das praias de Copacabana, cada momento é uma sinfonia de beleza e cultura. Embarque nessa jornada única, onde a alegria carioca e a natureza exuberante se encontram, criando memórias inesquecíveis.',
                'cidade_id' => 10,
            ],
        ]);
    }
}
