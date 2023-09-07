<?php

namespace Drupal\aerolome\Plugin\views\filter;

use Drupal\views\Plugin\views\filter\BooleanOperator;


/**
 * Filter class which filters by the available teams.
 * 
 * @ingroup global
 * 
 * @ViewsFilter("aerolome_date_filter")
 */
class aerolomeDateFilter extends BooleanOperator {

    /**
     *
     * {@inheritdoc}
     */
    public function query() {
        $this->ensureMyTable();
        $dayId = 0;
        $todayId = (int) date("w");
        $dayId = match ($todayId) {
            0 => 23,
            1 => 17,
            2 => 18,
            3 => 19,
            4 => 20,
            5 => 21,
            6 => 22,
        };
        $real_field = $this->tableAlias . '.' . $this->realField;
        $this->query->addWhere('AND', $real_field, $dayId, '=');
    }
}
