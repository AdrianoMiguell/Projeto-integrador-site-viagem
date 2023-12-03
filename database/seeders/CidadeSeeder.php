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
                // 11
                'nome' => 'Rio Branco',
                'descricao' => '
                Rio Branco, a capital do estado do Acre, é uma cidade que mescla a exuberância da natureza amazônica com uma atmosfera urbana pulsante. Situada às margens do Rio Acre, a cidade destaca-se por sua rica cultura e hospitalidade. A cidade é um verdadeiro ponto de encontro cultural, refletido em suas festividades animadas. A gastronomia em Rio Branco é uma fusão de sabores regionais, destacando-se pratos à base de peixes amazônicos e ingredientes autênticos. 
                ',
                'estado_id' => 9,
            ],
            [
                // 12
                'nome' => 'Maceió',
                'descricao' => 'Maceió, a encantadora capital de Alagoas, é banhada pelas águas cristalinas do Oceano Atlântico, revelando praias paradisíacas de areias brancas e coqueirais exuberantes. A Praia de Pajuçara, com suas piscinas naturais de águas mornas, encanta visitantes com os jangadeiros locais oferecendo passeios inesquecíveis. O calçadão revitalizado da Ponta Verde convida a caminhadas relaxantes à beira-mar, enquanto a badalada Jatiúca agita a noite com bares e restaurantes animados. O charme histórico se revela no bairro de Jaraguá, com suas construções coloniais e a bela Catedral Metropolitana. O artesanato local é destaque na Feirinha de Artesanato da Pajuçara, onde turistas encontram lembranças únicas. Maceió, com seu clima tropical e hospitalidade nordestina, proporciona uma experiência turística marcante, unindo belezas naturais, cultura e gastronomia regional.Macapá',
                'estado_id' => 10,
            ],
            [
                // 13
                'nome' => 'Macapá',
                'descricao' => 'Macapá, a capital do Amapá, encanta visitantes com sua rica mistura cultural e belezas naturais. Às margens do Rio Amazonas, a cidade destaca-se pela Fortaleza de São José, testemunha histórica do período colonial. O Monumento Marco Zero, que marca a linha do Equador, é um ponto turístico intrigante. O Mercado Central oferece uma explosão de cores e sabores, enquanto a culinária local, com destaque para o tacacá e o açaí, proporciona uma experiência sensorial única. A Ponte do Rio Amazonas conecta a cidade à Ilha de Santana, onde a natureza exuberante se revela em praias e trilhas. Macapá, com seu clima tropical e hospitalidade, convida os visitantes a explorar sua identidade amazônica única.',
                'estado_id' => 11,
            ],
            [
                // 14
                'nome' => 'Manaus',
                'descricao' => 'Manaus, a exuberante capital do Amazonas, seduz visitantes com sua atmosfera vibrante e rica mistura cultural. Banhada pelo majestoso Rio Negro, a cidade revela uma fascinante arquitetura histórica, destacada pelo icônico Teatro Amazonas, construído durante a era da borracha. Seu mercado municipal, o Adolpho Lisboa, oferece uma explosão de cores e sabores, representando a diversidade da região amazônica. Além disso, os passeios pelos igarapés e florestas circundantes proporcionam encontros inesquecíveis com a fauna e flora únicas da Amazônia. Manaus é a porta de entrada para aventuras na selva, proporcionando uma experiência única para os exploradores da natureza.',
                'estado_id' => 12,
            ],
            [
                // 15
                'nome' => 'Brasilia',
                'descricao' => 'Brasília, a capital do Brasil, é um marco arquitetônico e cultural. Projetada por Oscar Niemeyer e Lúcio Costa, a cidade é conhecida por sua arquitetura modernista única, com edifícios governamentais emblemáticos, como o Congresso Nacional e o Palácio da Alvorada. O Plano Piloto, com sua disposição em forma de avião, destaca-se pelas amplas avenidas, monumentos icônicos e vastas áreas verdes, como o Parque da Cidade. Além disso, Brasília abriga uma rica cena cultural, com museus, teatros e eventos artísticos. A diversidade gastronômica e a atmosfera cosmopolita completam a experiência, tornando Brasília um destino intrigante para os amantes da arquitetura e da cultura brasileira.',
                'estado_id' => 13,
            ],
            [
                // 16
                'nome' => 'Vitória',
                'descricao' => 'Vitória, a deslumbrante capital do Espírito Santo, é uma joia costeira que mescla modernidade e natureza. Rodeada por belas praias, a cidade oferece um cenário único com o contraste entre arranha-céus e o mar azul. O Centro Histórico encanta com suas construções coloniais preservadas, enquanto o Convento da Penha proporciona vistas panorâmicas incríveis. O Parque Moscoso, no coração da cidade, é um refúgio verde, perfeito para momentos de tranquilidade. A gastronomia local destaca-se, com frutos do mar frescos e a culinária capixaba autêntica. Vitória é um convite à contemplação, lazer e descobertas culturais em um ambiente tropical vibrante.',
                'estado_id' => 14,
            ],
            [
                // 17
                'nome' => 'Goiânia',
                'descricao' => 'Goiânia, a dinâmica capital de Goiás, cativa visitantes com sua atmosfera moderna e cultural. Conhecida por sua arquitetura arrojada e amplos espaços verdes, a cidade proporciona uma experiência única. O Parque Vaca Brava e o Parque Flamboyant oferecem refúgios urbanos, enquanto a Praça Cívica destaca-se pela imponência de seus edifícios governamentais. A cena cultural pulsante manifesta-se em teatros e eventos artísticos. Na gastronomia, sabores regionais e influências cosmopolitas se entrelaçam, proporcionando uma deliciosa jornada culinária. Goiânia é um convite à apreciação da modernidade, da cultura e da natureza em harmonia no coração do Brasil Central.',
                'estado_id' => 15,
            ],
            [
                // 18
                'nome' => 'São Luís',
                'descricao' => 'São Luís, a capital do Maranhão, encanta com sua arquitetura colonial, declarada Patrimônio Mundial pela UNESCO. Banhada pelo Atlântico, a cidade mescla tradições afro-brasileiras e europeias, refletindo-se nas festas populares, como o Bumba Meu Boi. Ruas de paralelepípedos e azulejos coloridos adornam o Centro Histórico, enquanto o Mercado Central oferece sabores regionais. As praias, como Calhau e São Marcos, proporcionam momentos relaxantes à beira-mar. Além disso, o clima acolhedor dos habitantes e a rica cena cultural tornam São Luís um destino único, repleto de história, música e culinária marcante.',
                'estado_id' => 16,
            ],
            [
                // 19
                'nome' => 'Cuiabá',
                'descricao' => 'Cuiabá, a capital do Mato Grosso, convida os visitantes a explorar sua rica mistura de história e natureza. Às margens do Rio Cuiabá, a cidade preserva seu legado cultural, refletido em sua arquitetura colonial e igrejas seculares. O Mercado Municipal oferece uma autêntica experiência local, enquanto o Parque Mãe Bonifácia cativa com trilhas e uma diversidade de fauna. Conhecida como a "Porta do Pantanal", Cuiabá proporciona acesso à maior planície alagável do mundo, com suas exuberantes paisagens e rica biodiversidade. A culinária regional, destacando pratos como o "peixe à matogrossense", completa a jornada sensorial nesta cidade que celebra a essência do Centro-Oeste brasileiro.',
                'estado_id' => 17,
            ],
            [
                // 20
                'nome' => 'Campo Grande',
                'descricao' => 'Campo Grande, capital de Mato Grosso do Sul, encanta os visitantes com sua harmonia entre urbanidade e natureza exuberante. Rodeada por vastas áreas verdes, a cidade oferece parques como o Parque das Nações Indígenas e a Reserva Ecológica do Sesc, proporcionando momentos de tranquilidade. A arquitetura reflete a influência da cultura indígena e o charme de uma cidade moderna. Além disso, a gastronomia local, marcada por pratos típicos da região, conquista paladares. O turista pode explorar a Feira Central, repleta de artesanato e sabores regionais. Com hospitalidade calorosa, Campo Grande convida a mergulhar em sua rica diversidade cultural e natural.',
                'estado_id' => 18,
            ],
            [
                // 21
                'nome' => 'Belo Horizonte',
                'descricao' => 'Belo Horizonte, a vibrante capital de Minas Gerais, encanta visitantes com sua arquitetura moderna e rica herança cultural. Cercada pelas montanhas da Serra do Curral, a cidade oferece vistas panorâmicas deslumbrantes. Conhecida por sua culinária diversificada e bares animados, a experiência gastronômica é um destaque, com sabores autênticos de Minas. Explore o Mercado Central para uma amostra autêntica da culinária local e visite o Conjunto Arquitetônico da Pampulha, projetado por Oscar Niemeyer. A cidade também abriga o Inhotim, um complexo de arte contemporânea em meio a jardins exuberantes. Belo Horizonte mescla tradição e modernidade, proporcionando aos visitantes uma experiência única e envolvente.',
                'estado_id' => 19,
            ],
            [
                // 22
                'nome' => 'Belém',
                'descricao' => 'Belém, a exuberante capital do Pará, cativa visitantes com sua rica mistura cultural e arquitetônica. Às margens da Baía do Guajará, a cidade revela o charme de seu centro histórico, marcado por edifícios coloniais e a imponente Catedral da Sé. O Mercado Ver-o-Peso, um verdadeiro espetáculo sensorial, oferece iguarias regionais e artesanato local. Passeios pelos rios Amazônicos proporcionam uma imersão na vastidão da Floresta Amazônica. A culinária paraense, com pratos como o tacacá e o açaí, aguça os paladares, enquanto as festas tradicionais, como o Círio de Nazaré, celebram a devoção religiosa. Belém, cidade envolta em cores e sabores, promete uma experiência autêntica na Amazônia brasileira.',
                'estado_id' => 20,
            ],
            [
                // 23
                'nome' => 'João Pessoa',
                'descricao' => 'João Pessoa, a encantadora capital da Paraíba, cativa visitantes com suas praias paradisíacas e rica história. Banhada pelo Atlântico, a cidade oferece as praias de Tambaú e Cabo Branco, conhecidas por suas águas calmas e areias douradas. O pôr do sol na Ponta do Seixas, o ponto mais oriental das Américas, é um espetáculo imperdível. O Centro Histórico preserva construções coloniais e a cultura local, enquanto o Mercado de Artesanato é um deleite para os amantes de artesanato regional. Com um clima acolhedor e uma culinária marcante, João Pessoa é um convite ao relaxamento e à descoberta de tesouros culturais.',
                'estado_id' => 21,
            ],
            [
                // 24
                'nome' => 'Curitiba',
                'descricao' => 'Curitiba, a capital do estado do Paraná, encanta visitantes com sua atmosfera cosmopolita e bem planejada. Conhecida por seus espaços verdes, destaca-se pelo Jardim Botânico e o Parque Barigui, oferecendo refúgio urbano. O inovador sistema de transporte público, incluindo o famoso ônibus biarticulado, facilita a exploração da cidade. A arquitetura diversificada inclui o Museu Oscar Niemeyer, um ícone cultural. Ruas limpas e planejamento urbano eficiente tornam a experiência agradável. O bairro de Santa Felicidade, com suas tradições italianas, proporciona uma deliciosa experiência gastronômica. Em Curitiba, modernidade e preservação ambiental convergem para criar uma cidade acolhedora e vibrante.',
                'estado_id' => 22,
            ],
            [
                // 25
                'nome' => 'Recife',
                'descricao' => 'Recife, a capital de Pernambuco, encanta com sua mistura de história, cultura e modernidade. Às margens dos rios Capibaribe e Beberibe, seus canais e pontes conferem-lhe o apelido de "Veneza Brasileira". O Recife Antigo revela casarões coloniais, igrejas históricas e o animado Marco Zero. A cidade respira arte nos inúmeros museus e galerias, enquanto o Carnaval colorido e o frevo animam as ruas. A culinária local, rica em sabores, destaca-se nos mercados e restaurantes. Com praias como Boa Viagem e a efervescente vida noturna, Recife convida os visitantes a mergulhar em sua energia calorosa e autenticidade pernambucana.',
                'estado_id' => 2,
            ],
            [
                // 26
                'nome' => 'Teresina',
                'descricao' => 'Teresina, a capital do Piauí, encanta visitantes com sua atmosfera acolhedora e vibrante. Banhada pelo Rio Parnaíba, a cidade exibe uma mistura única de cultura e história. Seus parques, como o Potycabana, oferecem espaços verdes para lazer, enquanto o Centro Histórico revela construções preservadas e praças charmosas. O encontro das águas no Parque Lagoas do Norte é um espetáculo imperdível. A gastronomia local destaca-se com pratos típicos, como a famosa carne de sol. Teresina celebra suas tradições em festivais culturais e mantém viva a autenticidade nordestina, convidando todos a explorar seus encantos e calor humano.',
                'estado_id' => 23,
            ],
            [
                // 27
                'nome' => 'Porto Alegre',
                'descricao' => 'Porto Alegre, a vibrante capital do Rio Grande do Sul, seduz os visitantes com sua atmosfera acolhedora e rica herança cultural. Às margens do Rio Guaíba, a cidade exibe um cenário encantador, destacado pelo pôr do sol espetacular no Gasômetro. Suas ruas abrigam arquitetura histórica, como o Mercado Público e a Casa de Cultura Mário Quintana. Os parques, como o Redenção, proporcionam espaços verdes relaxantes. A gastronomia local é uma experiência única, com churrascarias renomadas e bares animados. Porto Alegre é um convite a explorar a cultura gaúcha, fundindo tradição e modernidade em cada esquina.',
                'estado_id' => 7,
            ],
            [
                // 28
                'nome' => 'Porto Velho',
                'descricao' => 'Porto Velho, a capital de Rondônia, no coração da Amazônia brasileira, encanta com sua combinação única de natureza exuberante e história vibrante. Às margens do Rio Madeira, a cidade revela sua riqueza cultural por meio do Mercado Central e do Memorial Rondon. A arquitetura colonial preservada contrasta com a modernidade, enquanto o Parque Natural Municipal de Porto Velho oferece uma pausa tranquila para os amantes da natureza. A culinária local destaca-se pelos pratos típicos amazônicos, proporcionando uma experiência gastronômica única. Com sua atmosfera acolhedora e paisagens envolventes, Porto Velho convida os visitantes a explorar o coração selvagem do Brasil.',
                'estado_id' => 24,
            ],
            [
                // 29
                'nome' => 'Boa Vista',
                'descricao' => 'Boa Vista, capital de Roraima, encanta com seu ambiente tropical e cultural diversificado. Às margens do Rio Branco, a cidade se destaca pela arquitetura moderna, com a Praça das Águas como um ponto turístico vibrante. O Parque Anauá oferece lazer ao ar livre, enquanto o Centro Cívico abriga a charmosa igreja de São Francisco de Assis. A influência indígena se manifesta no artesanato local, com destaque para o mercado da cidade. Boa Vista também proporciona a experiência única de estar próxima à linha do Equador, garantindo um clima quente e acolhedor durante todo o ano.',
                'estado_id' => 25,
            ],
            [
                // 30
                'nome' => 'Aracaju',
                'descricao' => 'Aracaju, capital de Sergipe, encanta os visitantes com suas praias paradisíacas e uma atmosfera acolhedora. À beira do Rio Sergipe, a Orla de Atalaia é um destaque, oferecendo uma extensa faixa litorânea repleta de quiosques, ciclovias e áreas de lazer. O Mercado Municipal, com suas cores e sabores, proporciona uma autêntica experiência cultural. A arquitetura histórica, como a Catedral Metropolitana e o Palácio-Museu Olímpio Campos, enriquece a cidade. Aracaju é conhecida por sua gastronomia única, destacando pratos à base de frutos do mar. A hospitalidade local completa a viagem, tornando-a memorável.',
                'estado_id' => 26,
            ],
            [
                // 31
                'nome' => 'Palmas',
                'descricao' => 'Palmas, a capital de Tocantins, é uma jóia verde no coração do Brasil. Rodeada por paisagens naturais exuberantes, a cidade é marcada por avenidas amplas, parques bem cuidados e uma atmosfera tranquila. Às margens do Lago de Palmas, oferece oportunidades para esportes aquáticos e passeios relaxantes. Seu planejamento urbano moderno, com ruas arborizadas, destaca-se, proporcionando uma experiência agradável aos visitantes. A Feira da 304 Sul é um local imperdível para explorar a cultura local e saborear a culinária típica. Com um clima acolhedor, Palmas convida os viajantes a explorar o melhor da natureza e da hospitalidade tocantinense.',
                'estado_id' => 27,
            ],
        ]);
    }
}
