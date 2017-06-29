<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class HCGoodsCategoriesConn extends Model
{
    /**
     * Table name
     * @var string
     */
    protected $table = 'hc_goods_categories_conn';


    /**
     * Fields which will be manipulated
     * @var array
     */
    protected $fillable = ['good_id', 'category_id'];


}
