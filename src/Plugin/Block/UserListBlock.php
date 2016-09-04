<?php
/**
 * UserList block plugin.
 */

namespace Drupal\vue_drupal_demo\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'UserList' Block
 *
 * @Block(
 *   id = "user_list_block",
 *   admin_label = @Translation("Vue Demo 2 (in code): User List"),
 * )
 */
class UserListBlock extends BlockBase {
  /**
   * {@inheritdoc}
   */
  public function build() {
    return array(
      '#theme' => 'vue_drupal_demo_user_list',
      '#attached' => array(
        'library' =>  array(
          // You may want to add vue_libraries/vue and vue_libraries/vue-resource here as well.
          // In my case they are added by vue_libraries module.
          'vue_drupal_demo/vue-drupal-demo',
        ),
      ),
    );
  }
}
