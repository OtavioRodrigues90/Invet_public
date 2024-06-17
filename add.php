<?php
    include("connection.php");

// Definir encoding
mysqli_set_charset($con,"utf-8");

// Recolher resultados
$result = mysqli_query($con,"select * from banners");

/* Por cada resultado, preparar a saída
 */
$imagesHtml = '';

$indicatorDotsHtml = '';

$i = 0;

while($row = mysqli_fetch_array($result)) {

    $filename = $row['imagem'];

    // classe "active" apenas no primeiro elemento
    $active = $i==0 ? 'active' : '';

    // criar HTML para a imagem
    $imagesHtml.= '
    <div class="item '.$active.'">
        <img src="php/'.$filename.'" alt="'.$filename.'" />
    </div>';

    // criar HTML para o indicador da imagem
    $indicatorDotsHtml.= '
    <li data-target="#myCarousel" data-slide-to="'.$i.'" class="'.$active.'"></li>';
    
    $i++;
}


/* Preparar a saída para o navegador
 */
if (!empty($imagesHtml)) {

    /* Verificar se precisamos de navegação
     */
    $navHtml = '';

    if ($i>1) {

        $indicatorsHtml = '
        <ol class="carousel-indicators">
            '.$indicatorDotsHtml.'
        </ol>';

        $navHtml = '
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>';
    }

    /* Enviar saída para o navegador
     */
    echo '
    <div id="myCarousel" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
        '.$indicatorsHtml.'

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            '.$imagesHtml.'
        </div>

        <!-- Left and right controls -->
        '.$navHtml.'

    </div>';
}
?>