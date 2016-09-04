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
    return array(
      '#theme' => 'vue_drupal_demo_phrase_length',
      '#attached' => array(
        'library' =>  array(
          'vue_drupal_demo/vue-drupal-demo',
        ),
      ),
    );
  }
}
