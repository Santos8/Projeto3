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

                <h5>Facebook e Instagram marcam vídeo postado no perfil de Bolsonaro como 'informação falsa'</h5>
                <p>
                Bolsonaro postou em seus perfis um vídeo que compara títulos em espanhol e português de uma reportagem
                 de um veículo de imprensa sobre o discurso que ele fez no Fórum Econômico Mundial em 2019. Na legenda,
                  Bolsonaro escreveu: “Se você não lê jornal está sem informação, sê lê está desinformado”.

                ‘Bolsonaro anima os executivos de Davos a investir no Brasil’ [...]. Ou seja, uma manchete positiva, uma
                 reportagem positiva sobre a participação dele. Aí eu fui ver a mesma publicação na parte brasileira do 
                 jornal, ou seja, esse aqui é o jornal que vai para o Brasil: ‘O breve discurso de Bolsonaro decepciona 
                 em Davos’. Ou seja, o contrário do que está publicado na Espanha, a mesma repórter”, diz um homem no vídeo.</p>
                <img src="https://picsum.photos/400/300" class="flush" alt="Imagem aleatória">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                <h4>Links</h4>
                <ul>
                    <li><a href="http://luferat.net">Site do Fessô</a></li>
                    <li><a href="https://github.com/luferat">GitHub do Fessô</a></li>
                </ul>
                <p>Facebook e Instagram colocaram avisos no vídeo, que ainda pode ser assistido pelos usuários das redes
                    sociais.

                    “As mesmas informações foram conferidas por verificadores de fatos independentes em outra publicação” 
                    e “Verificadores de fatos independentes afirmam que essa informação não se baseia em fatos”.

                    O G1 entrou em contato com o Instagram, o Facebook e com a Secretaria de Comunicação do Palácio do 
                    Planalto para comentar o assunto, mas não obteve retorno até a última atualização da reportagem.

                    O vídeo foi verificado por uma agência de checagem que classificou o conteúdo como falso.</p>

            </article>

            <!-- Barra lateral -->
            <aside>
                <h3>ultimas noticias</h3>
                <p>Vítimas da violência
Operações provocam, em média, 5 mortes por dia no Rio, diz Defensoria
Ações ocorrem mesmo com decisão do STF de que fossem feitas só em caráter excepcional na pandemia.

Há 51 minutosRio de Janeiro</p>
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
