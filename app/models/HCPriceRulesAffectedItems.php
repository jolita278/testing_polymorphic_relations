<?php

namespace App\models;

class HCPriceRulesAffectedItems extends CoreModel
{
    /**
     * Table name
     * @var string
     */
    protected $table = 'hc_prices_rules_affected_items';

    /**
     * Fields which will be manipulated
     * @var array
     */
    protected $fillable = ['id', 'rule_id', 'rulable_type', 'rulable_id'];
}
