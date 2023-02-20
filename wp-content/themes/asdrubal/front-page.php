<?php
//include_once 'header.php';
get_header();
?>


<div class="generico">

    <h1 class="headingexample"> 
    <div class= "colorh1">Esto es un heading 1</div> para mi web
    <h1>

    <h2>prueba merge</h2>

<section id="contenido">
    <?php 
    echo the_content();
    ?>
</section>
    <?php 
    include $plantillas. 'tresposts.php';
   
    ?>
</div>

<?php
//include_once 'footer.php';
get_footer();
?>
