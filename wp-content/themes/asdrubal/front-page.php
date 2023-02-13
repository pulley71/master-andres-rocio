<?php
//include_once 'header.php';
get_header();
?>


<div class="generico">

    <h1>
        <?php the_title();?>
    <h1>

<section id="contenido">
    <?php 
    echo the_content();
    ?>
</section>

<?php
// ¡¡en la consola NO se ha creado el duplicado de la home!!
// en la home no sale el footer si no cambio la llamada así: include $plantillas .'cuatropost.php';
include $plantillas .'/display-post/card-post.php';
// include 'plantillas/cuatropost.php';  (también puede usarse este otro include)
?>

</div>

<?php
//include_once 'footer.php';
get_footer();
?>