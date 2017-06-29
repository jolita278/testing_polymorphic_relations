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
     * Get all of the tags for the post.
     */
    public function rules()
    {
        return $this->morphMany(HCPriceRulesAffectedItems::class, 'rulable');
    }

    /**
     * Get all of the tags for the post.
     */
    public function categories()
    {
        return $this->belongsToMany(HCGoodsCategories::class, 'hc_goods_categories_conn', 'good_id', 'category_id')->with('rules');
    }


}
