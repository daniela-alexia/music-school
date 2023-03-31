<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('teachers', function (Blueprint $table) {
      $table->id();
      $table->string('teachers_name')->nullable();
      $table->string('teachers_course')->nullable();
      $table->text('teachers_description')->nullable();
      $table->string('teachers_image')->nullable();
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('teachers');
  }
};
