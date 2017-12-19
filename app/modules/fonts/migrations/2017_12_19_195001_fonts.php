<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Capsule\Manager as Capsule;

class Fonts extends Migration
{
    public function up()
    {
        $capsule = new Capsule();
        $capsule::schema()->create('fonts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('serial_number');

            $table->string('name');
            $table->boolean('enabled');
            $table->string('type_name');
            $table->string('fullname');
            $table->boolean('type_enabled');
            $table->boolean('valid');
            $table->boolean('duplicate');
            $table->text('path');
            $table->string('type');
            $table->string('family');
            $table->string('style');
            $table->string('version');
            $table->boolean('embeddable');
            $table->boolean('outline');
            $table->string('unique_id');
            $table->text('copyright');
            $table->boolean('copy_protected');
            $table->text('description');
            $table->text('vendor');
            $table->text('designer');
            $table->text('trademark');
        });

    }

    public function down()
    {
        $capsule = new Capsule();
        $capsule::schema()->dropIfExists('fonts');
    }
}