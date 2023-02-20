<?php
$term= get_queried_object();
$protocol = isset ($_SERVER["HTTPS"]) ? 'https' : 'http';
$url_sin_string = $protocol . '://' . $_SERVER['HTTP_HOST'] . strtok($_SERVER["REQUEST_URI"], '?');
?>

<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta charset="UTF-8">

<?php $metarobots_checked_values = get_field( 'metarobots',$term ); 
if ( $metarobots_checked_values ) : ?>
	
        <meta name= "robots" content="<?php the_field( 'metarobots',$term );
	?>">
<?php endif; ?>
    


    <?php the_field( 'custom_meta', $term ); ?>

    <meta http-equiv="" content="" />
    <title><?php the_field( 'title',$term ); ?></title>
    <meta property="og:title" content="
    
    <?php if(get_field('og_title',$term)){
        the_field('og_title',$term);
    } 
    else the_field( 'title',$term );{
    } 
     
    ?>
    ">
    
    
    <meta property="twitter:title" content="
   
   <?php if(get_field('twitter_title',$term)){
        the_field('twitter_title',$term);
    } 
    elseif(get_field('og_title',$term)){
        the_field('og_title',$term);
    } 
    else the_field( 'title',$term );{
    }    
    ?>">

    <meta name= "description" content="<?php the_field( 'description',$term ); ?>" >

    <meta name="robots" content="">
    <meta name="bingbot" content="">

    <link rel= "canonical" href="
    <?php if(get_field('canonical',$term)){
        the_field('canonical',$term);
    } 
    else echo $url_sin_string; 
    ?>">
    
    <meta property="og:url" content="<?php if(get_field('canonical',$term)){
        the_field('canonical',$term);
    } 
    else echo $url_sin_string; 
    ?>">
    <meta property="twitter:url" content="<?php if(get_field('canonical',$term)){
        the_field('canonical',$term);
    } 
    else echo $url_sin_string; 
    ?>">

    <meta property="og:description" content="
    
   <?php if(get_field('og_description',$term)){
        the_field('og_description',$term);
    } 
    
    else the_field( 'description',$term );{
    }    
    ?>">
    
    <meta property="twitter:description" content="
    <?php if(get_field('twitter_description',$term)){
        the_field('twitter_description',$term);
    } 
    elseif(get_field('og_description',$term)){
        the_field('og_description',$term);
    } 
    else the_field( 'description',$term );{
    }    
    ?>">
    
    

    <meta property="og:image" content="<?php echo get_template_directory_uri(). '/screenshot.png'; ?>">

    <meta property="og:image:secure_url" content="<?php echo get_template_directory_uri(). '/screenshot.png'; ?>">
    <meta property="twitter:image" content="<?php echo get_template_directory_uri(); '/screenshot.png'; ?>">
    <meta property="og:image:alt" content="<?php the_field( 'title',$term ); ?>">

    <meta property="og:type" content="website">
    <meta property="twitter:card" content="sumary_large_image">
    <meta name="twitter:site" content="@andres">
    <meta name="twitter:creator" content="@andres">
    <!--
    <meta name="robots" content="all">
    <meta name="robots" content="index, follow">
    <meta name="robots" content="index, nofollow">
    <meta name="robots" content="noindex, follow">
    <meta name="robots" content="noindex, nofollow">
    <meta name="robots" content="none">
    <meta name="robots" content="index, max-snippet:-1" caracteres que se quiera>
    <meta name="robots" content="index, max-snippet: 0" igual que nosnippet>
    -->
   <!-- <meta name="rating" content="adult"-->