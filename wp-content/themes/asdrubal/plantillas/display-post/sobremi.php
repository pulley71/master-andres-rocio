<?php
//include_once __DIR__ . ('/../header.php');
get_header();
/* Template name: sobre mi */

?>


<div class="generico">


    <h1> 
        <?php the_title(); ?>
    <h1>

<section id="contenido">
    <?php 
    echo the_content();
    ?>
</section>

<?php
include $plantillas .'cuatropost.php';
// include 'plantillas/cuatropost.php';  (también puede usarse este otro include)
?>
</div>

<?php
//include_once __DIR__ . ('/footer.php');
get_footer();
?>