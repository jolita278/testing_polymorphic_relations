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
    protected $fillable = ['id', 'name', 'from', 'to', 'type', 'amount'];

    /**
     * Get all of the goods that are assigned this rule.
     */
    public function goods()
    {
        return $this->morphedByMany('App\models\HCGoods', 'rulable')->where('rule_id', $this->id);
    }

    /**
     * Get all of the categories that are assigned this rule.
     */
    public function categories()
    {
        return $this->morphedByMany('App\models\HCGoodsCategories', 'rulable')->where('rule_id', $this->id);
    }
}
