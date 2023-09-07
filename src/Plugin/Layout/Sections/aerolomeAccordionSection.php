<?php

namespace Drupal\aerolome\Plugin\Layout\Sections;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection;

/**
 * aerolome Accordion section php
 * @Layout(
 *  id = "aerolome_accordion_section",
 *  label = @Translation("aerolome accordion section"),
 *  category = @Translation("aerolome"),
 *  path = "layouts/sections",
 *  library = "aerolome/aerolome_accordion_section", * 
 *  template = "aerolome-accordion-section",
 *  regions = {
 *      "aerolome_accordion_title" = {
 *          "label" = @translation("aerolome accordion title"), 
 *      },
 *      "aerolome_accordion_description" = {
 *          "label" = @translation("aerolome accordion description"), 
 *      },
 *      "aerolome_accordion_call_to_action" = {
 *          "label" = @translation("aerolome accordion call to action"), 
 *      },
 *      "aerolome_accordion_image_btn" = {
 *          "label" = @translation("aerolome button on image"), 
 *      },
 *      "aerolome_accordion_image" = {
 *          "label" = @translation("aerolome accordion image"), 
 *      },
 *      "aerolome_accordion_fields" = {
 *          "label" = @translation("aerolome accordion field"), 
 *      },
 *  }
 * )
 */


class aerolomeAccordionSection extends FormatageModelsSection {

    /**
     * {@inheritdoc}
     * @see Drupal\formatage_models\Plugin\Layout\FormatageModels::_construct
     */
    public function __construct(array $configuration, $pludin_id, $plugin_definition, StylesGroupManager $styleGroupManager) {
        // TODO auto-generated method stub
        parent::__construct($configuration, $pludin_id, $plugin_definition, $styleGroupManager);
        $this->pluginDefinition->set('icon', $this->pathResolver->getPath('module', 'aerolome') . "/icons/sections/aerolome-accordion.png");
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
                    'title' => 'aerolome accordion section',
                    'loader' => 'dynamic',
                ],
                'fields' => [
                    'aerolome_accordion_title' => [
                        'text_html' => [
                            'label' => 'aerolome accordion title',
                            'value' => 'Welcome to aerolome',
                        ]
                    ],
                    'aerolome_accordion_description' => [
                        'text_html' => [
                            'label' => 'accordion aerolome description',
                            'value' => 'Sed autem laudantium dolores. Voluptatem itaque ea consequatur eveniet. Eum quas beatae cumque eum quaerat.',
                        ]
                    ],
                    'aerolome_accordion_call_to_action' => [
                        'url' => [
                            'label' => 'aerolome accordion call to action',
                            'value' => [
                                'class' => 'link',
                                'text'  => 'Get Started',
                                'href'  => '#',
                            ]
                        ]
                    ],
                    'aerolome_accordion_image_btn' => [
                        'url' => [
                            'label' => 'aerolome accordion button on image',
                            'value' => [
                                'class' => 'link',
                                'text'  => 'action',
                                'href'  => '#',
                            ]
                        ]
                    ],
                    'aerolome_accordion_image' => [
                        'img' => [
                            'label' => 'first container title',
                            'fids' => '',
                        ]
                    ],
                    'aerolome_accordion_fields' => [
                        'text_html' => [
                            'label' => 'Accordion fields',
                        ]
                    ],
                ],
            ],
        ];
    }
}
