<?php

/**
 * @file
 * Contains \Drupal\demo\Controller\SamplepageController.
 */

namespace Drupal\demo\Controller;

/**
 * SamplepageController.
 */
class SamplepageController {

  /**
   * Generates the demo page.
   */
  public function sample() {
    return array(
      '#markup' => '<p>' . t('Simple page: The quick brown fox jumps over the lazy dog.') . '</p>',
    );
  }
}

