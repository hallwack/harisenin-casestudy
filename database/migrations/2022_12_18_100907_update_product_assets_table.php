<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('product_assets', function (Blueprint $table) {
            /* $table->unsignedBigInteger('asset_id')->after('id')->nullable();
            $table->foreign('asset_id')->references('id')->on('assets')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('product_id')->after('asset_id')->nullable();
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade')->onUpdate('cascade'); */
            $table->foreignId('asset_id')->after('id')->constrained('assets');
            $table->foreignId('product_id')->after('asset_id')->constrained('products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('product_assets', function (Blueprint $table) {
            $table->dropConstrainedForeignId('asset_id');
            $table->dropConstrainedForeignId('product_id');
            /* $table->dropColumn('asset_id');
            $table->dropForeign('product_assets_asset_id_foreign'); */
            /* $table->dropColumn('product_id');
            $table->dropForeign('product_assets_product_id_foreign'); */
        });
    }
};
