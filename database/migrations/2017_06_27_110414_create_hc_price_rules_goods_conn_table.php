<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHcPriceRulesGoodsConnTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('hc_price_rules_goods_conn', function(Blueprint $table)
		{
			$table->integer('count', true);
			$table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->string('rule_id', 36)->nullable()->index('fk_hc_price_rules_goods_conn_hc_price_rules1_idx');
			$table->string('good_id', 36)->nullable()->index('fk_hc_price_rules_goods_conn_hc_goods1_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('hc_price_rules_goods_conn');
	}

}
