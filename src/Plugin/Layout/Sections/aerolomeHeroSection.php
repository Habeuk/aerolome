<?php

namespace Drupal\aerolome\Plugin\Layout\Sections;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection;

/**
 * aerolome hero section php
 * @Layout(
 *  id = "aerolome_hero_section",
 *  label = @Translation("aerolome hero section"),
 *  category = @Translation("aerolome"),
 *  path = "layouts/sections",
 *  library = "aerolome/aerolome_hero_section", * 
 *  template = "aerolome-hero-section",
 *  regions = {
 *      "aerolome_hero_title" = {
 *          "label" = @translation("aerolome hero title"), 
 *      },
 *      "aerolome_hero_description" = {
 *          "label" = @translation("aerolome hero description"), 
 *      },
 *      "aerolome_hero_call_to_action" = {
 *          "label" = @translation("aerolome hero call to action"), 
 *      },
 *      "aerolome_hero_watch_video" = {
 *          "label" = @translation("aerolome watch video"), 
 *      },
 *      "aerolome_hero_image" = {
 *          "label" = @translation("aerolome hero image"), 
 *      },
 *      "aerolome_hero_many_elements" = {
 *          "label" = @translation("aerolome hero many elements"), 
 *      },
 *  }
 * )
 */


class aerolomeHeroSection extends FormatageModelsSection {

    /**
     * {@inheritdoc}
     * @see Drupal\formatage_models\Plugin\Layout\FormatageModels::_construct
     */
    public function __construct(array $configuration, $pludin_id, $plugin_definition, StylesGroupManager $styleGroupManager) {
        // TODO auto-generated method stub
        parent::__construct($configuration, $pludin_id, $plugin_definition, $styleGroupManager);
        $this->pluginDefinition->set('icon', $this->pathResolver->getPath('module', 'aerolome') . "/icons/sections/aerolome-hero.png");
    }

    /**
     * {@inheritdoc}
     * @see Drupal\formatage_models\Plugin\Layout\FormatageModels::build
     */
    public function build(array $regions) {
        // TODO auto-generated method stub
        $build = parent::build($regions);
        FormatageModelsThemes::formatSettingValues($build);

        return $build;
    }

    /**
     * {@inheritdoc}
     */
    public function defaultConfiguration() {
        return parent::defaultConfiguration() + [
            'css' => '',
            'load_library' => true,
            'content' => [
                'builder-form' => true,
                'info' => [
                    'title' => 'aerolome Hero section',
                    'loader' => 'dynamic',
                ],
                'fields' => [
                    'aerolome_hero_title' => [
                        'text_html' => [
                            'label' => 'aerolome hero title',
                            'value' => 'Welcome to aerolome',
                        ]
                    ],
                    'aerolome_hero_description' => [
                        'text_html' => [
                            'label' => 'hero aerolome description',
                            'value' => 'Sed autem laudantium dolores. Voluptatem itaque ea consequatur eveniet. Eum quas beatae cumque eum quaerat.',
                        ]
                    ],
                    'aerolome_hero_call_to_action' => [
                        'url' => [
                            'label' => 'aerolome hero call to action',
                            'value' => [
                                'class' => 'link',
                                'text'  => 'Get Started',
                                'href'  => '#',
                            ]
                        ]
                    ],
                    'aerolome_hero_watch_video' => [
                        'url' => [
                            'label' => 'aerolome hero watch video',
                            'value' => [
                                'class' => 'link',
                                'text'  => 'watch video',
                                'href'  => '#',
                            ]
                        ]
                    ],
                    'aerolome_hero_image' => [
                        'img' => [
                            'label' => 'first container title',
                            'fids' => '',
                        ]
                    ],
                    'aerolome_hero_many_elements' => [
                        'text' => [
                            'label' => 'second container title',
                            'value' => 'title',
                        ]
                    ],
                ],
            ],
        ];
    }
}