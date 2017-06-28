<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class HCPriceRulesGoodsConn extends Model
{
    /**
     * Table name
     * @var string
     */
    protected $table = 'hc_price_rules_goods_conn';

    /**
     * Fields which will be manipulated
     * @var array
     */
    protected $fillable = ['rule_id', 'good_id' ];
}
