<?php
//include_once 'header.php';
get_header();
?>


<div class="generico">

<img height="300px" class="aspectofoto" src="<?php the_field( 'imagenarticulos' ); ?>" />

    <h1> 
        <?php the_title(); ?>
    <h1>

<section id="contenido">
    <?php 
    echo the_content();
    ?>
    <?php 
    if(get_field('precio')){
        ?>
     <div class= "precio"> <?php the_field( 'precio' ); ?>€</div>
     <?php 
    }
    else{;}
    ?>
</section>

</div>

<?php
//include_once 'footer.php';
get_footer();
?>