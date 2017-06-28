<?php

namespace App\models;

class HCPriceRules extends CoreModel
{
    /**
     * Table name
     * @var string
     */
    protected $table = 'hc_price_rules';

    /**
     * Fields which will be manipulated
     * @var array
     */
    protected $fillable = ['id', 'name', 'from', 'to', 'type', 'amount', 'gift_quantity'];
}
