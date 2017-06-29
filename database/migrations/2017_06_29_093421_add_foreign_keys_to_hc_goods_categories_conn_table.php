<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToHcGoodsCategoriesConnTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('hc_goods_categories_conn', function(Blueprint $table)
		{
			$table->foreign('good_id', 'fk_hc_goods_categories_conn_hc_goods')->references('id')->on('hc_goods')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('category_id', 'fk_hc_goods_categories_conn_hc_goods_categories')->references('id')->on('hc_goods_categories')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('hc_goods_categories_conn', function(Blueprint $table)
		{
			$table->dropForeign('fk_hc_goods_categories_conn_hc_goods');
			$table->dropForeign('fk_hc_goods_categories_conn_hc_goods_categories');
		});
	}

}
