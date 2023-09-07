<?php

declare(strict_types=1);

namespace Drupal\aerolome\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a vols réservation block.
 *
 * @Block(
 *   id = "aerolome_vols_r_servation",
 *   admin_label = @Translation("vols réservation"),
 *   category = @Translation("Custom"),
 * )
 */
final class VolsRServationBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build(): array {
    $build['content'] = [
      '#type' => "html_tag",
      '#tag' => 'section',
      "#attributes" => [
        'id' => 'fly-app',
        'class' => [
          'm-5',
        ]
      ]
    ];
    $build['content']['#attached']['library'][] = 'aerolome/aerolome_vue_lib';
    $build['content']['#attached']['library'][] = 'aerolome/aerolome_fly_app';
    return $build;
  }
}
