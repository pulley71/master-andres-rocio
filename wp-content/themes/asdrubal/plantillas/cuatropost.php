<section id="cuatropostdisplay" clas="box cards">
    <?php
        $args = array(
           'post_per_page' => 4, // número de post que queremos se publiquen(-1 = infinito)
           'post_type' => 'post', // será un post
           'orderby' => 'date', // que se ordene por..
           'order' => 'DESC', // orden p.ej.descendente

        );
        $the_query = new WP_Query( $args ); // en documentación aparece en todo $query ¿por qué añadir >the<?
        // un loop
        while ($the_query->have_post()){
            $the_query->the_post();
            //include

        }
        wp_reset_postdata();

    ?>

</section>
