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

    $renderable = array(
      '#theme' => 'vue_drupal_demo_user_list',
      '#attached' => array(
        'library' =>  array(
          'vue_drupal_demo/vue-drupal-demo',
        ),
      ),
    );

    if (VUE_DRUPAL_DEMO_USE_MINIFIED) {
      $renderable['#attached']['library'][] = 'vue_drupal_demo/vue';
      $renderable['#attached']['library'][] = 'vue_drupal_demo/vue-resource';
    }
    else {
      $renderable['#attached']['library'][] = 'vue_drupal_demo/vue-dev';
      $renderable['#attached']['library'][] = 'vue_drupal_demo/vue-resource-dev';
    }

    return $renderable;
  }
}
