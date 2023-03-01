<?php
//include_once 'header.php';
get_header();
/* Template name: sobre mi */

?>

<div class="fotoback"></div>
    <div>
    <h1> 
        <?php the_title(); ?>
    <h1>
    
<section id="contenido">
    <?php 
    echo the_content();
    ?>
</section>

</div>
<?php 
    include $plantillas. 'tresposts.php';
   
    ?>

<?php
//include_once 'footer.php';
get_footer();
?>