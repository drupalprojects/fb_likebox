<?php

/**
 * @file
 * Post update functions for Facebook Likebox.
 */

use Drupal\block\Entity\Block;

/**
 * @addtogroup updates-8.x-2.0-to-8.x-2.1
 * @{
 */

/**
 * Initialize 'events' and 'messages' field values to 'fb_likebox' blocks.
 */
function fb_likebox_post_update_add_events_messages_keys_to_fb_blocks() {

  /** @var $blocks \Drupal\block\BlockInterface[] */
  foreach (Block::loadMultiple() as $block) {
    // Set events and messages in settings.
    if ($block->getPluginId() == 'fb_likebox_block') {
      $settings = $block->get('settings');
      if(!array_key_exists ('events', $settings)) {
        $settings['events'] = 0;
      }
      if(!array_key_exists ('messages', $settings)) {
        $settings['messages'] = 0;
      }
      $block->set('settings', $settings);
      $block->save();
    }
  }
}

/**
 * @} End of "addtogroup updates-8.x-2.0-to-8.x-2.1".
 */
