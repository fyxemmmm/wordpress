<?php

$image_file = get_random_bg_url() ? 'background-image: url('.get_random_bg_url().');' : '';

$bg_style = akina_option('focus_height') ? 'background-position: center center;background-attachment: inherit;' : '';

?>

<figure id="centerbg" class="centerbg" style="<?php echo $image_file.$bg_style ?>">

<?php if (akina_option('waveloop') != '0'){ ?>

     <div id="banner_bolang_bg_1"></div>

     <div id="banner_bolang_bg_2"></div>

<?php } ?>

	<?php if ( !akina_option('focus_infos') ){ ?>



	<?php } ?>

</figure>

<?php

echo bgvideo(); //BGVideo 