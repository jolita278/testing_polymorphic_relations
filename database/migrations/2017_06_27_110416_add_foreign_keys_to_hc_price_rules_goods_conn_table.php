<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToHcPriceRulesGoodsConnTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('hc_price_rules_goods_conn', function(Blueprint $table)
		{
			$table->foreign('good_id', 'fk_hc_price_rules_goods_conn_hc_goods1')->references('id')->on('hc_goods')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('rule_id', 'fk_hc_price_rules_goods_conn_hc_price_rules1')->references('id')->on('hc_price_rules')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('hc_price_rules_goods_conn', function(Blueprint $table)
		{
			$table->dropForeign('fk_hc_price_rules_goods_conn_hc_goods1');
			$table->dropForeign('fk_hc_price_rules_goods_conn_hc_price_rules1');
		});
	}

}
