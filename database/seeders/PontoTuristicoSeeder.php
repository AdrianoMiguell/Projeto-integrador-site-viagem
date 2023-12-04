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
                'descricao' => 'O Palácio Boa Vista, situado em Campos do Jordão, São Paulo, é uma joia arquitetônica e cultural que impressiona pela sua beleza e significado histórico. Construído em 1964, o palácio foi originalmente idealizado para ser a residência de inverno do Governador do Estado de São Paulo, mas ao longo do tempo tornou-se também um importante ponto turístico.

                Com uma arquitetura imponente, o Palácio Boa Vista é rodeado por jardins exuberantes, destacando-se em meio à paisagem serrana. Os visitantes têm a oportunidade de explorar os seus salões decorados com obras de artistas brasileiros renomados, como Portinari, Di Cavalcanti e Tarsila do Amaral. O acervo artístico e cultural exposto no palácio é um testemunho da riqueza da produção artística nacional.
                
                Além disso, o palácio está situado em uma posição privilegiada, proporcionando vistas deslumbrantes das montanhas e do Vale do Paraíba. Os visitantes podem percorrer os jardins, apreciando a paisagem e desfrutando de momentos de tranquilidade.
                
                Ao longo do ano, o Palácio Boa Vista também abriga eventos culturais, exposições temporárias e atividades que enriquecem a experiência dos visitantes, tornando-o um destino imperdível para quem aprecia história, arte e beleza paisagística.',
                'viagem_id' => 1,
            ],
            [
                // 2
                'titulo' => 'Morro do Elefante',
                'descricao' => 'O Morro do Elefante é um ponto turístico deslumbrante localizado em Campos do Jordão, São Paulo, Brasil. Com uma altitude de aproximadamente 1.800 metros, oferece uma vista panorâmica espetacular da região, tornando-se um dos mirantes mais visitados da cidade. O nome peculiar origina-se das formações rochosas que, vistas de determinado ângulo, assemelham-se à silhueta de um elefante.

                Acesso por meio de um teleférico ou trilha, a jornada até o topo é tão cativante quanto a vista final. Uma vez lá em cima, os visitantes são presenteados com um panorama deslumbrante das montanhas circundantes, dos vales verdejantes e da arquitetura característica de Campos do Jordão.
                
                O Morro do Elefante é um local ideal para apreciar o pôr do sol, proporcionando uma experiência memorável e romântica. Ao redor do mirante, há estruturas que oferecem comodidades como lanchonetes e lojas de souvenires, tornando a visita ainda mais agradável. Este ponto turístico é um convite para conectar-se com a natureza, apreciar a beleza serrana e capturar momentos inesquecíveis em meio à atmosfera única de Campos do Jordão.',
                'viagem_id' => 1,
            ],

            [
                // 3
                'titulo' => 'Porto de Galinhas',
                'descricao' => 'Porto de Galinhas, localizado no município de Ipojuca, Pernambuco, é famoso por suas praias paradisíacas e pela piscina natural de águas cristalinas formada por recifes de corais. A principal atração é a Praia de Porto de Galinhas, eleita repetidas vezes como uma das mais belas do Brasil. As águas mornas e calmas criam o cenário perfeito para a prática de mergulho e snorkeling, revelando a rica vida marinha e os corais coloridos.

                O grande destaque, no entanto, são as piscinas naturais acessíveis durante a maré baixa. Os jangadeiros locais oferecem passeios de jangada até essas piscinas, onde os visitantes têm a oportunidade de nadar em meio a cardumes de peixes coloridos. As formações de corais criam piscinas rasas e cristalinas, tornando o local ideal para famílias, casais e amantes da natureza.
                
                A Vila de Porto de Galinhas complementa a experiência, com suas ruas charmosas repletas de lojas, restaurantes e bares. A atmosfera descontraída e acolhedora da vila proporciona uma mistura única de cultura local e turismo. Com suas belezas naturais e infraestrutura turística, Porto de Galinhas é um destino imperdível para quem busca relaxamento e contato direto com a beleza tropical do litoral brasileiro.',
                'viagem_id' => 2,
            ],
            [
                // 4
                'titulo' => 'Forte dos Reis Magos',
                'descricao' => 'O Forte dos Reis Magos, localizado em Natal, Rio Grande do Norte, é uma icônica fortaleza histórica que remonta ao século XVI. Estrategicamente posicionado na foz do Rio Potengi, o forte foi construído pelos colonizadores portugueses para proteger a cidade dos invasores.

                A arquitetura imponente do Forte dos Reis Magos mescla estilos militar e renascentista, destacando-se por suas muralhas espessas e formato estrelado, característico da arquitetura militar da época. O nome é uma referência aos Três Reis Magos, sendo fundado em 6 de janeiro, data dedicada a essa tradição cristã.
                
                O interior do forte abriga um museu que proporciona uma jornada fascinante pela história colonial do Brasil. Visitantes podem explorar as salas que exibem artefatos, mapas e informações sobre o período colonial, bem como desfrutar de uma vista panorâmica espetacular da cidade de Natal e do oceano Atlântico do alto das muralhas.
                
                Além do valor histórico, o Forte dos Reis Magos oferece aos visitantes um ambiente tranquilo e uma atmosfera nostálgica. É um local ideal para apreciar o pôr do sol, caminhar pelas muralhas e refletir sobre o passado significativo deste ponto turístico que continua a ser um símbolo marcante da história brasileira.',
                'viagem_id' => 3,
            ],
            [
                // 5
                'titulo' => 'Parque das Dunas',
                'descricao' => 'O Parque das Dunas, em Natal, é uma jóia natural que encanta visitantes com sua beleza intocada e diversidade ambiental. Localizado no coração da cidade, este é o segundo maior parque urbano de dunas do Brasil, proporcionando uma experiência única de imersão na natureza. Com uma extensão de aproximadamente 1.172 hectares, o parque abriga uma rica variedade de flora e fauna características da região nordeste.

                As dunas, cobertas por uma vegetação nativa, criam um cenário deslumbrante, proporcionando trilhas ecológicas que levam a mirantes naturais com vistas panorâmicas da cidade e do Oceano Atlântico. O visitante pode explorar ecossistemas diversos, desde áreas de restinga até lagoas temporárias, que abrigam aves migratórias e outras espécies endêmicas.
                
                O Centro de Visitantes oferece informações educativas sobre a preservação ambiental e a importância da biodiversidade local. Guias especializados conduzem passeios interpretativos, proporcionando uma compreensão mais profunda do ecossistema único do parque.
                
                Além disso, o Parque das Dunas é palco de eventos culturais e atividades ao ar livre, como trilhas noturnas, promovendo a conscientização ambiental e incentivando a comunidade a desfrutar dessa área de conservação enquanto preserva seu valor ecológico. O Parque das Dunas é um refúgio natural no coração de Natal, oferecendo uma experiência enriquecedora para os amantes da natureza e curiosos sobre a diversidade ambiental do nordeste brasileiro.',
                'viagem_id' => 3,
            ],
            [
                // 6
                'titulo' => 'Praia de Ponta Negra',
                'descricao' => 'A Praia de Ponta Negra, em Natal, é uma obra-prima natural que combina areias douradas, águas mornas e uma atmosfera vibrante. Esta deslumbrante praia, famosa por sua beleza cativante, é um ícone da capital potiguar, atraindo turistas e locais em busca de lazer, diversão e relaxamento.

                Dominada pelo imponente Morro do Careca, uma duna íngreme que se projeta sobre a paisagem, a Praia de Ponta Negra oferece uma vista panorâmica incrível. As águas calmas são ideais para nadar, e as barracas à beira-mar proporcionam uma variedade de iguarias locais e bebidas refrescantes.
                
                Ao longo do calçadão, você encontra uma animada atmosfera com vendedores ambulantes, artistas locais e uma variedade de restaurantes e bares. A vida noturna agitada da região, com opções para todos os gostos, torna Ponta Negra um destino completo, proporcionando desde relaxamento diurno até entretenimento noturno.
                
                Além disso, a praia é palco de eventos culturais, como shows e festivais, que celebram a rica herança musical e artística da região. Seja para admirar o pôr do sol do Morro do Careca, praticar esportes aquáticos ou simplesmente desfrutar da atmosfera descontraída, a Praia de Ponta Negra é um convite irresistível para explorar a beleza natural e cultural de Natal.',
                'viagem_id' => 3,
            ],


            [
                // 7
                'titulo' => 'Catedral Metropolitana',
                'descricao' => 'A Catedral Metropolitana de Fortaleza, dedicada a São José, é uma majestosa obra arquitetônica que se destaca no coração da cidade. Inaugurada em 1978, a catedral é um marco religioso e cultural, simbolizando a fé e a tradição na capital cearense.

                Seu design moderno e imponente, projetado pelo arquiteto francês George Maunier, incorpora elementos de concreto armado e vidro, criando uma estrutura única que se destaca no cenário urbano. A fachada impressionante, com linhas geométricas ousadas, é complementada por uma escultura de São José, padroeiro da cidade.
                
                Ao adentrar a catedral, os visitantes são recebidos por um interior igualmente impressionante. Os vitrais coloridos filtram a luz natural, criando uma atmosfera serena e contemplativa. O altar-mor, com sua rica ornamentação, é um exemplo magnífico de arte sacra, enquanto as capelas laterais proporcionam espaços de devoção e reflexão.
                
                A Catedral Metropolitana é também palco de eventos religiosos e culturais, tornando-se um centro vital na vida da comunidade. Sua localização central permite que os visitantes combinem a visita à catedral com explorar outros pontos de interesse nas proximidades, tornando-a uma parada imperdível para quem deseja apreciar a arquitetura sacra e a espiritualidade que ela representa em Fortaleza.',
                'viagem_id' => 4,
            ],
            [
                // 8
                'titulo' => 'Praia de Iracema',
                'descricao' => 'A Praia de Iracema, em Fortaleza, é um destino turístico que combina o encanto do mar com a efervescência cultural e histórica da cidade. Com aproximadamente quatro quilômetros de extensão, essa praia urbana é conhecida por sua atmosfera vibrante e por ser um ponto de encontro diversificado para moradores locais e visitantes.

                Ao longo da orla, o calçadão repleto de coqueiros convida para caminhadas e contemplação do Oceano Atlântico. O icônico "Espigão da Rui Barbosa" é um dos marcos da praia, oferecendo uma vista privilegiada para o pôr do sol, um espetáculo que atrai muitos admiradores diariamente.
                
                A Ponte dos Ingleses, também conhecida como Ponte Metálica, é outra atração característica da Praia de Iracema. Essa estrutura histórica liga a praia ao bairro Meireles e é um local popular para apreciar a vista panorâmica da região costeira.
                
                A praia também é famosa por sua animada vida noturna, com diversos bares, restaurantes e casas de show ao longo da orla. O Centro Dragão do Mar de Arte e Cultura, localizado nas proximidades, agrega ainda mais valor cultural à região, oferecendo exposições, teatros e eventos artísticos.
                
                A Praia de Iracema, com sua combinação única de belezas naturais, patrimônio histórico e efervescência cultural, é um convite irresistível para aqueles que desejam explorar a diversidade de Fortaleza.',
                'viagem_id' => 4,
            ],

            [
                // 9
                'titulo' => 'Praia da Joaquina',
                'descricao' => 'A Praia da Joaquina, em Florianópolis, é uma joia da Ilha da Magia, conhecida por suas ondas imponentes, paisagem deslumbrante e atmosfera descontraída. Com extensos trechos de areia dourada, essa praia é um paraíso para surfistas e amantes da natureza.

                O destaque da Praia da Joaquina são suas ondas desafiadoras, atraindo surfistas de todo o mundo. O local já sediou competições renomadas, contribuindo para sua reputação como um dos principais destinos de surfe no Brasil. A formação rochosa característica, conhecida como "Pedra da Boa Vista," oferece uma vista panorâmica espetacular da região e é um ponto de referência popular para os visitantes.
                
                Além do surfe, a praia oferece uma variedade de atividades, desde a prática de sandboard nas dunas que a cercam até simples momentos de relaxamento à beira-mar. A paisagem natural é marcada por dunas de areia, lagoas e a vegetação nativa da região, criando um ambiente tranquilo e pitoresco.
                
                A infraestrutura na área inclui bares e restaurantes que servem pratos típicos da culinária local. Com uma atmosfera descontraída e rodeada pela natureza exuberante, a Praia da Joaquina é um convite irresistível para aqueles que buscam uma combinação perfeita de aventura, beleza natural e momentos relaxantes à beira-mar.',
                'viagem_id' => 5,
            ],

            [
                // 10
                'titulo' => 'Centro Histórico',
                'descricao' => 'O Centro Histórico de Porto Seguro é um tesouro histórico e cultural que transporta os visitantes de volta ao início da história do Brasil. Designado como Patrimônio Nacional, esse enclave preserva o legado dos primeiros anos da colonização portuguesa no país. As ruas de paralelepípedos, casarões coloridos e igrejas centenárias proporcionam uma atmosfera encantadora, destacando a arquitetura colonial que remonta ao século XVI.

                A Igreja de Nossa Senhora da Pena, construída em 1535, é uma das mais antigas do Brasil e um marco imponente no Centro Histórico. Seu interior apresenta elementos barrocos e detalhes artísticos que refletem a devoção e a riqueza cultural da época.
                
                A Praça do Relógio, no coração do centro, é um ponto de encontro animado, cercado por lojas de artesanato, bares e restaurantes que oferecem pratos típicos da região. À noite, o local ganha vida com apresentações culturais, proporcionando uma experiência autêntica e festiva.
                
                Além disso, o Marco do Descobrimento é um monumento emblemático, simbolizando a chegada de Pedro Álvares Cabral ao Brasil em 1500. O Centro Histórico de Porto Seguro não é apenas um local de importância histórica, mas também um lugar vibrante onde o passado se entrelaça harmoniosamente com a vitalidade do presente, criando uma experiência única para os visitantes.',
                'viagem_id' => 6,
            ],
            [
                // 11
                'titulo' => 'Recife de Fora',
                'descricao' => 'Recife de Fora é um dos tesouros naturais de Porto Seguro, na Bahia, oferecendo uma experiência fascinante de mergulho e contemplação da rica vida marinha da região. Localizado a cerca de sete quilômetros da costa, esse banco de corais é um santuário subaquático que se revela durante a maré baixa, proporcionando uma visão deslumbrante da biodiversidade marinha.

                Ao explorar as piscinas naturais formadas pelos corais, os visitantes têm a oportunidade única de admirar uma variada fauna marinha, incluindo peixes coloridos, crustáceos e outros organismos marinhos. As águas cristalinas proporcionam uma visibilidade excepcional, criando condições ideais para a prática de snorkeling. Mergulhadores mais experientes também podem explorar áreas mais profundas, onde a diversidade de corais é impressionante.
                
                O passeio até a Recife de Fora geralmente é realizado por meio de embarcações que partem da orla de Porto Seguro, proporcionando aos visitantes uma viagem panorâmica antes de chegar ao destino. Durante a visita, guias especializados compartilham informações sobre a importância da preservação dos recifes de corais e destacam a fragilidade desse ecossistema único.
                
                Recife de Fora é um convite para uma jornada subaquática inesquecível, onde a beleza natural e a riqueza da vida marinha se unem para criar uma experiência enriquecedora para os amantes da natureza e entusiastas do mergulho.',
                'viagem_id' => 6,
            ],

            [
                // 12
                'titulo' => 'Lago Negro',
                'descricao' => 'O Lago Negro, situado na encantadora cidade de Gramado, no estado do Rio Grande do Sul, é um cenário de beleza única e tranquila que cativa visitantes de todas as idades. Esse lago pitoresco é conhecido por suas águas escuras e profundas, contrastando com os pinheiros e hortênsias que adornam suas margens.

                O Lago Negro foi formado a partir de um antigo pântano, e sua característica cor escura é resultado da introdução de árvores europeias, como os ciprestes, que foram trazidas para a região. O espelho d\'água reflete as árvores circundantes e as montanhas distantes, criando uma atmosfera serena e romântica.
                
                Ao redor do lago, um calçadão convida os visitantes a explorar suas margens, proporcionando vistas deslumbrantes em todas as direções. Barcos a remo estão disponíveis para quem deseja apreciar a paisagem diretamente das águas tranquilas do lago.
                
                Durante as estações do ano, o Lago Negro oferece diferentes experiências visuais. No inverno, a neblina acrescenta um toque mágico, enquanto na primavera e verão, as flores em tons vibrantes embelezam ainda mais a área circundante.
                
                O Lago Negro não é apenas um cartão-postal de Gramado, mas um local que convida à contemplação, passeios relaxantes e momentos de conexão com a natureza. Este tesouro natural é uma parada obrigatória para quem busca tranquilidade e beleza na encantadora região serrana do sul do Brasil.',
                'viagem_id' => 7,
            ],

            [
                // 13
                'titulo' => 'Praia de Itamambuca',
                'descricao' => 'A Praia de Itamambuca, localizada no município de Ubatuba, São Paulo, é um santuário natural que cativa visitantes com sua beleza intocada e atmosfera tranquila. Cercada pela exuberante Mata Atlântica, essa praia oferece uma experiência autêntica e preservada, sendo reconhecida como uma das mais belas da região.

                Com aproximadamente 1,5 km de extensão, Itamambuca é um refúgio para amantes da natureza e surfistas. Suas ondas consistentes a tornam um destino ideal para a prática desse esporte, atraindo surfistas de diferentes níveis de habilidade. A combinação de mar agitado e a presença de vegetação nativa cria um cenário pitoresco e proporciona uma sensação de isolamento, afastando-se do agito urbano.
                
                A praia é marcada por rios que desaguam no oceano, criando pequenos estuários e piscinas naturais. Esses elementos contribuem para a diversidade ecológica da região, oferecendo um habitat único para diversas espécies de fauna e flora.
                
                A atmosfera descontraída de Itamambuca é complementada pelos estabelecimentos locais, como quiosques e restaurantes à beira-mar, que servem pratos da culinária caiçara. O ambiente preservado e a simplicidade dessa praia a transformam em um destino imperdível para quem busca um contato mais genuíno com a natureza e momentos de tranquilidade à beira do Atlântico.',
                'viagem_id' => 8,
            ],
            [
                // 14
                'titulo' => 'Aquário de Ubatuba',
                'descricao' => 'O Aquário de Ubatuba, localizado na cidade litorânea de Ubatuba, é um fascinante centro de pesquisa e conservação marinha que cativa visitantes de todas as idades. Com uma extensa variedade de espécies aquáticas, o aquário proporciona uma experiência educativa e emocionante, destacando a riqueza da vida marinha da região.

                Dividido em diversos tanques temáticos, o aquário exibe desde coloridos peixes tropicais até impressionantes tubarões e tartarugas marinhas. Cada exposição é cuidadosamente projetada para simular os habitats naturais das criaturas, oferecendo aos visitantes uma visão autêntica e imersiva do mundo subaquático.
                
                O destaque do Aquário de Ubatuba é o tanque oceânico, que abriga uma diversidade impressionante de espécies marinhas, proporcionando aos visitantes a sensação de estar submersos em um verdadeiro ecossistema marinho. Apresentações educativas e interativas são realizadas regularmente, fornecendo informações valiosas sobre a importância da preservação dos oceanos e da vida marinha.
                
                Além das exposições, o aquário desempenha um papel crucial na pesquisa e reabilitação de animais marinhos feridos, contribuindo para a conservação e conscientização ambiental. Com sua abordagem educativa e compromisso com a preservação dos oceanos, o Aquário de Ubatuba não apenas encanta os visitantes, mas também inspira um maior entendimento e respeito pelo delicado equilíbrio dos ecossistemas marinhos.',
                'viagem_id' => 8,
            ],

            [
                // 15
                'titulo' => 'MASP - Museu de Arte de São Paulo',
                'descricao' => 'O Museu de Arte de São Paulo (MASP) é uma instituição cultural icônica, reconhecida internacionalmente pela sua arquitetura única e pelo acervo impressionante. Localizado na Avenida Paulista, coração da metrópole brasileira, o MASP é um marco arquitetônico projetado por Lina Bo Bardi.

                A característica mais distintiva do museu é sua estrutura suspensa por quatro colunas vermelhas, conferindo-lhe uma aparência leve e moderna. O vão livre embaixo do edifício cria uma praça pública, convidando a comunidade a participar de eventos e exposições ao ar livre.
                
                O acervo do MASP é notável pela diversidade e qualidade de suas obras, abrangendo desde arte europeia até peças de artistas brasileiros renomados. Destacam-se obras de mestres como Van Gogh, Rembrandt, e artistas brasileiros como Portinari e Di Cavalcanti.
                
                Além das exposições permanentes e temporárias, o MASP é conhecido por sua programação cultural diversificada, incluindo palestras, cursos e eventos que promovem o diálogo entre a arte e a sociedade.
                
                O MASP é mais do que um museu; é um espaço dinâmico que desafia as convenções e promove uma experiência enriquecedora para os amantes da arte e para o público em geral. Ao longo dos anos, o MASP se tornou um símbolo cultural de São Paulo, contribuindo significativamente para a cena artística do Brasil e além.',
                'viagem_id' => 9,
            ],
            [
                // 16
                'titulo' => 'Parque Ibirapuera',
                'descricao' => 'O Parque Ibirapuera, situado na efervescente cidade de São Paulo, é um oásis urbano que se destaca como um dos maiores e mais renomados parques urbanos da América Latina. Com seus 1.584 acres de área verde, o parque foi projetado pelo renomado arquiteto paisagista Roberto Burle Marx e pelo arquiteto Oscar Niemeyer, sendo inaugurado em 1954.

                Rodeado por uma metrópole agitada, o Ibirapuera oferece um refúgio sereno, onde visitantes podem desfrutar de uma variedade de atividades ao ar livre. Trilhas para caminhadas, áreas para piquenique e amplos gramados convidam para momentos de lazer e relaxamento. Os lagos e pontes cênicas proporcionam um cenário pitoresco para os frequentadores.
                
                O parque abriga também importantes instituições culturais, como o Museu de Arte Moderna de São Paulo (MAM) e o Museu de Arte Contemporânea da Universidade de São Paulo (MAC-USP). Essas instituições agregam valor ao espaço, tornando-o um centro cultural dinâmico que abraça diversas expressões artísticas.
                
                Eventos regulares, como exposições ao ar livre, apresentações musicais e atividades esportivas, contribuem para a atmosfera vibrante do Ibirapuera. O Obelisco Mausoléu aos Heróis de 32 e o Auditório Ibirapuera são marcos imponentes que enriquecem a paisagem.
                
                Seja para um dia de lazer em família, atividades esportivas, apreciação artística ou simples contemplação da natureza, o Parque Ibirapuera continua a ser um ícone de São Paulo, refletindo a diversidade e vitalidade da maior cidade do Brasil.',
                'viagem_id' => 9,
            ],

            [
                // 17
                'titulo' => 'Cristo Redentor',
                'descricao' => 'O Cristo Redentor, situado no cume do morro do Corcovado, no Rio de Janeiro, é uma das mais icônicas e imponentes estátuas do mundo, representando não apenas a cidade, mas também o Brasil como um todo. Inaugurado em 1931, esse colossal monumento art déco tem 30 metros de altura e os seus braços estendem-se por 28 metros, simbolizando a imensa acolhida do povo brasileiro.

                A vista panorâmica a partir do Cristo Redentor é simplesmente espetacular, proporcionando uma visão deslumbrante da cidade, das praias de Copacabana e Ipanema, da Baía de Guanabara e das montanhas circundantes. O acesso ao topo é feito por meio de trens que serpenteiam pela encosta do Corcovado, proporcionando uma jornada pitoresca antes da visão grandiosa que aguarda os visitantes.
                
                A estátua é um símbolo de fé e também um feito notável da engenharia. Seu design elegante, criado pelo escultor Paul Landowski, incorpora uma combinação única de religiosidade e arte. Iluminado à noite, o Cristo Redentor assume uma aura ainda mais mágica, tornando-se um farol celestial que domina o horizonte da cidade.
                
                Além de ser um ponto turístico obrigatório, o Cristo Redentor é um local de significado espiritual para muitos brasileiros, atraindo peregrinos e turistas de todo o mundo. Esta majestosa estátua permanece como um emblema duradouro da hospitalidade e beleza do Brasil.',
                'viagem_id' => 10,
            ],
            [
                // 18
                'titulo' => 'Pão de Açúcar',
                'descricao' => 'O Pão de Açúcar, uma das maravilhas naturais mais icônicas do Rio de Janeiro, ergue-se majestosamente como um guardião imponente da cidade maravilhosa. Este cartão-postal brasileiro é uma formação rochosa em granito que se eleva a 396 metros acima do nível do mar, oferecendo panoramas deslumbrantes da Baía de Guanabara, do Cristo Redentor e das praias cariocas.

                A ascensão ao topo do Pão de Açúcar é uma experiência única. O passeio de bondinho, que teve início em 1912, proporciona uma jornada panorâmica em duas etapas, revelando progressivamente vistas espetaculares da cidade, do Oceano Atlântico e das montanhas circundantes. No cume, os visitantes são recebidos por uma visão de 360 graus que encapsula a beleza exuberante do Rio.
                
                A atmosfera no Pão de Açúcar é eletrizante, especialmente durante o pôr do sol, quando o céu se transforma em um espetáculo de cores e as luzes da cidade começam a cintilar. O local é um ponto de encontro para amantes da natureza, fotógrafos e turistas que buscam uma experiência verdadeiramente carioca.
                
                Além da vista deslumbrante, trilhas ecológicas ao redor da base do Pão de Açúcar oferecem uma oportunidade de explorar a rica biodiversidade da região. Este ícone carioca é mais do que uma montanha imponente; é um símbolo da energia vibrante e da beleza cativante do Rio de Janeiro.',
                'viagem_id' => 10,
            ],

            [
                // Rio Branco - 19
                'titulo' => 'Palácio Rio Branco',
                'descricao' => 'O Palácio Rio Branco, localizado no coração da capital acreana, Rio Branco, é um marco histórico que evoca a elegância e a importância cultural da região. Construído no início do século XX, o palácio serviu originalmente como sede do governo e residência oficial do governador. Com uma arquitetura imponente, sua fachada de cor clara e detalhes ornamentados destaca-se no cenário urbano, proporcionando uma visão majestosa. 

                Ao adentrar o Palácio Rio Branco, os visitantes são imersos em um ambiente que mescla história e contemporaneidade. Os salões espaçosos exibem exposições que narram a trajetória do Acre, desde os primórdios até os dias atuais. A riqueza dos detalhes arquitetônicos, como os vitrais e as escadarias, contribui para a atmosfera solene do local.
                
                Além de sua relevância histórica, o Palácio Rio Branco destaca-se como um espaço cultural dinâmico, frequentemente utilizado para eventos, exposições artísticas e manifestações culturais. É um ponto de encontro para a comunidade, reforçando seu papel como guardião das memórias do Acre e como um símbolo da identidade acreana.',
                'viagem_id' => 11,
            ],
            [
                // Rio Branco - 20
                'titulo' => 'Parque da Maternidade',
                'descricao' => 'O Parque da Maternidade é um oásis verdejante no coração urbano de Rio Branco. Com trilhas sombreadas, lagos serenos e uma variedade de flora nativa, o parque oferece um refúgio tranquilo para moradores e visitantes. Ideal para caminhadas relaxantes, piqueniques em família ou simples contemplação da natureza, o Parque da Maternidade proporciona um contraste sereno à agitação da vida urbana. O local é um convite para vivenciar a harmonia entre o desenvolvimento urbano e a preservação ambiental, refletindo o compromisso da cidade com um equilíbrio sustentável.',
                'viagem_id' => 11,
            ],

            [
                // Maceió - 21
                'titulo' => 'Praia de Ponta Verde',
                'descricao' => 'A Praia de Ponta Verde é uma joia litorânea que personifica a beleza singular de Maceió. Suas águas mornas e cristalinas se estendem por quilômetros de areia fina e dourada, criando um cenário paradisíaco. Ao caminhar pela orla, os coqueiros balançam suavemente sob a brisa do mar, proporcionando sombra para relaxantes momentos à beira da praia. Restaurantes à beira-mar oferecem uma culinária regional autêntica, enquanto quiosques coloridos oferecem petiscos locais. À medida que o sol pinta o céu com tons quentes durante o pôr do sol, a Praia de Ponta Verde se transforma em um espetáculo de cores, proporcionando uma experiência verdadeiramente inesquecível.',
                'viagem_id' => 12,
            ],
            [
                // Maceió - 22
                'titulo' => 'Catedral Metropolitana de Maceió',
                'descricao' => 'No coração da cidade, a imponente Catedral Metropolitana de Maceió se destaca como um ícone arquitetônico e espiritual. Construída no estilo neogótico, a catedral é uma obra-prima que combina elegância e grandiosidade. Seus vitrais coloridos e detalhes artísticos contam histórias de devoção e cultura local. Ao entrar, os visitantes são recebidos por uma atmosfera serena, onde a reverência e a beleza se entrelaçam. A Catedral é um refúgio de tranquilidade no agito urbano, proporcionando aos turistas a oportunidade de apreciar não apenas a grandiosidade arquitetônica, mas também a espiritualidade que permeia o coração de Maceió.',
                'viagem_id' => 12,
            ],

            [
                // Macapá - 23
                'titulo' => 'Fortaleza de São José de Macapá',
                'descricao' => 'A Fortaleza de São José de Macapá é uma imponente construção que testemunhou séculos de história na região amapaense. Erguida no século XVIII pelos portugueses, o forte foi estrategicamente posicionado às margens do Rio Amazonas para proteger a região de possíveis invasões. Suas muralhas de pedra, torres e canhões evocam um passado de batalhas e resistência. Ao explorar esse patrimônio arquitetônico, os visitantes são transportados para uma era em que as fronteiras eram demarcadas pela imponência das fortificações. O interior da fortaleza abriga um museu que narra a história local, com exposições que destacam a influência cultural e a importância estratégica do local.',
                'viagem_id' => 13,
            ],
            [
                // Macapá - 24
                'titulo' => 'Marco Zero do Equador',
                'descricao' => 'O Marco Zero do Equador é um ponto geográfico singular que coloca Macapá diretamente sobre a linha equatorial. Este monumento é uma atração única que permite aos visitantes estar em dois hemisférios simultaneamente. Um passeio ao redor do Marco Zero oferece uma experiência fascinante, pois é possível caminhar entre o hemisfério norte e o hemisfério sul. Além disso, o local abriga uma estrutura em forma de torre, que oferece uma vista panorâmica da cidade e dos arredores. O Marco Zero se destaca como um símbolo icônico de Macapá, celebrando a singularidade da cidade ao estar no coração da linha imaginária que divide o mundo em duas metades. Essa atração única reflete não apenas a geografia, mas também a identidade cultural e turística da capital amapaense.',
                'viagem_id' => 13,
            ],

            [
                // Manaus - 25
                'titulo' => 'Teatro Amazonas',
                'descricao' => 'O Teatro Amazonas, em Manaus, é uma joia arquitetônica que mergulha os visitantes na riqueza cultural da região amazônica. Construído durante o período áureo da borracha no final do século XIX, o teatro exibe uma impressionante mistura de estilos arquitetônicos, com influências europeias e elementos indígenas. Sua cúpula revestida com mais de 36 mil azulejos de cerâmica e a grandiosa escadaria de mármore conduzem os visitantes a um espetáculo visual antes mesmo de entrar nas salas de espetáculos. O interior ricamente decorado, com detalhes em ouro e veludo, transporta para uma era de opulência e refinamento. O Teatro Amazonas continua a ser palco de apresentações culturais, como óperas, concertos e festivais, proporcionando uma experiência única no coração da Floresta Amazônica.',
                'viagem_id' => 14,
            ],
            [
                // Manaus - 26
                'titulo' => 'Encontro das Águas',
                'descricao' => 'Um outro ponto túristico imperdível é o Encontro das Águas, onde os rios Negro e Solimões correm lado a lado sem se misturarem por vários quilômetros. Essa fenomenal junção de águas oferece um espetáculo visual único, com o Negro exibindo suas águas escuras e o Solimões, suas águas barrentas. A experiência é ampliada por passeios de barco que levam os visitantes a contemplar essa maravilha natural. Além da beleza cênica, o Encontro das Águas é um ecossistema diversificado, proporcionando a oportunidade de avistar aves exóticas e explorar a rica biodiversidade amazônica. O contraste entre os dois rios, mantendo suas características individuais por tanto tempo, é um espetáculo que ecoa a grandiosidade da Amazônia e de Manaus.',
                'viagem_id' => 14,
            ],

            [
                // Brasilia - 27
                'titulo' => 'Congresso Nacional',
                'descricao' => 'O Congresso Nacional, imponentemente localizado na Praça dos Três Poderes, é uma obra-prima arquitetônica que representa o coração político do país. Com suas duas torres gêmeas e a cúpula que se assemelha a duas mãos se unindo, o prédio é uma representação simbólica da colaboração entre os poderes legislativo e executivo. Visitantes podem explorar o interior do Congresso, admirar as obras de arte que decoram seus corredores e, ocasionalmente, testemunhar sessões legislativas. A grandiosidade do edifício e a vastidão da Praça dos Três Poderes proporcionam uma experiência única que revela a importância histórica desse local.',
                'viagem_id' => 15,
            ],
            [
                // Brasilia - 28
                'titulo' => 'Catedral Metropolitana de Brasília',
                'descricao' => 'Outro ponto turístico notável é a Catedral Metropolitana de Brasília, uma expressão única da genialidade de Niemeyer. Com seus 16 arcos de concreto que se elevam em direção ao céu, a catedral é um exemplo impressionante da arquitetura moderna e abstrata. Seu interior minimalista e iluminado naturalmente cria uma atmosfera serena, proporcionando um contraste intrigante com a imponência externa. A catedral se tornou não apenas um local de culto, mas também um símbolo da diversidade cultural e religiosa do Brasil. Ao visitar esses dois pontos turísticos, os viajantes mergulham não apenas na história política da nação, mas também na riqueza cultural e artística que torna Brasília verdadeiramente única.',
                'viagem_id' => 15,
            ],

            [
                // Vitória - 29
                'titulo' => 'Convento da Penha',
                'descricao' => 'O Convento da Penha, situado majestosamente no alto de um penhasco em Vila Velha, é um ícone espiritual e arquitetônico. Fundado em 1558, o convento é o mais antigo do Brasil e proporciona vistas deslumbrantes da Baía de Vitória. A subida até o topo, seja por meio da trilha ou pelo elevador, é recompensada com a serenidade do local, onde os visitantes podem explorar a igreja, o claustro e apreciar a paisagem exuberante que se estende até o oceano. O Convento da Penha é um local de peregrinação e contemplação, imbuído de uma atmosfera única e espiritual.',
                'viagem_id' => 16,
            ],
            [
                // Vitória - 30
                'titulo' => 'Praia de Camburi',
                'descricao' => 'Já a Praia de Camburi, situada em pleno coração de Vitória, é um convite ao lazer e relaxamento à beira-mar. Com sua extensa faixa de areia, coqueiros e calçadão, a praia é um ponto de encontro para moradores e visitantes em busca de atividades ao ar livre. A ciclovia à beira-mar proporciona uma maneira agradável de explorar a região, enquanto os quiosques oferecem iguarias locais. O pôr do sol na Praia de Camburi é um espetáculo à parte, pintando o céu de tons quentes e refletindo sobre as águas tranquilas da Baía de Vitória. Esses dois destinos emblemáticos encapsulam a diversidade e a beleza que tornam Vitória uma cidade tão especial.
                ',
                'viagem_id' => 16,
            ],

            [
                // Goiânia - 31
                'titulo' => 'Praça Cívica',
                'descricao' => 'A Praça Cívica é o coração político e administrativo de Goiânia, além de ser um marco arquitetônico. Rodeada por importantes edifícios governamentais, como o Palácio das Esmeraldas e o Tribunal de Justiça, a praça é um testemunho da concepção urbanística do arquiteto Atílio Corrêa Lima. O Monumento às Três Raças, no centro da praça, representa a miscigenação étnica do povo goiano. A ampla área verde e os espaços para lazer fazem dela um ponto de encontro popular para moradores e visitantes.',
                'viagem_id' => 17,
            ],
            [
                // Goiânia - 32
                'titulo' => 'Parque Flamboyant',
                'descricao' => 'O Parque Flamboyant é um oásis verde que oferece uma fuga serena do bulício urbano. Com seus amplos gramados, trilhas para caminhadas e lagos tranquilos, o parque convida a momentos de relaxamento e contemplação. Além da natureza exuberante, o parque abriga o Lago das Rosas, um local encantador para piqueniques e passeios de pedalinho. O parque é também conhecido pelo Shopping Flamboyant, um dos maiores centros comerciais da região, proporcionando uma experiência de compras e entretenimento em meio à natureza.',
                'viagem_id' => 17,
            ],

            [
                // São Luís - 33
                'titulo' => 'Centro Histórico de São Luís',
                'descricao' => 'O Centro Histórico, reconhecido como Patrimônio Mundial da Humanidade pela UNESCO, é uma joia arquitetônica que remonta aos séculos XVII e XVIII. As estreitas ruas de paralelepípedos, os azulejos coloridos e os casarões coloniais narram a história da cidade. Destacam-se o Palácio dos Leões, sede do governo estadual, e a Igreja da Sé, com sua arquitetura imponente. Durante o dia, as lojas de artesanato e os cafés proporcionam uma atmosfera animada, enquanto à noite, os casarões iluminados criam uma paisagem encantadora.',
                'viagem_id' => 18,
            ],
            [
                // São Luís - 34
                'titulo' => 'Lagoa da Jansen',
                'descricao' => 'A Lagoa da Jansen é um refúgio urbano que oferece lazer e relaxamento. Com suas águas tranquilas, é um local popular para atividades ao ar livre, como caminhadas, ciclismo e passeios de pedalinho. À sua volta, restaurantes e bares à beira da lagoa proporcionam uma vista panorâmica espetacular. Durante o pôr do sol, a Lagoa da Jansen se transforma em um cenário deslumbrante, tornando-se um ponto de encontro para moradores e visitantes que desejam apreciar a beleza natural de São Luís.
                ',
                'viagem_id' => 18,
            ],

            [
                // Cuiabá - 35
                'titulo' => 'Centro Histórico de Cuiabá',
                'descricao' => 'O Centro Histórico de Cuiabá é um verdadeiro tesouro de arquitetura colonial e preserva muitos edifícios e monumentos históricos. A famosa Praça da República, também conhecida como Praça do Chafariz, é o coração do centro e abriga o Chafariz dos Mascarones, um belo conjunto de esculturas. A Igreja Nossa Senhora do Rosário e São Benedito, construída por escravos no século XVIII, é outro marco notável. Passear pelas ruas estreitas revela casarões antigos, contando a história da cidade desde sua fundação.',
                'viagem_id' => 19,
            ],
            [
                // Cuiabá - 36
                'titulo' => 'Parque Nacional da Chapada dos Guimarães',
                'descricao' => 'A poucos quilômetros de Cuiabá, encontra-se o Parque Nacional da Chapada dos Guimarães, um destino deslumbrante para os amantes da natureza. Com formações rochosas únicas, cachoeiras cristalinas e trilhas que levam a mirantes espetaculares, o parque oferece uma experiência inesquecível. Destaques incluem a Cachoeira Véu de Noiva, uma das mais altas do Brasil, e o Morro de São Jerônimo, de onde se pode apreciar vistas panorâmicas da chapada. A diversidade de fauna e flora, aliada à beleza cênica, faz deste parque um local obrigatório para quem visita Cuiabá em busca de aventuras ao ar livre.',
                'viagem_id' => 19,
            ],

            [
                // Campo Grande - 37
                'titulo' => 'Parque das Nações Indígenas',
                'descricao' => 'O Parque das Nações Indígenas é um oásis verde no coração da cidade, abrangendo uma vasta área com lagos, trilhas para caminhada e uma exuberante vegetação. É o local ideal para atividades ao ar livre, como piqueniques, corridas e passeios de bicicleta. Além disso, o parque abriga o Centro de Convenções Arquiteto Rubens Gil de Camillo, um espaço cultural que sediou importantes eventos e exposições.',
                'viagem_id' => 20,
            ],
            [
                // Campo Grande - 38
                'titulo' => 'Morada dos Baís',
                'descricao' => 'A Morada dos Baís é um local emblemático na cidade de Campo Grande, Mato Grosso do Sul, que combina história, cultura e lazer. Localizada no coração da capital sul-mato-grossense, essa construção histórica foi erguida na década de 1930 e, ao longo do tempo, passou por diversas funções até ser restaurada e transformada em um espaço cultural.

                O edifício preserva a arquitetura eclética, remanescente da era colonial, e se destaca por sua imponência. Situado na região central da cidade, a Morada dos Baís hoje funciona como um Centro de Referência Cultural, oferecendo uma variedade de atividades culturais e artísticas para os moradores e visitantes.
                
                O local abriga um restaurante que proporciona não apenas experiências gastronômicas, mas também uma vista panorâmica para o Parque das Nações Indígenas e para o centro da cidade. Além disso, a Morada dos Baís é palco para apresentações musicais, exposições de arte, oficinas e eventos culturais que celebram a rica diversidade cultural do estado de Mato Grosso do Sul.
                
                Rodeada por um jardim bem cuidado e com um ambiente acolhedor, a Morada dos Baís é não apenas um ponto de referência histórico, mas um espaço dinâmico que convida as pessoas a explorarem, apreciarem a cultura local e desfrutarem de momentos agradáveis em um cenário encantador.',
                'viagem_id' => 20,
            ],

            [
                // Belo Horizonte - 39
                'titulo' => 'Praça do Papa',
                'descricao' => 'A Praça do Papa, oficialmente chamada Praça Israel Pinheiro, oferece uma vista panorâmica deslumbrante da cidade. Localizada no bairro Mangabeiras, a praça é um local popular para eventos culturais e encontros ao ar livre. Seu nome remete à visita do Papa João Paulo II à cidade em 1980. Além da vista privilegiada, a praça abriga esculturas e é circundada por áreas verdes, proporcionando um ambiente tranquilo para os visitantes apreciarem a paisagem.',
                'viagem_id' => 21,
            ],
            [
                // Belo Horizonte - 40
                'titulo' => 'Mercado Central ',
                'descricao' => 'O Mercado Central é uma verdadeira instituição em Belo Horizonte. Fundado em 1929, este mercado é um ícone da culinária mineira e uma experiência cultural única. Com mais de 400 lojas, o Mercado Central oferece uma variedade impressionante de produtos, desde queijos artesanais até cachaças e artesanato local. Os visitantes podem degustar pratos típicos mineiros nos diversos restaurantes e bares espalhados pelo mercado. O ambiente animado, as cores vibrantes e os sabores autênticos fazem do Mercado Central uma parada obrigatória para quem deseja explorar a cultura gastronômica e comercial de Belo Horizonte.',
                'viagem_id' => 21,
            ],

            [
                // Belém - 41
                'titulo' => 'Basílica de Nossa Senhora de Nazaré',
                'descricao' => 'A Basílica de Nossa Senhora de Nazaré, localizada em Belém, é um ícone religioso e arquitetônico imponente. Construída no século XVIII, essa obra-prima barroca abriga a imagem da Virgem de Nazaré, uma das mais reverenciadas do Brasil. A basílica é palco da grandiosa festividade religiosa chamada "Círio de Nazaré", que reúne milhares de fiéis todos os anos em uma emocionante procissão pelas ruas da cidade. O interior da basílica é ricamente decorado com detalhes dourados, obras de arte sacra e vitrais impressionantes. Além do contexto religioso, a arquitetura imponente e a importância cultural tornam a Basílica de Nazaré um destino imperdível para quem visita Belém.',
                'viagem_id' => 22,
            ],
            [
                // Belém - 42
                'titulo' => 'Ver-o-Peso',
                'descricao' => 'Às margens da Baía do Guajará, o Ver-o-Peso é um complexo turístico e cultural que reflete a identidade e a história de Belém. Este mercado público, datado do século XVII, é um dos maiores da América Latina, reunindo uma variedade de produtos locais, desde ervas medicinais até peixes frescos da Amazônia. Passear pelo Ver-o-Peso é imergir nos sabores, cheiros e cores da região Norte do Brasil. Além do mercado, o local abriga o Mercado de Ferro, uma estrutura de ferro pré-fabricada importada da Europa no final do século XIX, que se tornou um ícone arquitetônico e comercial de Belém. O Ver-o-Peso é mais que um mercado, é um ponto de encontro cultural e comercial que cativa visitantes com a autenticidade da Amazônia.',
                'viagem_id' => 22,
            ],

            [
                // João Pessoa - 43
                'titulo' => 'Praia de Tambau',
                'descricao' => 'A Praia de Tambaú é uma das joias litorâneas de João Pessoa, oferecendo um cenário deslumbrante com suas águas cristalinas e areias douradas. Além do visual paradisíaco, a orla de Tambaú é conhecida pelo seu animado calçadão, repleto de quiosques, bares e restaurantes que oferecem iguarias da culinária paraibana. O destaque fica para o "Busto de Tamandaré", homenageando o ilustre almirante que dá nome à praia. Com uma atmosfera descontraída, é o lugar perfeito para desfrutar de um passeio à beira-mar, praticar esportes na areia ou saborear um delicioso prato típico enquanto aprecia o pôr do sol sobre o Oceano Atlântico.',
                'viagem_id' => 23,
            ],
            [
                // João Pessoa - 44
                'titulo' => 'Centro Histórico de João Pessoa:',
                'descricao' => 'O Centro Histórico de João Pessoa é um verdadeiro tesouro cultural, preservando a herança arquitetônica e histórica da cidade. Destacam-se a Praça Antenor Navarro, cercada por casarões coloniais coloridos e a Igreja de São Francisco, uma das mais antigas do Brasil. O complexo cultural São Francisco, com sua igreja, convento e capela dourada, é uma obra-prima barroca e um importante marco histórico. Passear pelas ruas de paralelepípedos é como voltar no tempo, revelando a rica história da cidade. O Centro Histórico é um convite para explorar a cultura e a arquitetura que fizeram de João Pessoa um destino tão especial no Nordeste brasileiro.',
                'viagem_id' => 23,
            ],

            [
                // Curitiba - 45
                'titulo' => 'Jardim Botânico de Curitiba',
                'descricao' => 'O Jardim Botânico de Curitiba é um dos ícones mais emblemáticos da cidade, reconhecido nacional e internacionalmente por sua beleza e arquitetura singular. Inaugurado em 1991, o jardim possui estufas de ferro e vidro, inspiradas no Palácio de Cristal de Londres, que abrigam uma rica diversidade de plantas tropicais. O espaço é famoso por seu jardim francês, com canteiros simetricamente desenhados, e pela alameda de ipês coloridos que deslumbra os visitantes durante a primavera. O Museu Botânico, localizado no interior do parque, oferece exposições educativas sobre a flora brasileira e a importância da preservação ambiental. O Jardim Botânico é não apenas um local de contemplação da natureza, mas também um espaço de lazer, cultura e educação.',
                'viagem_id' => 24,
            ],
            [
                // Curitiba - 46
                'titulo' => 'Ópera de Arame',
                'descricao' => 'A Ópera de Arame é uma joia arquitetônica situada no meio da natureza exuberante de Curitiba. Inaugurada em 1992, a estrutura é composta por tubos de aço e estruturas metálicas, circundada por um lago cristalino e por uma vegetação que se integra harmoniosamente ao ambiente. O teatro, conhecido por sua acústica impecável, tornou-se um local privilegiado para apresentações artísticas, desde concertos clássicos até shows contemporâneos. O acesso à Ópera de Arame é feito por uma passarela que proporciona vistas panorâmicas do entorno. À noite, a iluminação especial realça a beleza da estrutura, criando uma atmosfera mágica para os visitantes. Este local singular combina arte e natureza, proporcionando uma experiência cultural única em meio a paisagens deslumbrantes.',
                'viagem_id' => 24,
            ],

            [
                // Recife - 47
                'titulo' => 'Marco Zero',
                'descricao' => 'O Marco Zero de Recife é um ponto geográfico e turístico de significado localizado no Bairro do Recife, na região central da cidade. Ele marca o início das contagens das distâncias das estradas que ligam Recife a outras cidades. Além disso, o Marco Zero fica nas proximidades do Porto do Recife.

                O local é conhecido por um monumento que representa uma rosa dos ventos, que é uma obra do escultor Francisco Brennand. Esse monumento é um marco importante na cidade e se tornou um ponto de referência popular. A área ao redor do Marco Zero também é frequentemente utilizada para eventos culturais e festivos.
                ',
                'viagem_id' => 25,
            ],
            [
                // Recife - 48
                'titulo' => 'Recife Antigo',
                'descricao' => 'O Recife Antigo é uma área histórica e portuária da cidade de Recife, localizada no centro da capital pernambucana. Essa região é conhecida por sua arquitetura colonial preservada, ruas paralelepípedas e uma atmosfera que remonta aos tempos coloniais do Brasil.
                
                No Recife Antigo, você encontra diversas atrações, como o Marco Zero, o Paço Alfândega (antiga alfândega transformada em centro comercial), a Praça do Arsenal, a Rua do Bom Jesus com sua Sinagoga Kahal Zur Israel (considerada a mais antiga das Américas) , entre outros pontos históricos e culturais.
                
                Além disso, a região passou por um processo de revitalização, transformando-se em um polo de entretenimento com bares, restaurantes, centros culturais e espaços para eventos, atraindo tanto turistas quanto locais. O Recife Antigo é um lugar charmoso que mescla história, cultura e modernidade.
                ',
                'viagem_id' => 25,
            ],
            [
                // Recife - 49
                'titulo' => 'Praia de Boa Viagem',
                'descricao' => 'A Praia de Boa Viagem é uma das praias mais famosas e extensas localizadas na cidade de Recife, Pernambuco, Brasil. Ela é conhecida por sua extensa faixa de areia, águas mornas e pela presença de piscinas naturais formadas pelos recifes de coral ao longo da costa.
                
                No entanto, é importante mencionar que a Praia de Boa Viagem também é conhecida por suas águas com tubarões, o que torna o banho de mar em algumas áreas desaconselhável. Por esse motivo, a praia possui uma sinalização clara sobre os riscos e áreas monitoradas por equipes de salva-vidas.
                
                Além das características naturais, Boa Viagem é cercada por uma infraestrutura turística significativa, com hotéis, restaurantes, bares e opções de lazer, tornando-a uma área muito frequentada por turistas e moradores locais.
                ',
                'viagem_id' => 25,
            ],

            [
                // Teresina - 50
                'titulo' => 'Parque Estação da Cidadania',
                'descricao' => 'O Parque Estação da Cidadania é um dos principais pontos turísticos de Teresina, oferecendo um refúgio verde no coração da cidade. Localizado às margens do Rio Parnaíba, o parque proporciona uma experiência única de lazer e contato com a natureza. Suas trilhas arborizadas são ideais para caminhadas e atividades físicas, enquanto os lagos e espaços para piquenique criam um ambiente perfeito para momentos relaxantes em família. O parque também abriga o Mirante da Ponte Estaiada, de onde os visitantes podem apreciar vistas panorâmicas deslumbrantes da cidade e do rio. Com uma estrutura que inclui ciclovia, quadras esportivas e áreas de convivência, o Parque Estação da Cidadania é um oásis urbano que reflete o compromisso de Teresina com o bem-estar da comunidade.',
                'viagem_id' => 26,
            ],
            [
                // Teresina - 51
                'titulo' => 'Ponte Estaiada João Isidoro França',
                'descricao' => 'A Ponte Estaiada João Isidoro França é uma obra arquitetônica impressionante que se tornou um ícone de Teresina. Com seus imponentes 95 metros de altura e um vão livre de 290 metros, é uma das maiores pontes estaiadas do Brasil. Além de sua função prática de ligar as zonas norte e sul da cidade sobre o Rio Poti, a ponte se destaca por sua iluminação noturna, proporcionando um espetáculo visual deslumbrante. O Mirante da Ponte, localizado em um dos pilares, oferece uma vista privilegiada da cidade e é um ponto turístico imperdível para apreciar o pôr do sol. A Ponte Estaiada é um símbolo da modernidade e desenvolvimento de Teresina, atraindo tanto moradores quanto visitantes com sua beleza arquitetônica e panoramas espetaculares.',
                'viagem_id' => 26,
            ],

            [
                // Porto Alegre - 52
                'titulo' => 'Parque da Redenção (Parque Farroupilha)',
                'descricao' => 'O Parque da Redenção, também conhecido como Parque Farroupilha, é um dos pulmões verdes de Porto Alegre e um destino imperdível para os habitantes locais e visitantes. Com uma área ampla, o parque oferece uma variedade de atividades ao ar livre, como caminhadas, piqueniques e prática de esportes. Suas alamedas sombreadas, lago com pedalinhos e espaços para apresentações culturais proporcionam uma atmosfera relaxante e vibrante ao mesmo tempo. O Brique da Redenção, uma feira de artesanato que acontece aos sábados, é uma atração à parte, oferecendo produtos locais, obras de arte e gastronomia diversificada. O Parque da Redenção é um verdadeiro ponto de encontro para a comunidade, refletindo a cultura e a energia pulsante de Porto Alegre.',
                'viagem_id' => 27,
            ],
            [
                // Porto Alegre - 53
                'titulo' => 'Usina do Gasômetro',
                'descricao' => 'A Usina do Gasômetro é um ícone arquitetônico e cultural que destaca o passado industrial de Porto Alegre. Inicialmente uma central termelétrica, a estrutura foi revitalizada e transformada em um centro cultural dinâmico. Às margens do Rio Guaíba, oferece uma vista espetacular da cidade e do pôr do sol. A Usina abriga exposições, peças teatrais, apresentações musicais e eventos culturais diversos. Seus espaços multifuncionais, como o Memorial do Rio Grande do Sul, contribuem para a preservação da história e da identidade local. Além disso, os arredores da Usina são frequentemente utilizados para eventos ao ar livre, consolidando-a como um ponto de encontro para a expressão artística e cultural na capital gaúcha.',
                'viagem_id' => 27,
            ],

            [
                // Porto Velho - 54
                'titulo' => 'Estrada de Ferro Madeira-Mamoré',
                'descricao' => 'Testemunha viva da época áurea do ciclo da borracha, a Estrada de Ferro Madeira-Mamoré é um ponto turístico emblemático em Porto Velho. Construída no início do século XX para superar as corredeiras do Rio Madeira, a ferrovia desempenhou um papel crucial no transporte de borracha da região amazônica. Atualmente, seus trilhos e edificações históricas contam a história dessa empreitada desafiadora. O Complexo da EFMM preserva locomotivas a vapor, vagões e instalações originais, oferecendo aos visitantes uma viagem no tempo. O Museu Ferroviário é uma parte essencial dessa experiência, exibindo fotografias, documentos e objetos que retratam a rica história da ferrovia e seu impacto na região.',
                'viagem_id' => 28,
            ],
            [
                // Porto Velho - 55
                'titulo' => 'Parque Natural de Porto Velho (Parque Ecológico Jorge Teixeira)',
                'descricao' => 'O Parque Natural de Porto Velho, conhecido também como Parque Ecológico Jorge Teixeira, é um oásis verde no coração da cidade. Com vasta área verde, trilhas e lagos, o parque proporciona um refúgio tranquilo para os moradores e visitantes. Suas trilhas sinuosas levam os exploradores por uma diversidade de ecossistemas amazônicos, oferecendo a oportunidade de observar a fauna e flora locais. O lago central é um convite para momentos relaxantes, com pedalinhos disponíveis para os que desejam apreciar a paisagem aquática. O parque também abriga o Centro de Educação Ambiental, promovendo a conscientização e a preservação ambiental. Este local proporciona uma fuga revitalizante da agitação urbana, conectando os visitantes com a natureza exuberante da Amazônia em pleno coração de Porto Velho.',
                'viagem_id' => 28,
            ],

            [
                // Boa Vista - 56
                'titulo' => 'Parque Anauá',
                'descricao' => 'O Parque Anauá é um oásis verde em Boa Vista, convidando visitantes a mergulhar na beleza natural da região. Com uma área extensa, o parque oferece diversas opções de lazer e entretenimento. Suas trilhas sinuosas levam a paisagens deslumbrantes, proporcionando uma experiência imersiva na flora e fauna amazônicas. O destaque vai para a Torre de TV, que oferece uma vista panorâmica da cidade e do entorno, especialmente espetacular durante o pôr do sol. O lago artificial é um convite para passeios de pedalinho, e as áreas de recreação são perfeitas para piqueniques em família. O Parque Anauá é não apenas um refúgio natural, mas também um ponto de encontro da comunidade, palco de eventos culturais e festivais ao longo do ano, consolidando-se como uma atração essencial para quem visita Boa Vista.

                ',
                'viagem_id' => 29,
            ],
            [
                // Boa Vista - 57
                'titulo' => 'Orla Taumanan',
                'descricao' => 'Às margens do Rio Branco, a Orla Taumanan é um local encantador que combina a serenidade das águas com uma atmosfera vibrante. Extensas áreas de calçadão proporcionam espaços para caminhadas relaxantes e atividades ao ar livre. O cenário é enriquecido por ciclovias, quadras esportivas e quiosques, tornando-a um ponto de encontro para a comunidade local. A Orla Taumanan é especialmente convidativa ao entardecer, quando o sol pinta o céu com tons quentes, criando um espetáculo visual inesquecível. Restaurantes à beira-rio oferecem a oportunidade de apreciar a culinária local enquanto desfruta da vista panorâmica do rio. Essa área pitoresca e acolhedora representa a alma de Boa Vista, onde o encontro da natureza e da vida urbana cria uma experiência memorável para moradores e visitantes.',
                'viagem_id' => 29,
            ],

            [
                // Aracaju - 58
                'titulo' => 'Orla de Atalaia',
                'descricao' => 'A Orla de Atalaia, em Aracaju, é um dos destinos mais emblemáticos e encantadores da cidade. Às margens do Oceano Atlântico, essa ampla avenida beira-mar oferece uma variedade de atrações e atividades para os visitantes. Suas praias urbanas são conhecidas pela água morna e limpa, ideais para banhos e práticas esportivas. O Oceanário de Aracaju, localizado na Orla, é um dos maiores aquários do Brasil e destaca a rica vida marinha da região. À noite, a Orla ganha vida com bares, restaurantes e feiras de artesanato, proporcionando uma experiência animada e cultural. O Caranguejo Foot Bar, uma escultura gigante de caranguejo que se tornou um ícone local, é um ponto de referência imperdível ao longo dessa deslumbrante orla.',
                'viagem_id' => 30,
            ],
            [
                // Aracaju - 59
                'titulo' => 'Centro Histórico de Aracaju',
                'descricao' => 'O Centro Histórico de Aracaju, conhecido como o bairro São José, é um mergulho no passado da cidade. Suas ruas de paralelepípedos e casarões coloridos preservam a arquitetura colonial, contando a história da capital sergipana. A Catedral Metropolitana, construída no século XIX, é um destaque arquitetônico, assim como a Praça Fausto Cardoso, rodeada por edifícios históricos e a Fonte luminosa. O Museu da Gente Sergipana, próximo à praça, oferece uma imersão na cultura e na história do estado. Caminhar pelo Centro Histórico é como viajar no tempo, com lojas de artesanato, restaurantes tradicionais e a atmosfera acolhedora que caracteriza essa parte charmosa de Aracaju.',
                'viagem_id' => 30,
            ],

            [
                // Palmas - 60
                'titulo' => 'Praia da Graciosa',
                'descricao' => 'A Praia da Graciosa é um oásis urbano em Palmas, oferecendo uma experiência única à beira do Lago de Palmas. Com águas calmas e uma extensa faixa de areia, esta praia fluvial é um local popular para momentos de lazer e relaxamento. O pôr do sol sobre o lago cria uma atmosfera mágica, atraindo moradores e visitantes em busca de tranquilidade. A estrutura ao redor inclui quiosques, ciclovias e áreas de lazer, tornando a Praia da Graciosa um espaço versátil para atividades ao ar livre. Seja para praticar esportes aquáticos, fazer um piquenique à sombra das árvores ou simplesmente apreciar a vista, esta praia é um ponto de encontro essencial em Palmas.',
                'viagem_id' => 31,
            ],
            [
                // Palmas - 61
                'titulo' => 'Capim Dourado Shopping',
                'descricao' => 'O Capim Dourado Shopping é mais do que um centro comercial em Palmas, é um marco arquitetônico e cultural. Nomeado após a famosa fibra dourada da região, o shopping apresenta uma arquitetura única, destacando-se pela combinação de elementos modernos e referências à natureza tocantinense. Além de oferecer uma variedade de lojas, restaurantes e espaços de entretenimento, o shopping também abriga o Espaço Cultural, onde eventos artísticos e exposições locais são frequentemente realizados. O Capim Dourado Shopping não é apenas um destino para compras, mas também um espaço onde a modernidade se encontra com a identidade cultural de Palmas, proporcionando uma experiência única aos moradores e turistas.',
                'viagem_id' => 31,
            ],


        ]);
    }
}
