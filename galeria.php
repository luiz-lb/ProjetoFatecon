<?php
$titulo_pagina = "Galeria de Imagens";
include 'includes/header.php';
?>
<div class="container-fluid">
    <main>
        <article class="container">
            <h1 class="text-center my-5">
                <strong>Galeria de imagens</strong>
            </h1>
            <div class="row justify-content-around">

                <div class="col-12 col-md-6 text-center px-2 mx-0">
                    <figure>
                        <img src="./img/fotogaleria1.jpg" alt="Vista aérea do complexo Centro Educacional Cultural e Turístico Brasital com galpões históricos amarelos e uma alta chaminé de tijolos, cercados por árvores verdes e colinas ao fundo sob céu claro. O ambiente transmite tranquilidade e destaca a preservação do patrimônio industrial em meio à natureza." class="img-fluid mb-4 imgaleria" data-bs-toggle="modal"
                            data-bs-target="#imageModal" onclick="expandImage(this)">
                        <figcaption class="">Vista aérea do Centro Educacional, Cultural e Turístico Brasital, destacando os galpões históricos e a chaminé preservada.
                            <br>Fonte:<a href="https://www.turismo.saoroque.sp.gov.br/galeria/centro-educacional-cultural-e-turistico-brasital/11" class="linkgaleria">Turismo São Roque</a>
                        </figcaption>
                    </figure>
                    <figure>
                        <img src="./img/fotogaleria2.jpg" alt="Caminho de pedras ladeado por jardim com flores rosas e brancas vibrantes conduz até prédios históricos amarelos com telhados de cerâmica vermelha e janelas em arco, cercados por árvores verdes e palmeiras sob céu nublado. O ambiente transmite sensação de tranquilidade e cuidado, destacando a integração entre arquitetura preservada e natureza." class="img-fluid mb-4 imgaleria" data-bs-toggle="modal"
                            data-bs-target="#imageModal" onclick="expandImage(this)">
                        <figcaption>
                            Detalhe de uma janela histórica do complexo da Brasital, com design arquitetônico preservado e vidros texturizados que refletem a luz de forma única.
                            <br>Fonte: Foto pessoal / Foto tirada em 2025
                        </figcaption>
                    </figure>
                    <figure>
                        <img src="./img/fotogaleria3.jpg" alt="Escultura de madeira em formato de bicho-da-seda sorridente em pé em um canteiro circular com flores coloridas e plantas verdes. Ao redor, palmeiras e vegetação exuberante compõem um jardim tranquilo. Bancos e caminhos de pedra aparecem ao fundo, sugerindo um ambiente acolhedor e sereno." class="img-fluid mb-4 imgaleria" data-bs-toggle="modal"
                            data-bs-target="#imageModal" onclick="expandImage(this)">
                        <figcaption>
                            Escultura em madeira em formato de bicho-da-seda, localizada no Jardim da Brasital. A obra faz alusão ao passado da antiga tecelagem que utilizava casulos de seda como matéria-prima.
                            Fonte: Foto pessoal / Foto tirada em 2025
                        </figcaption>

                    </figure>
                    <figure>
                        <img src="./img/fotogaleria4.jpg" alt="Complexo Brasital à noite com galpões históricos amarelos e alta chaminé de tijolos destacados por iluminação amarela suave. Pavimento de paralelepípedos, arbustos podados e árvores compõem o ambiente externo, transmitindo sensação de tranquilidade e acolhimento. Não há texto visível na imagem." class="img-fluid mb-4 imgaleria" data-bs-toggle="modal"
                            data-bs-target="#imageModal" onclick="expandImage(this)">
                        <figcaption>
                            Vista noturna do complexo da Brasital, com iluminação que destaca a antiga chaminé e os galpões da antiga fábrica têxtil. O local é hoje um centro cultural e histórico da cidade.
                            <br>Fonte: Foto pessoal / Foto tirada em 2025
                        </figcaption>

                    </figure>
                    <figure>
                        <img src="./img/fotogaleria5.jpg" alt="Área externa da antiga fábrica Brasital com paredes amarelas, pilares de tijolo aparente e telhado de cerâmica vermelha à esquerda. Caminho de concreto leva até o prédio principal cercado por árvores altas e vegetação densa. Ambiente transmite sensação de tranquilidade e preservação histórica. Não há texto visível na imagem." class="img-fluid mb-4 imgaleria" data-bs-toggle="modal"
                            data-bs-target="#imageModal" onclick="expandImage(this)">
                        <figcaption>
                            Parte externa da antiga fábrica da Brasital, durante o dia. A arquitetura preservada e a vegetação ao redor reforçam o valor histórico e cultural do espaço, que atualmente abriga projetos artísticos e sociais.
                            <br>Fonte: Foto pessoal / Foto tirada em 2025
                        </figcaption>

                    </figure>
                </div>
                <div class="col-12 col-md-6 col-lg-6 text-center px-2 mx-0">
                    <figure>
                        <img src="./img/fotogaleria6.jpg" alt="Janela em arco com caixilho de madeira e vidros texturizados em tons de âmbar e azul, dispostos em grade. Acima da janela há um arco decorativo de tijolos e ao redor uma parede amarela, sugerindo ambiente histórico e sereno. Não há texto visível na imagem." class="img-fluid mb-4 imgaleria" data-bs-toggle="modal"
                            data-bs-target="#imageModal" onclick="expandImage(this)">
                        <figcaption>
                            Janela em arco com caixilho de madeira e vidros coloridos, típica da arquitetura histórica da Brasital. O detalhe dos tijolos e das cores evidencia o cuidado na preservação do patrimônio.
                            <br>Fonte: <a href="https://commons.wikimedia.org/w/index.php?search=brasital&title=Special:MediaSearch&type=image" class="linkgaleria">wikimedia commons</a> / Foto tirada em 2024
                        </figcaption>
                    </figure>
                    <figure>
                        <img src="./img/fotogaleria7.jpg" alt="Fachada amarela de prédio histórico com portas e janelas verdes, paredes com manchas de umidade e fios elétricos aparentes. Corredor lateral coberto com pilares brancos e vasos de plantas leva até área interna. Ambiente sugere local antigo e tranquilo, com atmosfera nostálgica e preservação arquitetônica. Não há texto visível na imagem." class="img-fluid mb-4 imgaleria" data-bs-toggle="modal"
                            data-bs-target="#imageModal" onclick="expandImage(this)">
                        <figcaption>
                            Fachada lateral da Brasital, com portas e janelas verdes, paredes marcadas pelo tempo e corredor coberto com pilares brancos. O ambiente evidencia a atmosfera nostálgica e a preservação arquitetônica do antigo complexo industrial.
                            <br>Fonte: <a href="https://commons.wikimedia.org/w/index.php?search=brasital&title=Special:MediaSearch&type=image" class="linkgaleria">wikimedia commons</a> / Foto tirada em 2024
                        </figcaption>
                    </figure>
                    <figure>
                        <img src="./img/fotogaleria8.jpg" alt="Corredor externo com paredes amarelas e detalhes em tijolo aparente conduz até uma grande porta de madeira com vidro e arco de tijolos. Cadeiras brancas vazias estão alinhadas à esquerda, sugerindo ambiente de espera ou convivência. O local transmite sensação de tranquilidade e preservação histórica, sem texto visível na imagem." class="img-fluid mb-4 imgaleria" data-bs-toggle="modal"
                            data-bs-target="#imageModal" onclick="expandImage(this)">
                        <figcaption>
                            Corredor externo do complexo da Brasital, com paredes amarelas e detalhes em tijolo aparente, conduzindo a uma porta de madeira com arco. O ambiente evidencia a arquitetura preservada e a atmosfera acolhedora do espaço cultural.
                            <br>Fonte: <a href="https://commons.wikimedia.org/w/index.php?search=brasital&title=Special:MediaSearch&type=image" class="linkgaleria">wikimedia commons</a> / Foto tirada em 2024
                        </figcaption>
                    </figure>
                    <figure>
                        <img src="./img/fotogaleria9.jpg" alt="Portão de ferro antigo parcialmente aberto em estrutura de pedra, com detalhes ornamentais e sinais de ferrugem na base. Ao fundo, caminho de concreto coberto por folhas secas leva a uma área arborizada e sombreada, transmitindo sensação de tranquilidade e mistério. Não há texto visível na imagem." class="img-fluid mb-4 imgaleria" data-bs-toggle="modal"
                            data-bs-target="#imageModal" onclick="expandImage(this)">
                        <figcaption>
                            Portão de ferro antigo na entrada do complexo da Brasital, com detalhes ornamentais e sinais do tempo. O caminho coberto por folhas secas leva a uma área arborizada, ressaltando o clima histórico e misterioso do local.
                            <br>Fonte: <a href="https://commons.wikimedia.org/w/index.php?search=brasital&title=Special:MediaSearch&type=image" class="linkgaleria">wikimedia commons</a> / Foto tirada em 2024
                        </figcaption>
                    </figure>
                    <figure>
                        <img src="./img/fotogaleria10.jpg" alt="Pequena cachoeira de águas claras descendo sobre pedras cobertas de musgo em meio a vegetação densa e árvores altas. A luz do sol atravessa as folhas, criando áreas de sombra e brilho na água em movimento. O ambiente transmite sensação de tranquilidade e frescor, sem texto visível na imagem." class="img-fluid mb-4 imgaleria" data-bs-toggle="modal"
                            data-bs-target="#imageModal" onclick="expandImage(this)">
                        <figcaption>
                            Pequena cachoeira localizada nos arredores do complexo da Brasital, cercada por vegetação nativa e pedras cobertas de musgo. O local proporciona um ambiente de tranquilidade e contato com a natureza, sendo um dos atrativos naturais próximos ao centro cultural.
                            <br>Fonte: <a href="https://emsaoroque.com.br/pontos-turisticos/brasital-um-tesouro-historico-e-cultural-em-sao-roque/" class="linkgaleria">EmSãoRoque</a>
                        </figcaption>
                    </figure>
                </div>

                <div class="row">
                    <div class="col-md-12 text-center">
                        <a href="boraconhecer.php" class="btn btn-secondary my-3 d-inline-block mx-auto">Voltar</a>
                    </div>
                </div>
            </div>
        </article>
    </main>
</div>
<script>
    function expandImage(imgElement) {
        const modal = document.createElement('div');
        modal.style.position = 'fixed';
        modal.style.top = '0';
        modal.style.left = '0';
        modal.style.width = '100%';
        modal.style.height = '100%';
        modal.style.backgroundColor = 'rgba(0, 0, 0, 0.8)';
        modal.style.display = 'flex';
        modal.style.justifyContent = 'center';
        modal.style.alignItems = 'center';
        modal.style.zIndex = '1000';


        const img = document.createElement('img');
        img.src = imgElement.src;
        img.style.maxWidth = '90%';
        img.style.maxHeight = '90%';
        img.style.boxShadow = '0 0 10px white';

        modal.appendChild(img);

        modal.onclick = function() {
            document.body.removeChild(modal);
        };

        document.body.appendChild(modal);
    }
</script>
<?php include 'includes/footer.php';
