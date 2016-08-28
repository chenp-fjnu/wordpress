#Notes for Inkness theme
*options.php include all options for customization.*

> of_get_option( $name, $default = false )

it will get the option value.

#Key Code Snippets

> <?php get_template_part('social', 'fa'); ?> 
  <?php get_template_part('slider', 'nivo'); ?>

*echo whole template file, social-fa.php and slider-nivo.php for these samples.*

> <?php get_template_part('sidebar', 'footer'); ?>
  *equals*
  <?php get_sidebar('footer'); ?>

*check option and share it in social-fa.php seciton*
>  <?php if ( of_get_option('weibo', true) != "") { ?>
   
   <a target="_blank" href="<?php echo esc_url(of_get_option('weibo', true)); ?>" title="微博" >
   
   <i class="social-icon fa fa-weibo"  aria-hidden="true"></i></a>

   <?php } ?>


#Fontawesome is awesome