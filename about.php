<?php

// Configurações globais
require_once ('_config.php');





/***** Configurações da página *****/

// Título da página
$T['pageTitle'] = 'Página Modelo';

// CSS da página
$T['pageCSS'] = '/css/template.css';

// JavaScript da página
$T['pageJS'] = '/js/template.js';

// Cabeçalho da página
require_once('_header.php');

?>

            <!-- Conteúdo principal -->
            <article>

                <h5>Alguma coiisa</h5>
                <p>O Brick noticias é um portal de notícias brasileiro mantido pelo Grupo Globo e sob orientação da Central Globo de Jornalismo. Foi lançado em 18 de setembro de 2006, ano em que a Rede Globo completava 41 anos. O portal disponibiliza o conteúdo jornalístico das diversas empresas do Grupo Globo - Rede Globo, Globo News , Rádios CBN e Globo , jornais O Globo , Extra , Expresso e Valor Econômico , Época e Globo Rural , entre outros - além de reportagens próprias em formato de texto ,fotos , áudio e vídeo .

Além de cinco redações no Rio de Janeiro , São Paulo , Brasília , Belo Horizonte e Recife , afiliadas da Rede Globo, jornais, revistas, rádios e agências de notícias Agência Estado , Agence France Presse , Associated Press , EFE , The New York Times , Lusa e Reuters alimentam o portal de notícias, que é atualizado 24 horas por dia.

</p>
                <img src="https://picsum.photos/400/300" class="flush" alt="Imagem aleatória">
                <p>O mair site de noticias do brasil</p>
                <h4>Links</h4>
                <ul>
                    <li><a href="http://luferat.net">Site do Fessô</a></li>
                    <li><a href="https://github.com/luferat">GitHub do Fessô</a></li>
                </ul>
                <p>O portal destaca-se pelo conteúdo multimídia, aproveitando as vantagens da internet sobre os meios
                     de comunicação tradicionais.
                     As versões do G1 em inglês e espanhol foram lançadas em 11 de junho de 2010 e possuem vídeos
                      legendados em dois idiomas.O G1 também possui a versão mobile e aplicativos para Android e iOS .</p>

            </article>

            <!-- Barra lateral -->
            <aside>
                <h3>Barra lateral</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <ul>
                    <li><a href="/">Link 1</a></li>
                    <li><a href="/">Link 2</a></li>
                    <li><a href="/">Link 3</a></li>
                    <li><a href="/">Link 4</a></li>
                </ul>
            </aside>

<?php

// Rodapé da página
require_once ('_footer.php');
