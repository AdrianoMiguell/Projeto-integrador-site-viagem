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


            [
                // 11
                'titulo' => 'Roteiro de Viagem para Rio Branco',
                'descricao' => 'Embarque em uma jornada encantadora em direção a Rio Branco, onde a natureza exuberante se entrelaça com a rica cultura amazônica. Descubra a capital acreana, envolta pela serenidade de suas paisagens deslumbrantes e pelas águas calmas do Rio Acre. Explore o Parque Ambiental Chico Mendes, mergulhe na história local no Memorial dos Autonomistas e deixe-se levar pelos sabores regionais na feira do Mercado Velho. Com sua atmosfera acolhedora e povo hospitaleiro, Rio Branco convida você a desvendar os segredos da Amazônia Ocidental, proporcionando uma viagem inesquecível repleta de experiências autênticas e momentos de pura conexão com a natureza e a cultura local.',
                'cidade_id' => 11,
            ],
            [
                // 12
                'titulo' => 'Roteiro de Viagem para Maceió',
                'descricao' => 'Descubra o encanto que Maceió, a pérola do Nordeste brasileiro, reserva para cada visitante. Banhada pelas águas mornas e cristalinas do Oceano Atlântico, a cidade cativa com suas praias deslumbrantes, como Pajuçara e Ponta Verde, onde o mar encontra o horizonte em um espetáculo de cores. Embarque em uma jornada gastronômica, explorando a culinária regional repleta de sabores intensos, e mergulhe na rica cultura local através da música e da dança. Cada esquina de Maceió revela uma história fascinante, proporcionando uma experiência única e memorável. Prepare-se para ser envolvido pela hospitalidade alagoana enquanto desfruta de dias ensolarados e noites repletas de charme à beira-mar.',
                'cidade_id' => 12,
            ],
            [
                // 13
                'titulo' => 'Roteiro de Viagem para Macapá',
                'descricao' => 'Embarque em uma jornada única e envolvente rumo a Macapá, a joia amazônica do Brasil. Situada às margens do Rio Amazonas, a cidade revela uma combinação fascinante de cultura, natureza exuberante e autenticidade. Seus mercados vibrantes, como o Ver-o-Peso, oferecem um mergulho na diversidade de sabores e cores locais. Explore o Marco Zero, símbolo da conexão entre o Brasil e a França, e encante-se com a harmonia entre a modernidade e a tradição que caracteriza a capital amapaense. À medida que você se aventura pelas paisagens amazônicas ao redor, descubra a riqueza da fauna e flora únicas. Macapá aguarda ansiosamente para desvendar seus segredos e proporcionar uma experiência inesquecível em meio à natureza e à cultura amazônica.',
                'cidade_id' => 13,
            ],
            [
                // 14
                'titulo' => 'Roteiro de Viagem para Manaus',
                'descricao' => 'Explore a majestosa cidade de Manaus, um portal para a deslumbrante Amazônia. Banhada pelo Rio Negro, esta metrópole encanta com sua arquitetura histórica e a exuberante Floresta Amazônica à sua porta. Descubra o Teatro Amazonas, uma joia cultural que testemunha o esplendor da época áurea da borracha. Embarque em cruzeiros pelos rios serpenteantes, mergulhando na vastidão verde da selva. Os sabores amazônicos, com seus peixes exóticos e frutas tropicais, aguçarão seu paladar em uma viagem gastronômica única. Seja explorando o Mercado Adolpho Lisboa ou navegando pelo Encontro das Águas, Manaus promete uma experiência sensorial incomparável, imersa na beleza natural e na rica herança cultural da região.',
                'cidade_id' => 14,
            ],
            [
                // 15
                'titulo' => 'Roteiro de Viagem para Brasilia',
                'descricao' => 'Descubra a capital moderna e arrojada do Brasil: Brasília, um verdadeiro marco arquitetônico. Projetada por Oscar Niemeyer e Lúcio Costa, a cidade é uma sinfonia de linhas futuristas e espaços amplos. Ao explorar a Esplanada dos Ministérios, mergulhe na grandiosidade do Congresso Nacional e da Catedral de Brasília, testemunhando a genialidade do design. Os encantos de Brasília não se limitam apenas à sua arquitetura; os vastos parques, como o Parque da Cidade, proporcionam refúgios verdes e momentos de tranquilidade. Delicie-se com a diversidade gastronômica nas quadras comerciais e sinta a energia pulsante da capital em constante evolução. Brasília é mais do que uma cidade, é uma experiência imersiva que mescla modernidade, cultura e história, prometendo uma viagem única e inspiradora.',
                'cidade_id' => 15,
            ],
            [
                // 16
                'titulo' => 'Roteiro de Viagem para Vitória',
                'descricao' => 'Embarque numa jornada encantadora até Vitória, a joia capixaba beijada pelo sol e abraçada pelo mar. Com suas praias de águas cristalinas, como a Praia do Canto e a Curva da Jurema, a cidade convida a momentos serenos à beira-mar. Explore o centro histórico, onde a arquitetura colonial e moderna se entrelaçam, testemunhando a riqueza cultural da região. Os sabores da culinária capixaba, destacando frutos do mar frescos, são um convite ao deleite gastronômico. A Ilha do Boi e o Convento da Penha oferecem panoramas deslumbrantes para contemplar a beleza natural. Descubra a hospitalidade capixaba em cada esquina, e permita que Vitória transforme sua viagem numa experiência repleta de charme, sol e calor humano.',
                'cidade_id' => 16,
            ],
            [
                // 17
                'titulo' => 'Roteiro de Viagem para Goiânia',
                'descricao' => 'Descubra o coração vibrante do cerrado brasileiro em Goiânia, uma cidade que combina modernidade com calor humano. Conhecida por seus parques arborizados e avenidas floridas, Goiânia oferece uma atmosfera acolhedora que convida a explorar. Delicie-se com a gastronomia local em seus diversos restaurantes e feiras, onde os sabores do cerrado se misturam em pratos irresistíveis. Os Jardins Botânicos e o Bosque dos Buritis oferecem refúgios verdes para relaxar e apreciar a natureza exuberante. À noite, a vida cultural floresce em teatros e casas de shows, proporcionando entretenimento de qualidade. Em Goiânia, a modernidade se entrelaça com a tradição, prometendo uma viagem repleta de experiências autênticas e momentos inesquecíveis.',
                'cidade_id' => 17,
            ],
            [
                // 18
                'titulo' => 'Roteiro de Viagem para São Luís',
                'descricao' => 'Desvende os encantos históricos e culturais de São Luís, a capital do Maranhão, onde o passado se mistura harmoniosamente com o presente. Passeie pelas ruas de paralelepípedos do centro histórico, um Patrimônio Mundial da UNESCO, e deixe-se envolver pela arquitetura colonial preservada. A atmosfera efervescente da cidade revela-se em suas festas populares e manifestações culturais únicas, como o Bumba Meu Boi. À beira-mar, as praias convidam a momentos de relaxamento, enquanto a culinária local, com seus sabores intensos de peixes e mariscos, conquista os paladares mais exigentes. Em São Luís, cada esquina conta uma história, e cada experiência promete mergulhar você na riqueza da cultura nordestina.',
                'cidade_id' => 18,
            ],
            [
                // 19
                'titulo' => 'Roteiro de Viagem para Cuiabá',
                'descricao' => 'Em Cuiabá, a porta de entrada para o Pantanal, cada momento se torna uma jornada única. Descubra uma cidade que preserva sua rica herança cultural enquanto abraça a modernidade. O calor humano cuiabano é palpável em cada esquina, refletindo a autenticidade e a hospitalidade da região. Conheça o Mercado Municipal, onde aromas e cores se misturam, revelando a diversidade da culinária local. Aventure-se pelos parques urbanos, como o Mãe Bonifácia, e sinta a natureza pulsante do Centro Geodésico da América do Sul. À medida que o sol se põe sobre o Rio Cuiabá, prepara-se para vivenciar noites vibrantes, cheias de música e tradição. Nesta cidade que equilibra o passado e o presente, cada visita é uma promessa de descobertas emocionantes e experiências inesquecíveis.',
                'cidade_id' => 19,
            ],
            [
                // 20
                'titulo' => 'Roteiro de Viagem para Campo Grande',
                'descricao' => 'Embarque em uma viagem enriquecedora a Campo Grande, o coração verde do Brasil. Esta cidade cativa com sua harmonia entre modernidade e natureza exuberante. Explore o Parque das Nações Indígenas, onde o verde se estende em uma paleta de cores, proporcionando uma pausa relaxante no coração urbano. Descubra a cultura regional no Mercadão Municipal, onde aromas e sabores locais encantam os sentidos. À noite, entregue-se à animada cena gastronômica e cultural da Rua 14 de Julho. Seja através da hospitalidade local ou dos passeios pelas belezas naturais do entorno, cada momento em Campo Grande é uma oportunidade de se conectar com a autenticidade sul-mato-grossense. Prepare-se para uma experiência única que mescla tradição e modernidade em meio a uma atmosfera acolhedora e calorosa.',
                'cidade_id' => 20,
            ],
            [
                // 21
                'titulo' => 'Roteiro de Viagem para Belo Horizonte',
                'descricao' => 'Descubra a vibrante Belo Horizonte, onde a cultura, a gastronomia e a arquitetura se entrelaçam em uma experiência única. Conhecida como a "Cidade Jardim", a capital mineira encanta com suas praças arborizadas e edifícios históricos, como a Pampulha e sua famosa igreja projetada por Oscar Niemeyer. Delicie-se com a rica culinária local, com o famoso pão de queijo e pratos típicos mineiros, enquanto explora mercados e feiras cheias de cores e sabores. A efervescente vida noturna em bares e restaurantes ao redor da Savassi completa a experiência, mostrando que Belo Horizonte é muito mais que uma cidade, é um convite para descobertas, sabores e momentos inesquecíveis.',
                'cidade_id' => 21,
            ],
            [
                // 22
                'titulo' => 'Roteiro de Viagem para Belém',
                'descricao' => 'Embarque em uma viagem sensorial a Belém, onde a Amazônia encontra a história em um abraço caloroso. Às margens da Baía do Guajará, esta cidade paraense deslumbra com sua arquitetura colonial, destacando-se o encantador complexo Ver-o-Peso. Aqui, o aroma exótico das especiarias mistura-se à exuberância da natureza, criando uma atmosfera única nos mercados locais. Navegue pelos rios serpenteantes, mergulhando na vastidão da Floresta Amazônica. As iguarias amazônicas, como o tacacá e o açaí fresco, deliciam os paladares mais exigentes. Belém é um convite à descoberta de tradições, sabores e paisagens únicas, proporcionando uma viagem que desperta os sentidos e enriquece a alma.',
                'cidade_id' => 22,
            ],
            [
                // 23
                'titulo' => 'Roteiro de Viagem para João Pessoa',
                'descricao' => 'Desvende os encantos de João Pessoa, onde o sol abraça praias de areias douradas e o calor humano é tão acolhedor quanto a brisa marinha. Nesta cidade que respira história, mergulhe nas ruas de paralelepípedos do Centro Histórico, onde igrejas seculares e casarões contam contos do passado. Banhe-se nas águas tranquilas da Praia de Tambaba, onde a natureza se exibe em sua forma mais pura. Saboreie a culinária paraibana, rica em sabores e tradições, nos mercados e restaurantes locais. Em cada esquina, sinta a autenticidade nordestina que torna João Pessoa uma experiência única. Descubra a simbiose perfeita entre modernidade e tradição enquanto esta cidade cativa seus sentidos e transforma sua viagem em memórias inesquecíveis.',
                'cidade_id' => 23,
            ],
            [
                // 24
                'titulo' => 'Roteiro de Viagem para Curitiba',
                'descricao' => 'Adentre a atmosfera única de Curitiba, onde a harmonia entre modernidade e natureza cria uma experiência singular. Conhecida por sua arquitetura inovadora, a cidade encanta com o design arrojado da Ópera de Arame e a imponência do Jardim Botânico. Passeie pelos bosques urbanos e sinta a serenidade no Parque Barigui, refúgio verde no coração da metrópole. A gastronomia local, com seus cafés charmosos e sabores autênticos, convida a degustar a culinária paranaense. Em cada esquina, Curitiba revela seu compromisso com a sustentabilidade e a qualidade de vida, proporcionando aos visitantes uma imersão única na cultura e no estilo de vida curitibano. Descubra a beleza discreta e sofisticada desta cidade, que cativa com sua originalidade e autenticidade.',
                'cidade_id' => 24,
            ],
            [
                // 25
                'titulo' => 'Roteiro de Viagem para Recife',
                'descricao' => 'Embarque numa jornada inesquecível para Recife, onde a energia pulsante do Nordeste brasileiro encontra o encanto histórico. Conhecida como a "Veneza Brasileira" devido aos seus canais e pontes, Recife é uma cidade que transpira cultura e tradição. As praias deslumbrantes, como Boa Viagem, convidam a dias de sol e mar, enquanto o Recife Antigo revela a riqueza histórica em suas ruas de paralelepípedos e arquitetura colonial. Delicie-se com a culinária regional, experimentando pratos típicos como a feijoada e tapioca. As manifestações culturais, como o frevo e o maracatu, ganham vida nas festas locais. Descubra a fusão única entre modernidade e tradição enquanto se entrega ao calor humano e à alegria contagiante que caracterizam Recife.',
                'cidade_id' => 25,
            ],
            [
                // 26
                'titulo' => 'Roteiro de Viagem para Teresina',
                'descricao' => 'Embarque em uma viagem rumo a Teresina, a "Cidade Verde", onde o calor humano se mistura com a exuberância natural do Nordeste brasileiro. Às margens do Rio Parnaíba, esta metrópole acolhedora oferece uma experiência única, destacada por suas praças arborizadas e parques encantadores. Teresina, com sua arquitetura eclética e charme descontraído, convida os visitantes a explorar o Museu do Homem Americano e a Ponte Estaiada, símbolos da rica história e inovação da cidade. Descubra a gastronomia local, com pratos como a tradicional carne de sol, e mergulhe na cultura piauiense através de festivais e manifestações artísticas. Teresina espera por você com um abraço caloroso, pronta para revelar seus encantos e singularidades.',
                'cidade_id' => 26,
            ],
            [
                // 27
                'titulo' => 'Roteiro de Viagem para Porto Alegre',
                'descricao' => 'Explore a sofisticação e a autenticidade de Porto Alegre, uma cidade que encanta à beira do Rio Guaíba. Conhecida por sua hospitalidade gaúcha, a capital do Rio Grande do Sul oferece uma mistura única de cultura, gastronomia e paisagens deslumbrantes. Percorra o calçadão da Usina do Gasômetro e contemple o pôr do sol espetacular sobre o rio. Delicie-se com o churrasco gaúcho em churrascarias tradicionais e mergulhe na cena cultural vibrante, com teatros, museus e feiras de artesanato. Com parques verdejantes e uma atmosfera acolhedora, Porto Alegre convida você a descobrir seu charme sulista e a se perder nos encantos que só essa cidade pode oferecer.',
                'cidade_id' => 27,
            ],
            [
                // 28
                'titulo' => 'Roteiro de Viagem para Porto Velho',
                'descricao' => 'Desbrave os encantos de Porto Velho, a pérola amazônica do Brasil Central. Às margens do Rio Madeira, a cidade revela uma simbiose entre natureza e urbanidade. Seu patrimônio histórico, representado pela Estrada de Ferro Madeira-Mamoré, conta a saga da construção da ferrovia no auge do ciclo da borracha. Aproveite as águas calmas do Rio Madeira em passeios fluviais e mergulhe na exuberância da floresta tropical que circunda a região. A culinária regional, com peixes frescos e frutas exóticas, é um deleite para os paladares mais exigentes. Porto Velho, com sua autenticidade amazônica, convida a desvendar sua história, cultura e a beleza singular da maior floresta tropical do mundo. Uma viagem única espera por você nesta cidade que pulsa ao ritmo da Amazônia.',
                'cidade_id' => 28,
            ],
            [
                // 29
                'titulo' => 'Roteiro de Viagem para Boa Vista',
                'descricao' => 'Descubra a serenidade e os encantos tropicais de Boa Vista, a jóia escondida no extremo norte do Brasil. Com um cenário de vastas paisagens e horizontes intermináveis, a cidade oferece uma experiência única em meio à natureza exuberante da Amazônia. Passeie pelo Parque Anauá, onde a fauna e flora amazônicas revelam sua beleza singular. A Orla Taumanan convida para relaxantes caminhadas à beira do Rio Branco, enquanto o Complexo Ayrton Senna é um local vibrante para atividades culturais. Desfrute da culinária local, marcada por sabores regionais, e mergulhe na rica cultura indígena que permeia a região. Boa Vista é mais que uma cidade, é uma porta de entrada para aventuras inesquecíveis na Amazônia brasileira.',
                'cidade_id' => 29,
            ],
            [
                // 30
                'titulo' => 'Roteiro de Viagem para Aracaju',
                'descricao' => 'Explore as belezas descontraídas e acolhedoras de Aracaju, banhada pelo calor do sol e das águas sergipanas. Com suas praias douradas, como Atalaia e Aruana, a capital sergipana convida a momentos de relaxamento e diversão à beira-mar. Passeie pelo calçadão da Orla de Atalaia, repleto de bares e restaurantes, e encante-se com o pôr do sol sobre o Rio Sergipe. Aracaju também revela sua história na Cidade Histórica, com suas ruas de paralelepípedos e casarões coloridos. Delicie-se com a culinária local, com destaque para os sabores do manguezal. Com um toque de autenticidade nordestina, Aracaju é um convite irresistível a descobrir a hospitalidade e os encantos do Sergipe.',
                'cidade_id' => 30,
            ],
            [
                // 31
                'titulo' => 'Roteiro de Viagem para Palmas',
                'descricao' => 'Palmas, a capital ensolarada de Tocantins, aguarda sua visita com um convite irresistível para descobrir um destino único. Rodeada por uma natureza exuberante, a cidade surpreende com suas praias fluviais, como a Praia da Graciosa, perfeitas para momentos de relaxamento à beira do Rio Tocantins. Os parques urbanos, como o Parque Cesamar, oferecem um refúgio verde em meio à modernidade. Explore a Feira da 304 Sul para saborear a autêntica culinária local e mergulhe na cultura tocantinense. Palmas, com seu planejamento urbano contemporâneo, convida a desbravar uma capital que combina harmoniosamente o progresso com a beleza natural. Prepare-se para uma experiência acolhedora e autêntica, onde cada canto revela a hospitalidade do coração do Brasil.',
                'cidade_id' => 31,
            ],
        ]);
    }
}
