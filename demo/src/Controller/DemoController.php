<?php

/**
 * @file
 * Contains \Drupal\demo\Controller\DemoController.
 */

namespace Drupal\demo\Controller;

/**
 * DemoController.
 */
class DemoController {

  /**
   * Generates the demo page.
   */
  public function demo() {
    return array(
      '#markup' => '<p>' . t('Simple page: The quick brown fox jumps over the lazy dog.') . '</p>',
    );
  }
}

