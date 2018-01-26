<?php 
  global $base_url;
  $module_path = drupal_get_path('module', 'dexp_shortcodes'); 
  $library = libraries_get_libraries();
  if (isset($library['bxslider'])) {
    $path = $library['bxslider'];
    drupal_add_css($path . '/jquery.bxslider.css');
    drupal_add_js($path . '/jquery.bxslider.min.js');
  }
?>

<script src="<?php print $base_url.'/'.$module_path.'/asset/js/dexp_shortcode_bxslider.js';?>"></script>
<div class="view-content">
    <div id="<?php print $bx_slider_wapper_id;?>" class="dexp-shortcode-bxslider" data-auto="<?php print $auto;?>" data-pager="<?php print $pager;?>" data-controls="<?php print $control;?>" data-minSlides="<?php print $min;?>" data-maxSlides="<?php print $max;?>" data-moveSlides="<?php print $move;?>" data-slideMargin="<?php print $margin;?>" data-slideWidth="<?php print $width;?>">
        <?php print $content;?>
    </div>
</div>    
    