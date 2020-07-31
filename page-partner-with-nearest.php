<?php

get_header();

?>
<h1>Partner with Nearest</h1>
<?php

if (have_posts()) :
?>
<div class="partner-with-us">
<?php
    while (have_posts()) :
        the_post();


        get_template_part('template-parts/content');


    endwhile;
?>
</div>
<?php
else :
    get_template_part('template-parts/content-none.php');

endif;

get_footer();
