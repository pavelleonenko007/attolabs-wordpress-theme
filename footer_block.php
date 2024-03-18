
<?php wp_footer(); ?>
<script type="text/javascript"
  src="<?php echo get_template_directory_uri() ?>/js/main.js?ver=1710747764"></script>
<script type="text/javascript"
  src="<?php echo get_template_directory_uri() ?>/js/front.js?ver=1710747764"></script>
<?php if(file_exists(dirname( __FILE__ ).'/mailer.php')){ include_once 'mailer.php'; } ?>
<?php if(function_exists('get_field')) { echo get_field('footer_code', 'option'); } ?>
<?php if(file_exists(dirname( __FILE__ ).'/footer_code.php')){ include_once 'footer_code.php'; } ?>
<script type="text/javascript"
  src="<?php echo get_template_directory_uri() ?>/js/shop.js?ver=1710747764"></script>
<script defer src="https://unpkg.com/shuffle-letters"></script><script defer src="https://unpkg.com/splitting/dist/splitting.min.js"></script><script defer src="https://cdn.jsdelivr.net/npm/@finsweet/attributes-formsubmit@1/formsubmit.js"></script><script defer src="https://thevogne.ru/clients/vosk-clients/atto/scripts.js" type="text/javascript"></script>