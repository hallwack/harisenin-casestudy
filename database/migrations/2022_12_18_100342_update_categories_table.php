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
    Schema::table('categories', function (Blueprint $table) {
      /* $table->unsignedBigInteger('asset_id')->after('category_slug')->nullable();
      $table->foreign('asset_id')->references('id')->on('assets')->onDelete('cascade')->onUpdate('cascade'); */
      $table->foreignId('asset_id')->after('category_slug')->constrained('assets');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::table('categories', function (Blueprint $table) {
      $table->dropConstrainedForeignId('asset_id');
      /* $table->dropColumn('asset_id');
      $table->dropForeign('categories_asset_id_foreign'); */
    });
  }
};
