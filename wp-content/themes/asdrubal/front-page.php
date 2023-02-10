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
// include $plantillas .'cuatropost.php';
include 'plantillas/cuatropost.php' //(también puede usarse sin la variable $)
?>

</div>

<?php
//include_once 'footer.php';
get_footer();
?>