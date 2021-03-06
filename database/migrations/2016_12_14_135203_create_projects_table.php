<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('projects', function(Blueprint $table){
      $table->increments('id');
      $table->string('name', 150);
      $table->string('address', 75);
      $table->string('phone', 45);
      $table->string('phone2', 45);
      $table->string('cellphone', 45);
      $table->tinyInteger('rooms');
      $table->tinyInteger('bathrooms');
      $table->integer('floors');
      $table->text('description');
      $table->integer('state')->default(1); // 1 = Vivienda nueva
      $table->integer('status')->default(1); // 1 = Creado -- 2 = Suspendido -- 3 = Finalizado
      $table->string('project_code',15);
      $table->decimal('built_area', 10, 2);
      $table->decimal('full_area', 10, 2);
      $table->string('zone', 45);
      $table->string('city', 45);
      $table->string('neighborhood', 45);
      $table->integer('stratum');
      $table->integer('property_type_id');
      $table->integer('use_type_id');
      $table->decimal('price', 18, 2);
      // $table->integer('business_type_id');
      $table->integer('user_id');
      $table->string('video360', 20);
      // $table->integer('parking');
      // $table->string('unit_quantity',100,3);
      // $table->string('left_units',100,3);
      $table->timestamps();
    });
    DB::statement('ALTER TABLE projects ADD coordinates POINT');
  }

  /**
  * Reverse the migrations.
  *
  * @return void
  */
  public function down()
  {
    Schema::dropIfExists('projects');
  }
}
