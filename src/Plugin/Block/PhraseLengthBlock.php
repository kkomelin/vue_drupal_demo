<?php
/**
 * PhraseLengthBlock block plugin.
 */

namespace Drupal\vue_drupal_demo\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'PhraseLength' Block
 *
 * @Block(
 *   id = "phrase_length_block",
 *   admin_label = @Translation("Vue Demo 1 (in code): Phrase Length"),
 * )
 */
class PhraseLengthBlock extends BlockBase {
  /**
   * {@inheritdoc}
   */
  public function build() {

    $renderable = array(
      '#theme' => 'vue_drupal_demo_phrase_length',
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
