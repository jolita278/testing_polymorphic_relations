<?php

namespace App\models;

class HCGoods extends CoreModel
{
    /**
     * Table name
     * @var string
     */
    protected $table = 'hc_goods';

    /**
     * Fields which will be manipulated
     * @var array
     */
    protected $fillable = ['id', 'name'];

    /**
     * Get all of the rules for the good.
     */
    public function rules()
    {
        return $this->morphMany(HCPriceRulesAffectedItems::class, 'rulable')->with('rule');
    }

    /**
     * Get all of the categories for the good.
     */
    public function categories()
    {
        return $this->morphMany(HCPriceRulesAffectedItems::class, 'rulable')->with('rule');
    }


}
