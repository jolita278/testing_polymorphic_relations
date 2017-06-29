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

    /**
     * Get all of the posts that are assigned this tag.
     */
    public function goods()
    {
        return $this->morphedByMany('App\models\HCGoods', 'rulable')->where('rule_id', $this->id);
    }

    /**
     * Get all of the videos that are assigned this tag.
     */
    public function categories()
    {
        return $this->morphedByMany('App\models\HCGoodsCategories', 'rulable')->where('rule_id', $this->id);
    }
}
