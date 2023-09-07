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
        $todayId = date("w");
        switch ($todayId) {
            case 0:
                $dayId = 23;
                break;
            case 1:
                $dayId = 17;
                break;
            case 2:
                $dayId = 18;
                break;
            case 3:
                $dayId = 19;
                break;
            case 4:
                $dayId = 20;
                break;
            case 5:
                $dayId = 21;
                break;
            case 6:
                $dayId = 22;
                break;
            default:
                # code...
                break;
        }
        $real_field = $this->tableAlias . '.' . $this->realField;
        if (!empty($this->value)) {
            $this->query->addWhere('AND', $real_field, $dayId, '=');
        }
    }
}
