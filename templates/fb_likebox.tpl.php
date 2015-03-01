<?php

/**
 * @file
 * Facebook Likebox Template.
 */
?>

<iframe
src="//www.facebook.com/plugins/likebox.php?href=<?php echo $fb_url; ?>&amp;width=<?php echo $fb_width; ?>&amp;colorscheme=<?php echo $fb_colorscheme; ?>&amp;show_faces=<?php echo $fb_show_faces; ?>&amp;bordercolor&amp;stream=<?php echo $fb_stream; ?>&amp;header=<?php echo $fb_header; ?>&amp;height=<?php echo $fb_height; ?>&amp;show_border=<?php echo $fb_show_border; ?>&amp;force_wall=<?php echo $fb_force_wall; ?>"
scrolling="<?php echo $fb_scrolling; ?>"
frameborder="0"
style="border: none; overflow: hidden; width: <?php echo $fb_width; ?><?php echo $fb_width_units; ?>; height: <?php echo $fb_height; ?>px;"
allowTransparency="true" title="<?php echo $fb_iframe_title; ?>">
</iframe>
