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
          'vue_drupal_demo/vue-drupal-demo',
        ),
      ),
    );
  }
}
