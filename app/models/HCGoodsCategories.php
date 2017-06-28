<?php

namespace App\models;

class HCGoodsCategories extends CoreModel
{
    /**
     * Table name
     * @var string
     */
    protected $table = 'hc_goods_categories';

    /**
     * Fields which will be manipulated
     * @var array
     */
    protected $fillable = ['id', 'name'];
}
