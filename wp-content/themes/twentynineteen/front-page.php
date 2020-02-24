<?php
if ( is_home() ) :
    get_header();
elseif ( is_404() ) :
    get_header( '404' );
else :
    get_header();
endif;
?>

<?php var_dump(get_field('boss_complaints')) ?>
