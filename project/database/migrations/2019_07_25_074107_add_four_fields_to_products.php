<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFourFieldsToProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('shop_product', function (Blueprint $table) {
            //
            $table->string('ship_info');
            $table->text('infomation');
            $table->text('review');
            $table->text('help');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('shop_product', function (Blueprint $table) {
            //
            $table->dropColumn('ship_info');
            $table->dropColumn('infomation');
            $table->dropColumn('review');
            $table->dropColumn('help');
        });
    }
}
