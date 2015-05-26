<?php

/**
 * @file
 * Facebook Likebox Template.
 */
?>

<div class="fb-page" data-href="<?php echo $fb_likebox_url; ?>"
	data-width = "<?php echo $fb_likebox_width; ?>"
	data-height = "<?php echo $fb_likebox_height; ?>"
	data-hide-cover="<?php echo $fb_likebox_hide_header; ?>"
	data-show-facepile="<?php echo $fb_likebox_show_faces; ?>"
	data-show-posts="<?php echo $fb_likebox_stream; ?>">
	<div class="fb-xfbml-parse-ignore">
		<blockquote cite="<?php echo $fb_likebox_url; ?>">
			<a href="<?php echo $fb_likebox_url; ?>"><?php echo $fb_likebox_title; ?></a>
		</blockquote>
	</div>
</div>
