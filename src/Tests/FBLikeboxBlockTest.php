<?php

/**
 * @file
 * Contains \Drupal\fb_likebox\Tests\FBLikeboxBlockTest.
 */

namespace Drupal\fb_likebox\Tests;

use Drupal\simpletest\WebTestBase;

/**
 * Tests if the facebook likebox block is available.
 *
 * @group fb_likebox
 */
class FBLikeboxBlockTest extends WebTestBase {

  /**
   * @todo Remove the disabled strict config schema checking.
   */
  protected $strictConfigSchema = FALSE;

  /**
   * Modules to enable.
   *
   * @var array
   */
  public static $modules = array(
    'system_test', 'block','fb_likebox'
  );

  /**
   * {@inheritdoc}
   */
  protected function setUp() {
    parent::setUp();
    // Create and login user.
    $admin_user = $this->drupalCreateUser(array(
      'administer blocks', 'administer site configuration',
      'access administration pages',
    ));
    $this->drupalLogin($admin_user);
  }

  /**
   * Test that the sharethis form block can be placed and works.
   */
  public function testFBLikeboxBlock() {
    // Test availability of the fb_likebox block in the admin "Place blocks" list.
    \Drupal::service('theme_handler')->install(['bartik', 'seven', 'stark']);
    $theme_settings = $this->config('system.theme');
    foreach (['bartik', 'seven', 'stark'] as $theme) {
      $this->drupalGet('admin/structure/block/list/' . $theme);
      $this->assertTitle(t('Block layout') . ' | Drupal');
      $settings = array();
      $settings['settings[fb_likebox_display_settings][url]'] = 'https://www.facebook.com/FacebookDevelopers';
      $settings['settings[fb_likebox_display_settings][title]'] = 'Iframe Title';
      $settings['settings[fb_likebox_display_settings][width]'] = 180;
      $settings['settings[fb_likebox_display_settings][height]'] = 70;
      $settings['settings[fb_likebox_display_settings][language]'] = 'en_IN';
      $settings['region'] = 'content';
      $settings['theme'] = $theme;
      $this->drupalPostForm('admin/structure/block/add/fb_likebox_block', $settings, t('Save block'));
      $this->assertText(t('The block configuration has been saved.'));
      // Set the default theme and ensure the block is placed.
      $theme_settings->set('default', $theme)->save();
      $this->drupalGet('');
      $result = $this->xpath('//div[@class=:class]', array(':class' => 'fb-page'));
      $this->assertEqual(count($result), 1, 'Facebook Likebox block found');
    }
  }

}
