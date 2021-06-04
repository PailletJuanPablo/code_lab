<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modules', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->integer('order')->nullable();
            $table->boolean('current')->default(false);
            $table->timestamps();
            $table->softDeletes();

        });

        Schema::create('units', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->integer('order')->nullable();
            $table->foreignId('module_id')->constrained('users');
            $table->timestamps();
            $table->softDeletes();

        });

        Schema::create('lessons', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->integer('order')->nullable();
            $table->foreignId('unit_id')->constrained('units');
            $table->timestamps();
            $table->softDeletes();

        });

   

        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->text('css_code')->nullable();
            $table->text('html_code')->nullable();
            $table->text('js_code')->nullable();

            $table->boolean('resolved')->default(false);
            $table->foreignId('lesson_id')->constrained('lessons')->nullable();
            $table->foreignId('unit_id')->constrained('units')->nullable();
            $table->foreignId('user_id')->constrained('users')->nullable();

            $table->timestamps();
            $table->softDeletes();

        });

        Schema::create('answers', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->text('css_code')->nullable();
            $table->text('html_code')->nullable();
            $table->text('js_code')->nullable();

            $table->boolean('resolved')->default(false);
            $table->foreignId('lesson_id')->constrained('lessons')->nullable();
            $table->foreignId('unit_id')->constrained('units')->nullable();
            $table->foreignId('user_id')->constrained('users')->nullable();
            $table->foreignId('question_id')->constrained('questions')->nullable();

            $table->timestamps();
            $table->softDeletes();

        });




    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('modules');
    }
}
