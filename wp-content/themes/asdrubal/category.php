<?php
// include_once 'header.php';
get_header();
?>

<div class="generico">
    
    <h1>
        <?php single_cat_title();?>
    </h1>

<section id="contenido">
    <?php
    echo category_description();
    ?>
    </section>

</div>

<?php
// include_once 'footer.php;
get_footer();
?>