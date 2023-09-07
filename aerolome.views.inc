<?php

/**
 *
 * @file
 * Provides views data for aerolome.module.
 */


/**
 * Implements hook_views_data_alter().
 */
function aerolome_views_data_alter(array &$data) {
    /**
     * Ajout du filtre de jour de la semaine pour les vols.
     * on identifie notre filtre avec 'week_day_filter'.
     * la colonne est definie : 'field'
     * la requete est cree par 'id'
     */
    if (!empty($data['node__field_tags'])) {
        $data['node__field_tags']['field_tags_target_id'] = [
            'title' => t('Jour de la semaine'),
            'group' => t('Global'),
            'filter' => [
                'field' => 'field_tags_target_id',
                'id' => 'aerolome_date_filter',
                'title' => t('Est définit pour le jour de la semaine actuel'),
                'help' => t('Filtre les nodes en fonctions du jour de la semaine actuel')
            ]
        ];
    }
}
