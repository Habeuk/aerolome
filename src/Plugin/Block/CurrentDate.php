<?php

namespace Drupal\aerolome\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Provides a 'CurrentDate' block.
 *
 * @Block(
 *  id = "current_date",
 *  admin_label = @Translation("Current date"),
 * )
 */
class CurrentDate extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function defaultConfiguration() {
    return [
      'date_format' => 'j/d/Y'
    ] + parent::defaultConfiguration();
  }

  /**
   * {@inheritdoc}
   */
  public function blockForm($form, FormStateInterface $form_state) {
    $form['date_format'] = [
      '#type' => 'textfield',
      '#title' => $this->t('date format'),
      '#description' => $this->t('the date time format in which the date will be printed'),
      '#default_value' => $this->configuration['date_format'],
      '#maxlength' => 10,
      '#size' => 10,
      '#weight' => '0',
    ];

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function blockSubmit($form, FormStateInterface $form_state) {
    $this->configuration['date_format'] = $form_state->getValue('date_format');
  }

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];
    $build['current_date']['#markup'] = \Drupal::service('date.formatter')->format(strtotime("today"), 'custom', $this->configuration['date_format'], NULL, 'fr');
    return $build;
  }

  /**
   * @return int
   */
  public function getCacheMaxAge() {
    return 0;
  }
}
