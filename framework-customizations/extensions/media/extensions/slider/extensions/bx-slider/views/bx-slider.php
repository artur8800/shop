<?php if (!defined('FW')) die('Forbidden'); ?>
<?php if (isset($data['slides'])): 
	
	
	?>

	
<script type="text/javascript">
	jQuery("document").ready(function() {
  jQuery(".bxslider").bxSlider({
    auto: true,
    autoControls: true,
		responsive: true,
		pagerType: 'full',
		wrapperClass: 'theme_slider'
  });
});



</script>
	
	<ul class="bxslider">
		<?php foreach ($data['slides'] as $slide): ?>
			<li>
				<?php if ($slide['multimedia_type'] === 'video') : ?>
					<?php echo fw_oembed_get($slide['src'], $dimensions); ?>
				<?php else: ?>
				
				<a class="slide_link" href="<?php echo esc_attr($slide['extra']['link']); ?>">
					
					<img class="slider-image" src="<?php echo esc_attr($slide['src']); ?>"
					     alt="" width="<?php echo esc_attr($dimensions['width']); ?>"
					     height="<?php echo esc_attr($dimensions['height']); ?>"/>
					<h4 class="tpl-slider_title tpl-news-slider__title"><?php echo esc_attr($slide['title']) ?></h4> 
				</a>
				<?php endif; ?>
			</li>
			
		<?php endforeach; ?>
	</ul>
<?php endif; ?>
